<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $text
 * @property string $name
 * @property string $email
 * @property string $web
 * @property int $blog_id
 * @property string $is_published
 * @property int $status
 * @property int $created_at
 * @property int $craeted_by
 * @property int $updated_at
 * @property int $updated_by
 *
 * @property Blog $blog
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'name', 'email', 'blog_id'], 'required'],
            [['text', 'is_published'], 'string'],
            [['blog_id', 'status', 'created_at', 'craeted_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'email', 'web'], 'string', 'max' => 255],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'name' => 'Name',
            'email' => 'Email',
            'web' => 'Web',
            'blog_id' => 'Blog ID',
            'is_published' => 'Is Published',
            'status' => 'Status',
            'created_at' => 'Created At',
            'craeted_by' => 'Craeted By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }
}
