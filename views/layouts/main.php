<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\components\BottomList;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\MainAsset;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Abel Polese, Phd" />
    <meta property="og:description" content="Abel Polese | PhD | Senior Research Fellow with DCU Institute for International Conflict Resolution and Reconstruction" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox"
      data-home-url="main/index"/>
<?php $this->beginBody() ?>
<?= $this->render('mobile-header') ?>
<div class="akea-body-outer-wrapper">
    <div class="akea-body-wrapper clearfix  akea-with-frame">
        <?= $this->render('header') ?>
        <div class=akea-page-wrapper id=akea-page-wrapper>
<!--            --><?//= $this->render('slider') ?>
            <div class="gdlr-core-pbf-sidebar-wrapper ">
                <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                    <?= $content ?>

                    <?= $this->render('sidebar') ?>

                </div>
            </div>
            </div>
        </div>
        <?= $this->render('footer') ?>
    </div>
</div>
<a href=#akea-top-anchor class="akea-footer-back-to-top-button  akea-with-recent-post-bar " id=akea-footer-back-to-top-button>
    <i class="fa fa-angle-up"></i>
</a>
<div class="akea-footer-recent-post-button" id=akea-footer-recent-post-button><i class=icon_plus></i></div>
<?= BottomList::widget() ?>

<script>
    var zilla_likes = {
        "ajaxurl": "/blog/like"
    };
</script>
<script>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "#"
    };
</script>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
