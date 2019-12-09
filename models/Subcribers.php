<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subcribers".
 *
 * @property int $id
 * @property string $email
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Subcribers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subcribers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['status', 'created_at', 'updated_at', 'updated_by'], 'integer'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
