<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $title
 * @property string|null $menu_title
 * @property string|null $text
 * @property int|null $status
 * @property int|null $order
 * @property string|null $blogs_id
 * @property string|null $tags
 * @property string|null $slug
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'status', 'order', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['title'], 'required'],
            [['text'], 'string'],
            [['title', 'blogs_id', 'slug', 'tags'], 'string', 'max' => 500],
            [['menu_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Category',
            'title' => 'Title',
            'menu_title' => 'Menu Title',
            'text' => 'Text',
            'status' => 'Status',
            'order' => 'Order',
            'blogs_id' => 'Blogs ID',
            'tags' => 'Tags',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    static function getListPages(){
        $data = static::find()->where(['status' => 1])->asArray()->all();
        return ArrayHelper::map($data, 'id', 'title');

    }
}
