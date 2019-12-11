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
use yii\helpers\ArrayHelper;
use yii\helpers\Html;


class Tags extends Widget
{
    public $data;

    public function init()
    {
        parent::init();

        $this->data = Blog::find()->select(['GROUP_CONCAT(tags) as tags'])->where(['status' => 1])->asArray()->one();

       preg_match_all('/\"(.+)\"/U', $this->data['tags'], $matches);
       $this->data = $matches;
       $this->data = array_unique($this->data);

    }

    public function run()
    {
        return $this->render('sidebar/tags', [
            'data' => $this->data[0]
        ]);
    }
}