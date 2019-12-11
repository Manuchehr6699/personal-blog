<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cv".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $status
 * @property int $order
 * @property string $cv_file
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class CV extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['text', 'cv_file'], 'string'],
            [['status', 'order', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['title'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'status' => 'Status',
            'cv_file' => 'File',
            'order' => 'Order',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Upadted By',
        ];
    }


    public static function getItems(){
       return static::find()->where(['status' => 1])->asArray()->all();
    }

   public function setItemOrder($id){
      //after $id
      if(empty($id)){
         $id = -1;
      }
      if($id == -2){
         $this->order = 0;
         Yii::$app->db->createCommand('UPDATE cv SET cv.order = cv.order + 1')->execute();
      }elseif($id == -1){
         $lastItemOrder = $this::find()->max('cv.order');
         $this->order = ++$lastItemOrder;
      }else{
         $id+=1;
         $this->order = $id;
         Yii::$app->db->createCommand('UPDATE cv SET cv.order = cv.order + 1 WHERE cv.order >= '.$id)->execute();
      }
   }
}
