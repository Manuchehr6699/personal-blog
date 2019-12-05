<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 04.12.2019
 * Time: 20:20
 */

namespace common\components\behaviors;
use Yii;
use yii\base\Behavior;
use yii\web\Controller;

class DelcacheBehavior extends Behavior {

    public $cache_id; //id кэша (названия в виде массива)
    public $actions; //для каких действий контроллера

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION  => 'deleteCache',
        ];
    }

    public function deleteCache()
    {
        $action_name = $this->owner->action->id; //название текущего действия
        if(array_search($action_name, $this->actions)=== FALSE) return;

        //Удаление массива кэшированных элементов (виджеты, модели...)
        Foreach ($this->cache_id as $id){
            Yii::$app->cache->delete($id);
        }
    }
}