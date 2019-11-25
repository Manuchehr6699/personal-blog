<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\FrontMenu;
use app\modules\admin\models\FrontMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FrontMenuController implements the CRUD actions for FrontMenu model.
 */
class FrontMenuController extends Controller
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
     * Lists all FrontMenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FrontMenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FrontMenu model.
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
     * Creates a new FrontMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FrontMenu();
        //for select parent
        $menuItems = FrontMenu::getItems();

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
     * Updates an existing FrontMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $menuItems = FrontMenu::getItems();

        if($model->load(Yii::$app->request->post())){
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
     * Deletes an existing FrontMenu model.
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
     * Finds the FrontMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FrontMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FrontMenu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
