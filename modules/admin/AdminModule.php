<?php

namespace app\modules\admin;
use app\widgets\AdminMenu;

/**
 * admin module definition class
 */
class AdminModule extends \yii\base\Module
{

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main';

    public $defaultRoute = 'main/login';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();


        \Yii::$app->view->params['AdminMenu'] = AdminMenu::getMenu();
        \Yii::$app->errorHandler->errorAction = '/admin/main/error';
        \Yii::$app->user->loginUrl = '/admin/main/login';

    }
}
