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
use app\models\MyBooks as Books;
use app\models\Profiles;
use yii\base\Widget;
use yii\helpers\Html;


class MyBooks extends Widget
{
    public $data;

    public function init()
    {
        parent::init();

        $this->data = Books::find()->asArray()->all();
    }

    public function run()
    {
        return $this->render('sidebar/my-books', [
            'data' => $this->data
        ]);
    }
}