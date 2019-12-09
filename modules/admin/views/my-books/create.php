<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyBooks */

$this->title = 'Add New Book';
$this->params['breadcrumbs'][] = ['label' => 'My Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-books-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
