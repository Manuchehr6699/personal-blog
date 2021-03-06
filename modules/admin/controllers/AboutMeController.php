<?php

namespace app\modules\admin\controllers;

use app\models\Contact;
use app\models\Profiles;
use app\models\User;
use app\modules\admin\models\ModelStatus;
use app\modules\admin\models\UploadForm;
use Yii;
use app\models\AboutMe;
use app\modules\admin\models\AboutMeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AboutMeController implements the CRUD actions for AboutMe model.
 */
class AboutMeController extends Controller
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
     * Lists all AboutMe models.
     * @return mixed
     */
//    public function actionIndex()
//    {
//        $searchModel = new AboutMeSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

    /**
     * Displays a single AboutMe model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {

       $aboutMe = AboutMe::find()->asArray()->one();


        if(empty($aboutMe)){
            return $this->redirect(['create']);
        }

       $model = new User();
       $profile = User::find()->where(['user_id' => Yii::$app->user->id])->asArray()->one();
       $contacts = Contact::find()->where(['status' => 1])->asArray()->one();
       $socials = Profiles::find()->where(['status' => 1])->asArray()->all();

        return $this->render('view', [
            'aboutMe' => $aboutMe,
            'profile' => $profile,
            'contacts' => $contacts,
            'socials' => $socials,
            'model' => $model,
        ]);
    }

    /**
     * Creates a new AboutMe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AboutMe();
        $photo = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
           Yii::$app->db->createCommand('TRUNCATE TABLE about_me')->execute();
           $photo->imageFile = UploadedFile::getInstance($model, 'photo');
            if(!empty($photo->imageFile) && $photo->upload('avatars')){
               $path = $photo->imageFile->baseName . '.' . $photo->imageFile->extension;
               $model->photo = $path;
            }
            ModelStatus::setTimeStampCreate($model);
            if($model->save()){
               ModelStatus::setNotifySuccesSaved();
               return $this->redirect(['view']);
            }else{
                ModelStatus::setNotifyErrorSaved();
            }
        }
        return $this->render('create', [
            'model' => $model,
            'photo' => $photo
        ]);
    }

    /**
     * Updates an existing AboutMe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $photo = new UploadForm();
        $oldPhoto = $model->photo;
        unset($model->photo);
        if ($model->load(Yii::$app->request->post())) {
            $photo->imageFile = UploadedFile::getInstance($model, 'photo');
            if(empty($photo->imageFile)) $model->photo = $oldPhoto;
            if(!empty($photo->imageFile) && $photo->upload('avatars')){
                $path = $photo->imageFile->baseName . '.' . $photo->imageFile->extension;
                $model->photo = $path;
            }
            ModelStatus::setTimeStampUpdate($model);
            if($model->save()){
                ModelStatus::setNotifySuccesSaved();
                return $this->redirect(['view']);
            }else{
                ModelStatus::setNotifyErrorSaved();
            }
        }
        return $this->render('update', [
            'model' => $model,
            'photo' => $photo
        ]);
    }

    /**
     * Deletes an existing AboutMe model.
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
     * Finds the AboutMe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutMe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AboutMe::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
