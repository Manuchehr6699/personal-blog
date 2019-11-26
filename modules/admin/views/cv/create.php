<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CV */

$this->title = 'Add new CV section';
$this->params['breadcrumbs'][] = ['label' => 'List of CV sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cv-create">
    <h2><?= Html::encode($this->title) ?></h2>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
