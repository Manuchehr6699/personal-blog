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
   public $ebookFile;

   public function rules()
   {
      return [
          [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
          [['ebookFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, djvu, txt, doc, docx, rtf']
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

//    public function uploadEbook($path_category)
//    {
//        if($this->validate()){
//            $this->ebookFile->saveAs( \Yii::getAlias('@uploadroot').'/'.$path_category.'/' . $this->ebookFile->baseName . '.' . $this->ebookFile->extension);
//            return true;
//        }else{
//            return false;
//        }
//    }
}