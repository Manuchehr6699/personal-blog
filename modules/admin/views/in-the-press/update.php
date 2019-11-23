<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InThePress */

$this->title = 'Update In The Press: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'In The Presses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="in-the-press-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
