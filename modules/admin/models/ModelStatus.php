<?php

namespace app\modules\admin\models;

use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii2mod\enum\helpers\BaseEnum;

/**
 * Class SettingStatus
 *
 * @package yii2mod\settings\models\enumerables
 */
class ModelStatus
{
   const ACTIVE = 1;
   const INACTIVE = 0;

   public static $messageCategory = 'app';
   /**
    * @var array
    */
   public static $list = [
       self::ACTIVE => 'Active',
       self::INACTIVE => 'Inactive',
   ];

   public static $listIcons = [
      'twitter' => 'Twitter',
      'google-plus' => 'GOOGLE PLUS',
      'envelope' => 'EMAIL',
      'facebook' => 'FACEBOOK',
      'instagram' => 'Instagram',
      'pinterest' => 'Pinterest',
      'linkedin' => 'LinkedIn',
      'youtube' => 'YouTube',
      'skype' => 'Skype',
      'wechat' => 'Wechat',
      'vimeo' => 'Vimeo',
      'vk' => 'VK',
      'dribbble' => 'Dribbble'
   ];


   public static function setNotifySuccesSaved()
   {
      return \Yii::$app->session->setFlash('success', 'Data was saved successfully!');
   }

   public static function setNotifyErrorSaved()
   {
      return \Yii::$app->session->setFlash('error', 'Data was not saved. Please try again!');
   }

    public static function setNotifySuccessDeleted()
    {
        return \Yii::$app->session->setFlash('success', 'Data was successfully deleted!');
    }

    public static function setNotifyErrorDeleted()
    {
        return \Yii::$app->session->setFlash('error', 'Data was not deleted. Please try again!');
    }

   public static function listData()
   {
      return ArrayHelper::getColumn(static::$list, function ($value) {
         return $value;
      });
   }

   public static function listIconsData()
   {
      return ArrayHelper::getColumn(static::$listIcons, function ($value) {
         return $value;
      });
   }

   public static function setTimeStampCreate($model){
      $model->created_at = time();
      $model->created_by = \Yii::$app->user->id;
   }

   public static function setTimeStampUpdate($model){
      $model->updated_at = time();
      $model->updated_by = \Yii::$app->user->id;
   }

   public static function getNotify()
   {
      if (\Yii::$app->session->hasFlash('error')) {
         return '<div class="alert alert-danger alert-dismissible"  role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>'
             . \Yii::$app->session->getFlash('error') .
             '</div>';
      }
      if (\Yii::$app->session->hasFlash('success')) {
         return '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>'
             . \Yii::$app->session->getFlash('success') .
             '</div>';
      }
   }


}
