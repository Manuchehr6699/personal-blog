<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */

$this->title = 'Update Back Menu: ' . $model->nodeid;
$this->params['breadcrumbs'][] = ['label' => 'Back Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nodeid, 'url' => ['view', 'id' => $model->nodeid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="back-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
