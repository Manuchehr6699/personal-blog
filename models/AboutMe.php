<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about_me".
 *
 * @property int $id
 * @property string|null $firs_name
 * @property string|null $last_name
 * @property string|null $position
 * @property string $text
 * @property string|null $photo
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class AboutMe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_me';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
            [['status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['first_name', 'last_name', 'position'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firs_name' => 'Firs Name',
            'last_name' => 'Last Name',
            'position' => 'Position',
            'text' => 'Text',
            'photo' => 'Photo',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
