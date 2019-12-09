<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:01
 */

namespace app\components;
use app\models\AboutMe as AboutModel;
use yii\base\Widget;
use yii\helpers\Html;


class AboutMe extends Widget
{
    public $text;

    public function init()
    {
        parent::init();

        $this->text = AboutModel::find()->where(['status' => 1])->asArray()->one();
    }

    public function run()
    {
        return $this->render('sidebar/about-me', [
            'text' => $this->text
        ]);
    }

}