<?php

namespace app\modules\admin;
use app\models\Comment;
use app\models\Subcribers;
use app\models\User;
use app\models\UserMessage;
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
        \Yii::$app->view->params['commentCount'] = Comment::find()->where(['status' => 0])->count();
        \Yii::$app->view->params['messageCount'] = UserMessage::find()->where(['status' => 0])->count();
        \Yii::$app->view->params['subcribersCount'] = Subcribers::find()->where(['status' => 0])->count();
        \Yii::$app->view->params['avatar'] = User::find()->select(['avatar'])->where(['user_id' => \Yii::$app->user->id])->asArray()->one();
    }
}
