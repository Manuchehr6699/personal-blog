<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyBooks */

$this->title = 'Update My Books: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'My Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="my-books-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
