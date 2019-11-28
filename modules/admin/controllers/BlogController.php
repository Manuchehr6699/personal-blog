<?php

namespace app\modules\admin\controllers;

use app\models\BlogCategory;
use app\models\Category;
use app\modules\admin\models\ModelStatus;
use app\modules\admin\models\UploadForm;
use Cocur\Slugify\Slugify;
use Yii;
use app\models\blog;
use app\modules\admin\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BlogController implements the CRUD actions for blog model.
 */
class BlogController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all blog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single blog model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new blog();
        $blogCategory = new BlogCategory();
        $slug = new Slugify();
        $photo = new UploadForm();

        $categories = Category::find()->where(['status' => 1])->asArray()->all();

        if ($model->load(Yii::$app->request->post()) && $blogCategory->load(Yii::$app->request->post())){
            ModelStatus::setTimeStampCreate($model);
            $model->alias = $slug->slugify($model->title);
            $model->tags = $this->setBlogTags($model->tags);
            $photo->imageFile = UploadedFile::getInstance($model, 'photo');
            if(!empty($photo->imageFile) && $photo->upload('blog')){
                $path = $photo->imageFile->baseName . '.' . $photo->imageFile->extension;
                $model->photo = $path;
            }
            if($model->save()){
                foreach ($blogCategory->category_id as $id){
                    $blogCat = new BlogCategory();
                    $blogCat->category_id = $id;
                    $blogCat->blog_id = $model->id;
                    $blogCat->status =1;
                    $blogCat->save();
                    ModelStatus::setTimeStampCreate($blogCat);
                    $blogCat->save();
                    unset($blogCat);
                }
                ModelStatus::setNotifySuccesSaved();
                return $this->redirect(['index']);
            }else{
                ModelStatus::setNotifyErrorSaved();
            }
        }

        return $this->render('create', [
            'model' => $model,
            'blogCategory' => $blogCategory,
            'categories' => $categories
        ]);
    }

    /**
     * Updates an existing blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        //Todo
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            ModelStatus::setTimeStampUpdate();
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        //Todo
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = blog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function setBlogTags($tags){
        $arr = explode(',', $tags);
        return serialize($arr);
    }
}
