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
        '/admin_assets/js/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css',
        '/admin_assets/js/ajax/libs/KaTeX/0.7.1/katex.min.css',
        '/admin_assets/js/ajax/1.3.6/quill.bubble.css',
        '/admin_assets/js/ajax/1.3.6/quill.snow.css',
        '/admin_assets/js/ajax/libs/summernote/0.6.6/summernote.min.css'
    ];

    public $js = [
        '/admin_assets/js/ajax/libs/highlight.js/9.12.0/highlight.min.js',
        '/admin_assets/js/ajax/libs/KaTeX/0.7.1/katex.min.js',
        '/admin_assets/js/ajax/1.3.6/quill.js',
        '/admin_assets/js/ajax/libs/summernote/0.6.6/summernote.min.js',
        '/admin_assets/js/text-editor-init.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];


}