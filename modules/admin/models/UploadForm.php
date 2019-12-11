<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 26.11.2019
 * Time: 9:26
 */

namespace app\modules\admin\models;


use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{

   /**
    * @var UploadedFile
    */
   public $imageFile;


   public function rules()
   {
      return [
          [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
      ];
   }

   public function upload($path_category)
   {
      if($this->validate()){
         $this->imageFile->saveAs( \Yii::getAlias('@uploadroot').'/'.$path_category.'/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
         return true;
      }else{
         return false;
      }
   }
}