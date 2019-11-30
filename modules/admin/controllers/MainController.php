<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 13.11.2019
 * Time: 21:20
 */

namespace app\modules\admin\controllers;


use yii\web\Controller;
use Yii;
use yii\db\Expression;
use app\models\User;
use app\models\LoginForm;
use app\modules\admin\models\LoginDetails;

class MainController extends Controller
{

    public function actionLogin(){

        $this->layout = 'main-login';


        if (!\Yii::$app->user->isGuest) {
            return $this->redirect('/admin/main/index');
        }

        $model = new LoginForm();
        $login = new LoginDetails();
        if ($model->load(Yii::$app->request->post())) {
            $log = User::find()->where(['username' => $_POST['LoginForm']['username'], 'is_block' => 0])->one();
            if(empty($log)) {
                \Yii::$app->session->setFlash('loginError', '<i class="fa fa-warning"></i><b> '.
                    Yii::t('app','Incorrect username or password!').'</b>');
                return $this->render('login', ['model' => $model]);
            }
            $login->login_user_id = $log['user_id'];
            $loginuser = $login->login_user_id;
            if($loginuser){
                \Yii::$app->session->set('user_id',$loginuser);
            }else{
                \Yii::$app->session->setFlash('loginError', '<i class="fa fa-warning"></i><b> '.
                    Yii::t('app','These Login credentials are Blocked/Deactive by Admin').'</b>');
                return $this->render('login', ['model' => $model,]);
            }

            $login->login_status = 1;
            $login->login_at = new Expression('NOW()');
            $login->user_ip_address=$_SERVER['REMOTE_ADDR'];

            if($model->login()) {
                $login->save(false);
                $auth_user = User::findIdentity($login->login_user_id);
                $auth_user->session_id = \Yii::$app->session->getId();
                $auth_user->save(false);

                Yii::$app->session->set('username',$log['username']);
                Yii::$app->session->set('email',$log['email']);
                Yii::$app->session->set('user_type',$log['user_type']);
                Yii::$app->session->set('avatar',$log['avatar'], 'default.jpg');

                return $this->redirect('/admin/main/index');
            } else{
                return $this->render('login', ['model' => $model,]);
            }
        }else{
            return $this->render('login', ['model' => $model,]);
        }
    }

    public function actionIndex(){

        return $this->render('index');
    }

    public function actionLogout(){

        Yii::$app->user->logout();

        return $this->redirect('/admin/main/login');
    }

    public function actionUserInfo(){

        $userData = User::find()->orderBy('created_at DESC')->asArray()->all();

        return $this->render('user-info', ['userData' => $userData]);
    }

    public function actionLoginDetails(){

        $data = LoginDetails::find()->select('login_details.*, user.*')
            ->innerJoin('user','login_details.login_user_id = user.user_id')
            ->asArray()
            ->all();
        return $this->render('user-login-details', ['data' => $data]);
    }
}