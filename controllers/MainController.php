<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 15:02
 */

namespace app\controllers;

use app\models\AboutMe;
use app\modules\admin\models\Pages;
use Yii;
use app\models\ContactForm;
use app\models\LoginForm;
use yii\web\Controller;

class MainController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAboutMe()
    {
        $data = AboutMe::find()->where(['status' => 1])->asArray()->all();

        return $this->render('about-me', ['data' => $data]);
    }

    public function actionPage($slug)
    {
        $content = Pages::find()->where(['slug' => $slug])->asArray()->all();

        return $this->render('page', [
            'content' => $content
        ]);
    }

    public function actionError()
    {
        $this->layout = 'main-without-sidebar';
        return $this->render('error');
    }
}