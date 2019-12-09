<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:01
 */

namespace app\components;
use app\models\AboutMe as AboutModel;
use app\models\Profiles;
use app\models\Subcribers;
use yii\base\Widget;
use yii\helpers\Html;


class FollowMe extends Widget
{
    public $text;

    public function init()
    {
        parent::init();

        $this->text = Profiles::find()->where(['status' => 1])->orderBy('order')->asArray()->all();
    }

    public function run()
    {
        $model = new Subcribers();
        return $this->render('sidebar/follow-me', [
            'text' => $this->text,
            'model' => $model
        ]);
    }

}