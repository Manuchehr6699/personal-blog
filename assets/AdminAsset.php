<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin_assets/plugins/font-awesome/css/all.css',
//        'admin_assets/plugins/line-awesome/css/line-awesome.min.css',
        'admin_assets/css/bootstrap.min.css',
        'admin_assets/css/metisMenu.css',
        'admin_assets/plugins/slimscroll/slimscroll.css',
        'admin_assets/css/colors/default-custom.css',
        'admin_assets/css/colors.css',
        'admin_assets/css/custom.css',
    ];

    public $js = [
        'admin_assets/js/popper.min.js',
        'admin_assets/js/bootstrap.min.js',
        'admin_assets/js/metisMenu.js',
        'admin_assets/plugins/notifications/bootstrap-notify.min.js',
        'admin_assets/plugins/notifications/notifications.js',
        'admin_assets/plugins/slimscroll/slimscroll.js',
        'admin_assets/plugins/apex-charts/js/apexcharts.js',
        'admin_assets/js/main.js',
        //'admin_assets/js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
