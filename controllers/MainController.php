<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 15:02
 */

namespace app\controllers;

use app\models\AboutMe;
use app\models\Contact;
use app\models\CV;
use app\models\Subcribers;
use app\models\UserMessage;
use app\modules\admin\models\ModelStatus;
use app\modules\admin\models\Pages;
use Yii;
use app\models\ContactForm;
use app\models\LoginForm;
use yii\db\Expression;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\web\Controller;

class MainController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'main-without-sidebar',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
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
        $this->layout = 'main-without-sidebar';
        $model = new UserMessage();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->session->setFlash('contactFormSubmitted', 'Your message sent successfully!');
            $model->created_at = time();
            $model->status = 0;
//            $model->contact(Yii::$app->params['adminEmail']);
            $model->save();

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

    public function actionCv()
    {
        $data = CV::find()
            ->where(['status' => 1])
            ->orderBy('order')
            ->asArray()
            ->all();
        $about = AboutMe::find()->where(['status' => 1])->asArray()->one();
        $contact = Contact::find()->where(['status' => 1])->asArray()->one();

        return $this->render('cv', ['data' => $data, 'about' => $about, 'contact' => $contact]);
    }


    public function actionSubcribe()
    {

        $model = new Subcribers();
        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = time();
            $model->status = 0;
            try {
                if ($model->save()) {
                    Yii::$app->session->setFlash('saved', 'Email successfully sent!');
                }
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('saved', 'Your Email already exists in subcribers list!');
            }
        }
        return $this->redirect(['/']);
    }

    public function actionPage($slug)
    {
        $slug = Html::encode($slug);

        $content = Pages::find()
            ->where(['slug' => $slug])
            ->andWhere(['status' => 1])
            ->asArray()
            ->one();
        if (empty($content)) {
            return $this->redirect(['/main/error']);
        }
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