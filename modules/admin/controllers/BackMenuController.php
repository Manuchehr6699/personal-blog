<?php

namespace app\modules\admin\controllers;

use Yii;

use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\BackMenu;
use app\modules\admin\models\BackMenuSearch;
/**
 * BackMenuController implements the CRUD actions for BackMenu model.
 */
class BackMenuController extends Controller
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
     * Lists all BackMenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BackMenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BackMenu model.
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
     * Creates a new BackMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BackMenu();
        //for select parent
        $menuItems = BackMenu::getItems();

        if ($model->load(Yii::$app->request->post())) {
            if(empty($model->parentnodeid)){
                $model->parentnodeid = 0;
            }
            $model->setItemOrder($model->nodeorder);
            if($model->save()){
                Yii::$app->session->setFlash('success', 'Data was saved successfully!');
                return $this->redirect(['index']);
            }else{
                Yii::$app->session->setFlash('error', 'Data was not saved. Please try again!');
                return $this->redirect(['create']);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'menuItems' => $menuItems
        ]);
    }

    /**
     * Updates an existing BackMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $menuItems = BackMenu::getItems();

        if ($model->load(Yii::$app->request->post())) {
            if(empty($model->parentnodeid)){
                $model->parentnodeid = 0;
            }
            $model->setItemOrder($model->nodeorder);
            if($model->save()){
                Yii::$app->session->setFlash('success', 'Data was saved successfully!');
                return $this->redirect(['index']);
            }else{
                Yii::$app->session->setFlash('error', 'Data was not saved. Please try again!');
                return $this->redirect(['create']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'menuItems' => $menuItems
        ]);
    }

    /**
     * Deletes an existing BackMenu model.
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
     * Finds the BackMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BackMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BackMenu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
