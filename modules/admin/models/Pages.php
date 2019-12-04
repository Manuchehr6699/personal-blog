<?php

namespace app\modules\admin\models;

use app\models\Blog;
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
            [['title', 'slug'], 'string', 'max' => 500],
            [['menu_title'], 'string', 'max' => 255],
            [['blogs_id', 'tags'], 'safe'],
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
            'order' => 'Page order',
            'blogs_id' => 'Blogs',
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

    static function getBlogList(){
        $data = Blog::find()->where(['status' => 1])->asArray()->all();
        return ArrayHelper::map($data, 'id', 'title');
    }

    static function getPages(){
        $data = static::find()->where(['status' => 1])->asArray()->all();
        return $data;
    }


    public function setPageOrder($id){
        //after $id
        if(empty($id)){
            $id=-1;
        }
        if($id == -2){
            $this->order = 0;
            Yii::$app->db->createCommand('UPDATE pages p SET p.order = p.order + 1')->execute();
        }elseif($id == -1){
            $lastItemOrder = static::find()->max('pages.order');
            $this->order = $lastItemOrder+1;
        }else{
            $id += 1;
            $this->order = $id;
            Yii::$app->db->createCommand('UPDATE pages p SET p.order = p.order + 1 WHERE p.order >= '.$id)->execute();
        }
    }

    public function setId(){
        $id = static::find()->max('id');
        $this->id = ++$id;
    }
}
