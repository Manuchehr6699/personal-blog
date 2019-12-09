<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 13.11.2019
 * Time: 21:23
 */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- end loader -->
<?= $this->render('notification') ?>
<div class="page">
    <!-- search -->
    <div id="search-container" class="opacity-off">
        <i id="search-close" class="fas fa-times"></i>
        <form id="main-search-form">
            <input type="text" class="search-input" placeholder="Search">
            <!--            <span>press ESC to close</span>-->
        </form>
    </div>
    <!-- end search -->
    <div class="main-wrap">
        <?= $this->render('header') ?>
        <?= $this->render('navigation') ?>
        <!-- main -->
        <main>
            <div class="container-fluid">
<!--                --><?//= Alert::widget() ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <?= Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    'tag' => 'ol',
                                    'options' => ['class' => 'breadcrumb'],
                                    'itemTemplate' => '<li class="breadcrumb-item">{link}&nbsp;',
                                    'homeLink' => ['label' => 'Home', 'url' => '/admin'],
                                ]) ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <?= $content ?>
            </div>
        </main>
        <!-- end main -->
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

