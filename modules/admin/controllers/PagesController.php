<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\FrontMenu;
use app\modules\admin\models\ModelStatus;
use Cocur\Slugify\Slugify;
use Yii;
use app\modules\admin\models\Pages;
use app\modules\admin\models\PagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PagesController implements the CRUD actions for Pages model.
 */
class PagesController extends Controller
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
     * Lists all Pages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pages model.
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
     * Creates a new Pages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pages();
        $slug = new Slugify();
        $menu = new FrontMenu();

        if ($model->load(Yii::$app->request->post())) {
            ModelStatus::setTimeStampCreate($model);
            /*------------------Creating NEW PAGE---------------------------*/
            $model->setId();
            $model->setPageOrder($model->order);
            $model->tags = $this->setPageTags($model->tags);
            $model->slug = $slug->slugify($model->title);
            $model->blogs_id = json_encode($model->blogs_id);
            if (empty($model->menu_title)) $model->menu_title = $model->title;
            if (empty($model->parent_id)) $model->parent_id = 0;

            /*------------------Creating NEW MENU---------------------------*/

            $menu->setMenuNodeNameByPageTitle($model->title, $model->menu_title);
            $menu->setUrlBySlug($model->slug);
            $menu->setMenuParentIdByPageId($model->parent_id);
            $menu->setMenuOrderByPage($menu->parentnodeid);
            $menu->nodeaccess = 1;
            $menu->userstatus = 'ALL';

            if ($model->save()){
                $menu->page_id = $model->id;
                $menu->save();
                ModelStatus::setNotifySuccesSaved();
                return $this->redirect(['index']);
            } else {
                ModelStatus::setNotifyErrorSaved();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $slug = new Slugify();
        $menu = FrontMenu::findOne(['page_id' => $id]);

        if ($model->load(Yii::$app->request->post())) {
            ModelStatus::setTimeStampCreate($model);
            /*------------------Creating NEW PAGE---------------------------*/
            $model->setId();
            $model->setPageOrder($model->order);
            $model->tags = $this->setPageTags($model->tags);
            $model->slug = $slug->slugify($model->title);
            $model->blogs_id = json_encode($model->blogs_id);
            if (empty($model->menu_title)) $model->menu_title = $model->title;
            if (empty($model->parent_id)) $model->parent_id = 0;

            /*------------------Creating NEW MENU---------------------------*/

            $menu->setMenuNodeNameByPageTitle($model->title, $model->menu_title);
            $menu->setUrlBySlug($model->slug);
            $menu->setMenuParentIdByPageId($model->parent_id);
            $menu->setMenuOrderByPage($menu->parentnodeid);
            $menu->nodeaccess = 1;
            $menu->userstatus = 'ALL';

            if ($model->save()){
                $menu->page_id = $model->id;
                $menu->save();
                ModelStatus::setNotifySuccesSaved();
                return $this->redirect(['index']);
            } else {
                ModelStatus::setNotifyErrorSaved();
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        FrontMenu::findOne(['page_id' => $id])->delete();
        ModelStatus::setNotifySuccessDeleted();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Pages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pages::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function setPageTags($tags)
    {
        $arr = explode(',', $tags);
        return serialize($arr);
    }
}
