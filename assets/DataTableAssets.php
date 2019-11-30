<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 24.11.2019
 * Time: 23:06
 */

namespace app\assets;
use yii\web\AssetBundle;

class DataTableAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/admin_assets/plugins/data-tables/css/datatables.min.css',
        '/admin_assets/css/pretty-checkbox.min.css'
    ];

    public $js = [
        '/admin_assets/plugins/data-tables/js/datatables.min.js',
        '/admin_assets/js/datatable-init.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];


}