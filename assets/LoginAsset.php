<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 20:07
 */

namespace app\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'admin_assets/plugins/font-awesome/css/all.min.css',
        'admin_assets/css/bootstrap.min.css',
        'admin_assets/css/metisMenu.css',
        //'admin_assets/plugins/slimscroll/slimscroll.css',
        'admin_assets/css/colors/default-custom.css',
        'admin_assets/css/colors.css'
    ];

    public $js = [
        //'admin_assets/js/jquery-3.2.1.min.js',
        'admin_assets/js/popper.min.js',
        'admin_assets/js/bootstrap.min.js',
        'admin_assets/js/metisMenu.js',
        //'admin_assets/plugins/slimscroll/slimscroll.js',
        //'admin_assets/plugins/apex-charts/js/apexcharts.js',
//        'admin_assets/js/jquery.cookie-1.4.1.min.js',
//        'admin_assets/js/color.js',
        'admin_assets/js/main.js',
//        'admin_assets/js/index.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];


}