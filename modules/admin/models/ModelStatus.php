<?php

namespace app\modules\admin\models;

use yii\helpers\ArrayHelper;
use yii2mod\enum\helpers\BaseEnum;

/**
 * Class SettingStatus
 *
 * @package yii2mod\settings\models\enumerables
 */
class ModelStatus
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    public static $messageCategory = 'app';
    /**
     * @var array
     */
    //Todo composer update
    public static $list = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive',
    ];

    public static function listData()
    {
        return ArrayHelper::getColumn(static::$list, function ($value) {
            return $value;
        });
    }

    public static function getNotify()
    {
        if (\Yii::$app->session->hasFlash('error')) {
            return '<div class="alert alert-danger alert-dismissible"  role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>'
                        .\Yii::$app->session->getFlash('error') .
                    '</div>';
        }
        if (\Yii::$app->session->hasFlash('success')) {
            return '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>'
                .\Yii::$app->session->getFlash('success') .
                '</div>';
        }
    }
}
