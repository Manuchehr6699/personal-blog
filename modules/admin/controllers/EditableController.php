<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 03.12.2019
 * Time: 22:37
 */

namespace app\modules\admin\controllers;



use app\components\Settings;
use app\models\AboutMe;
use app\models\Blog;
use app\models\Category;
use app\models\Contact;
use app\models\CV;
use app\models\MyBooks;
use app\models\Profiles;
use app\models\Setting;
use app\modules\admin\models\BackMenu;
use app\modules\admin\models\FrontMenu;
use app\modules\admin\models\Pages;
use app\modules\admin\models\search\SettingSearch;
use app\modules\admin\models\SettingModel;
use kartik\grid\EditableColumnAction;
use yii\db\Exception;
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
            'change-setting-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => SettingSearch::className(),
            ],
            'change-user-menu-nodeaccess' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => FrontMenu::className(),
            ],
            'change-admin-menu-nodeaccess' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => BackMenu::className(),
            ],
            'change-profiles-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => Profiles::className(),
            ],
            'change-category-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => Category::className(),
            ],
            'change-book-status' => [
                'class' => EditableColumnAction::classname(),
                'modelClass' => MyBooks::className(),
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

    public function actionChangeAboutMe(){
        $id = Html::encode($_GET['id']);
        $status = Html::encode($_GET['status']);
        if($status==1){
            $status = 0;
        }elseif($status == 0){
            $status = 1;
        }else{
            $status = 0;
        }
        if(\Yii::$app->db->createCommand('UPDATE about_me u SET u.status ="'.$status.'" WHERE id = '.$id)->execute()){
            $result = array('result' => 'success', 'status' => $status);
            return json_encode($result);
        }else{
            $result = array('result' => 'error');
            return json_encode($result);
        }
    }

    public function actionChangeCv(){
        $id = Html::encode($_GET['id']);
        $status = Html::encode($_GET['status']);
        if($status==1){
            $status = 0;
        }elseif($status == 0){
            $status = 1;
        }else{
            $status = 0;
        }
        if(\Yii::$app->db->createCommand('UPDATE cv u SET u.status ="'.$status.'" WHERE id = '.$id)->execute()){
            $result = array('result' => 'success', 'status' => $status);
            return json_encode($result);
        }else{
            $result = array('result' => 'error');
            return json_encode($result);
        }
    }

   public function actionChangeContact(){
      $id = Html::encode($_GET['id']);
      $status = Html::encode($_GET['status']);
      if($status==1){
         $status = 0;
      }elseif($status == 0){
         $status = 1;
      }else{
         $status = 0;
      }
      if(\Yii::$app->db->createCommand('UPDATE contact u SET u.status ="'.$status.'" WHERE id = '.$id)->execute()){
         $result = array('result' => 'success', 'status' => $status);
         return json_encode($result);
      }else{
         $result = array('result' => 'error');
         return json_encode($result);
      }
   }

    public function actionChangePassword(){
        $password = Html::encode($_GET['password']);
        $password = md5($password.$password);
        $uid = Html::encode($_GET['uid']);
        if(\Yii::$app->db->createCommand('UPDATE user SET user_password = "'.$password.'" WHERE user_id = '.$uid)->execute()){
            $result = array('result' => 'success');
            return json_encode($result);
        }else{
            $result = array('result' => 'error');
            return json_encode($result);
        }
    }

    public function actionChangeText(){
       $text = Html::encode($_GET['text']);
       $tbl = Html::encode($_GET['tbl']);
       $id = explode('-',  Html::encode($_GET['id']));
       $attribute = Html::encode($_GET['atr']);
//       if(\Yii::$app->db->createCommand('UPDATE '.$tbl.' SET '.$attribute.' = "'.$text.'" WHERE '.$id[0].' = '.$id[1])->execute()){
//          $result = array('result' => 'success', 'text' => $text);
//          return json_encode($result);
//       }else{
//          $result = array('result' => 'error');
//          return json_encode($result);
//       }
       try {
          \Yii::$app->db->createCommand('UPDATE '.$tbl.' SET '.$attribute.' = "'.$text.'" WHERE '.$id[0].' = '.$id[1])->execute();
          $result = array('result' => 'success', 'text' => $text);
          return json_encode($result);
       } catch (Exception $e) {
          $result = array('result' => 'error', 'text' => $e->errorInfo[1]);
          return json_encode($result);
      }
    }

    public function actionChangePhoto(){
        if(\Yii::$app->request->post()){
            if(!empty($_FILES['User']['tmp_name']['avatar'])) {
                $filePath = \Yii::getAlias('@webroot') . '/upload/avatars/';
                $uploadfile = $filePath . basename($_FILES['User']['name']['avatar']);
                move_uploaded_file($_FILES['User']['tmp_name']['avatar'], $uploadfile);
                $filename = basename($_FILES['User']['name']['avatar']);
                \Yii::$app->db->createCommand('UPDATE user SET avatar = "'.$filename.'" WHERE user_id = '.\Yii::$app->user->id)->execute();
                return $this->redirect(['/admin/main/profile']);
            }

        }
        debug($_FILES);
    }

    public function actionChangeSubcriberStatus(){
        $id = Html::encode($_GET['id']);
        $status = Html::encode($_GET['status']);
        if($status==1){
            $status = 0;
        }elseif($status == 0){
            $status = 1;
        }else{
            $status = 0;
        }
       try{
           \Yii::$app->db->createCommand('UPDATE subcribers u SET u.status ="'.$status.'" WHERE u.id = '.$id)->execute();
            $result = array('result' => 'success', 'status' => $status);
            return json_encode($result);
        }catch (\Exception $e){
            $result = array('result' => 'error');
            return json_encode($result);
        }
    }

}