<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutMe */

$this->title = 'Update About Me: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'About Mes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-me-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
