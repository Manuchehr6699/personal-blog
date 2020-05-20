<?php

namespace app\modules\admin\controllers;

use app\models\BlogCategory;
use app\models\Category;
use app\modules\admin\models\ModelStatus;
use app\modules\admin\models\UploadForm;
use Cocur\Slugify\Slugify;
use Yii;
use app\models\Blog;
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
        $model = Blog::find()
            ->select('b.*, u.username, u.email, u.user_type')
            ->from('blog b')
            ->innerJoin('user u', 'b.created_by = u.user_id')
            ->asArray()->one();

        return $this->render('view', [
            'model' => $model,
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

        if($model->load(Yii::$app->request->post()) && $blogCategory->load(Yii::$app->request->post())){
            ModelStatus::setTimeStampCreate($model);
            $model->alias = $slug->slugify($model->title);
            $model->tags = $this->setBlogTags($model->tags);
            $model->like_count = 0;
            $photo->imageFile = UploadedFile::getInstance($model, 'photo');
            if(!empty($photo->imageFile) && $photo->upload('blog')){
                $path = $photo->imageFile->baseName . '.' . $photo->imageFile->extension;
                $model->photo = $path;
            }
            if($model->save()){
                if(!empty($blogCategory->category_id)){
                    foreach($blogCategory->category_id as $id){
                        $blogCat = new BlogCategory();
                        $blogCat->category_id = $id;
                        $blogCat->blog_id = $model->id;
                        $blogCat->status =1;
                        $blogCat->save();
                        ModelStatus::setTimeStampCreate($blogCat);
                        $blogCat->save();
                        unset($blogCat);
                    }
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
        $model = $this->findModel($id);
        $blogCategory = new BlogCategory();
        $slug = new Slugify();
        $photo = new UploadForm();
        $oldPhoto = $model->photo;
        $categories = Category::find()->where(['status' => 1])->asArray()->all();
        $tags = unserialize($model->tags);
        $model->tags = implode(',', $tags);
       if($model->load(Yii::$app->request->post()) && $blogCategory->load(Yii::$app->request->post())){
          ModelStatus::setTimeStampUpdate($model);
          $model->alias = $slug->slugify($model->title);
          $model->tags = $this->setBlogTags($model->tags);
          $photo->imageFile = UploadedFile::getInstance($model, 'photo');
          if(!empty($photo->imageFile) && $photo->upload('blog')){
             $path = $photo->imageFile->baseName . '.' . $photo->imageFile->extension;
             $model->photo = $path;
          }else{
              $model->photo = $oldPhoto;
          }
          if($model->save()){
              if(!empty($blogCategory->category_id)){
                  foreach($blogCategory->category_id as $id){
                      $blogCat = new BlogCategory();
                      $blogCat->category_id = $id;
                      $blogCat->blog_id = $model->id;
                      $blogCat->status =1;
                      $blogCat->save();
                      ModelStatus::setTimeStampCreate($blogCat);
                      $blogCat->save();
                      unset($blogCat);
                  }
              }

             ModelStatus::setNotifySuccesSaved();
             return $this->redirect(['index']);
          }else{
             ModelStatus::setNotifyErrorSaved();
          }
       }

       return $this->render('update', [
           'model' => $model,
           'blogCategory' => $blogCategory,
           'categories' => $categories
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
        $model = $this->findModel($id);
        if(!empty($model)){
            Yii::$app->db->createCommand('DELETE FROM blog_category WHERE blog_id ='.$model->id)->execute();
            if($model->delete()){
                ModelStatus::setNotifySuccessDeleted();
            }else{
                ModelStatus::setNotifyErrorDeleted();
            }
        }

        return $this->redirect(['index']);
    }

    public function actionPosts(){
        $posts = Blog::find()->orderBy('id desc')->asArray()->all();

        return $this->render('posts', [
            'posts' => $posts
        ]);
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
