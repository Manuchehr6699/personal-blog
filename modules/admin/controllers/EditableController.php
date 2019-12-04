<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 03.12.2019
 * Time: 22:37
 */

namespace app\modules\admin\controllers;


use app\models\AboutMe;
use app\models\Blog;
use app\models\Contact;
use app\models\CV;
use app\modules\admin\models\BackMenu;
use app\modules\admin\models\FrontMenu;
use app\modules\admin\models\Pages;
use kartik\grid\EditableColumnAction;
use yii\helpers\Html;
use yii\web\Controller;

class EditableController extends Controller
{
    public function actions()
    {
        return [
            'change-about-me-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => AboutMe::className(),
            ],
            'change-cv-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => CV::className(),
            ],
            'change-contact-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => Contact::className(),
            ],
            'change-post-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => Blog::className(),
            ],
            'change-page-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => Pages::className(),
            ],
            'change-user-menu-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => FrontMenu::className(),
            ],
            'change-admin-menu-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => BackMenu::className(),
            ]

        ];
    }

    public function actionChangeCommentStatus(){
        $id = Html::encode($_GET['id']);
        $status = Html::encode($_GET['status']);
        if($status==1){
            $status = 'no';
            $s=0;
        }elseif($status == 0){
            $status = 'yes';
            $s=1;
        }else{
            $status='no';
            $s=0;
        }
        if(\Yii::$app->db->createCommand('UPDATE comment c SET c.is_published ="'.$status.'" WHERE id = '.$id)->execute()){
            $result = array('result' => 'success', 'status' => $s);
            return json_encode($result);
        }else{
            $result = array('result' => 'error');
            return json_encode($result);
        }

    }

    public function actionChangeUserStatus(){
        $id = Html::encode($_GET['id']);
        $status = Html::encode($_GET['status']);
        if($status==1){
            $status = 0;
        }elseif($status == 0){
            $status = 1;
        }else{
            $status = 0;
        }
        if(\Yii::$app->db->createCommand('UPDATE user u SET u.is_block ="'.$status.'" WHERE user_id = '.$id)->execute()){
            $result = array('result' => 'success', 'status' => $status);
            return json_encode($result);
        }else{
            $result = array('result' => 'error');
            return json_encode($result);
        }
    }

}