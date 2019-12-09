<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\ModelStatus;
use app\modules\admin\models\UploadForm;
use Yii;
use app\models\MyBooks;
use app\modules\admin\models\MyBooksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MyBooksController implements the CRUD actions for MyBooks model.
 */
class MyBooksController extends Controller
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
     * Lists all MyBooks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MyBooksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MyBooks model.
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
     * Creates a new MyBooks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MyBooks();
        $photo = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
            $photo->imageFile = UploadedFile::getInstance($model, 'photo');
            $photo->ebookFile = UploadedFile::getInstance($model, 'ebook_file');

            if(!empty($photo->imageFile) && $photo->upload('book_cover')){
                $path = $photo->imageFile->baseName . '.' . $photo->imageFile->extension;
                $model->photo = $path;
            }
            if(!empty($_FILES['MyBooks']['tmp_name']['ebook_file'])) {
                $filePath = \Yii::getAlias('@webroot') . '/upload/files/';
                $uploadfile = $filePath . basename($_FILES['MyBooks']['name']['ebook_file']);
                move_uploaded_file($_FILES['MyBooks']['tmp_name']['ebook_file'], $uploadfile);
                $filename = basename($_FILES['MyBooks']['name']['ebook_file']);
                $model->ebook_file = $filename;
            }
            ModelStatus::setTimeStampCreate($model);
            if($model->save()){
                ModelStatus::setNotifySuccesSaved();
                return $this->redirect(['index']);
            }else{
                ModelStatus::setNotifyErrorSaved();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MyBooks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MyBooks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MyBooks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MyBooks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MyBooks::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
