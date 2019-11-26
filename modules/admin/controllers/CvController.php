<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\ModelStatus;
use Yii;
use app\models\CV;
use app\modules\admin\models\CVSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CvController implements the CRUD actions for CV model.
 */
class CvController extends Controller
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
    * Lists all CV models.
    * @return mixed
    */
   public function actionIndex()
   {
      $searchModel = new CVSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
   }

   /**
    * Displays a single CV model.
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
    * Creates a new CV model.
    * If creation is successful, the browser will be redirected to the 'view' page.
    * @return mixed
    */
   public function actionCreate()
   {
      $model = new CV();

      if ($model->load(Yii::$app->request->post())) {
         ModelStatus::setTimeStampCreate($model);
         ModelStatus::setTimeStampUpdate($model);
         if($model->save()) {
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
    * Updates an existing CV model.
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
    * Deletes an existing CV model.
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
    * Finds the CV model based on its primary key value.
    * If the model is not found, a 404 HTTP exception will be thrown.
    * @param integer $id
    * @return CV the loaded model
    * @throws NotFoundHttpException if the model cannot be found
    */
   protected function findModel($id)
   {
      if (($model = CV::findOne($id)) !== null) {
         return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
   }
}
