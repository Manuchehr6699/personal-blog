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
use app\models\Category;
use app\models\Profiles;
use yii\base\Widget;
use yii\helpers\Html;


class Categories extends Widget
{
    public $data;

    public function init()
    {
        parent::init();

        $this->data = Category::find()
            ->select(['c.id, c.name, COUNT(c.id) as amount'])
            ->from(['category c'])
            ->innerJoin('blog_category bc', 'bc.category_id=c.id')
            ->where(['c.status' => 1])->groupBy('bc.category_id')
            ->asArray()->all();


    }

    public function run()
    {

        return $this->render('sidebar/category', [
            'data' => $this->data,

        ]);
    }

}