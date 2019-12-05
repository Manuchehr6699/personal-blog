<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 04.12.2019
 * Time: 19:47
 */
namespace common\components\behaviors;

use Yii;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class CachedBehavior extends Behavior
{
    public $cache_id;

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'deleteCache',
            ActiveRecord::EVENT_AFTER_UPDATE => 'deleteCache',
            ActiveRecord::EVENT_AFTER_DELETE => 'deleteCache',
        ];
    }

    public function deleteCache()
    {
        //Удаление массива кэшированных элементов (виджеты, модели...)
        Foreach ($this->cache_id as $id){
            Yii::$app->cache->delete($id);
        }
    }
}