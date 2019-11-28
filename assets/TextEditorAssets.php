<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 24.11.2019
 * Time: 23:06
 */

namespace app\assets;
use yii\web\AssetBundle;

class TextEditorAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin_assets/plugins/bootstrap-select/bootstrap-select.css',
        'admin_assets/plugins/multi-select/multi-select.css',
        'admin_assets/plugins/tags-input/bootstrap-tagsinput.css',

    ];

    public $js = [
        'admin_assets/plugins/bootstrap-select/bootstrap-select.js',
        'admin_assets/plugins/multi-select/jquery.multi-select.js',
        'admin_assets/plugins/tags-input/bootstrap-tagsinput.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];


}