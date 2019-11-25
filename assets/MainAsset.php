<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 14:54
 */

namespace app\assets;
use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
   public $basePath = '@webroot';
   public $baseUrl = '@web';

   public $css = [
       'plugins/goodlayers-core/plugins/combine/style.css',
       'plugins/goodlayers-core/include/css/page-builder.css',
       'plugins/revslider/public/assets/css/settings.html',
       'plugins/zilla-likes/styles/zilla-likes.css',
       'css/style-core.css',
       'css/akea-style-custom.css',
       'fonts/Poppins/stylesheet.css',
       //'fonts/Montserrat/stylesheet.css',
       'fonts/PT_Serif/stylesheet.css',
       'fonts/OpenSans/stylesheet.css',
//       'https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek',
   ];

   public $js = [
      'js/jquery/jquery.js',
      'js/jquery/jquery-migrate.min.js',
      'plugins/zilla-likes/scripts/zilla-likes.js',
      'plugins/goodlayers-core/plugins/combine/script.js',
      'plugins/goodlayers-core/include/js/page-builder.js',
      'js/jquery/ui/effect.min.js',
      'js/script-core.js',
   ];
   public $depends = [
      'yii\web\YiiAsset',
      //'yii\bootstrap\BootstrapAsset',
   ];
}