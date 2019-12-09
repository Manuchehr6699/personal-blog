<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:01
 */

namespace app\components;
use app\models\AboutMe as AboutModel;
use app\models\AboutMe;
use app\models\Blog;
use app\models\Profiles;
use yii\base\Widget;
use yii\helpers\Html;


class PopularPost extends Widget
{
    public $data;
    public $author;
    public function init()
    {
        parent::init();

        $this->data = Blog::find()->select('blog.*, user.avatar')
            ->innerJoin('user', 'blog.created_by = user.user_id')
            ->where(['status' => 1])
            ->orderBy('like_count DESC')
            ->limit('4')
            ->asArray()
            ->all();
        $this->author = AboutMe::find()->select(['CONCAT(first_name, " ", last_name) as full_name'])
            ->where(['status' => 1])->asArray()->one();
    }

    public function run()
    {

        return $this->render('sidebar/popular-posts', [
            'data' => $this->data,
            'author' => $this->author
        ]);
    }

}