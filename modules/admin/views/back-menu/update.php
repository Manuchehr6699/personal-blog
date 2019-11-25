<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */

$this->title = 'Update SiteMenu item: ' . $model->nodename;
$this->params['breadcrumbs'][] = ['label' => 'Admin SiteMenu List', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nodename, 'url' => ['view', 'id' => $model->nodename]];
$this->params['breadcrumbs'][] = 'Update item';
?>
<div class="back-menu-update">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
        'menuItems' => $menuItems
    ]) ?>

</div>
