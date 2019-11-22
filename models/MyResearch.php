<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_research".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $text
 * @property int $type
 * @property int $status
 * @property int $order
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class MyResearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_research';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'type', 'status', 'order', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'text' => 'Text',
            'type' => 'Type',
            'status' => 'Status',
            'order' => 'Order',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
