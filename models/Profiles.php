<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property string $type
 * @property string $description
 * @property int $order
 * @property int $status
 * @property int $icon
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class Profiles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['type', 'description'], 'string'],
            [['order', 'status',  'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'icon'], 'string', 'max' => 255],
            [['link'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'link' => 'Link',
            'type' => 'Type',
            'description' => 'Description',
            'order' => 'Order',
            'status' => 'Status',
            'icon' => 'Icon',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

   public function setItemOrder($id){
      //after $id
      if(empty($id)){
         $id=-1;
      }
      if($id == -2){
         $this->order = 0;
         Yii::$app->db->createCommand('UPDATE profiles p SET p.order = p.order + 1')->execute();
      }elseif($id == -1){
         $lastItemOrder = $this::find()->max('order');
         $this->order = $lastItemOrder+1;
      }else{
         $id+=1;
         $this->order = $id;
         Yii::$app->db->createCommand('UPDATE profiles p SET p.order = p.order + 1 WHERE p.order >= '.$id)->execute();
      }
   }

   public static function getItems(){
       return static::find()->where(['status' => 1])->asArray()->all();
   }
}
