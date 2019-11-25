<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FrontMenu */

$this->title = 'Update Front SiteMenu: ' . $model->nodename;
$this->params['breadcrumbs'][] = ['label' => 'Site menu items List', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nodename, 'url' => ['view', 'id' => $model->nodeid]];
$this->params['breadcrumbs'][] = 'Update item';
?>
<div class="front-menu-update">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
        'menuItems' => $menuItems
    ]) ?>

</div>
