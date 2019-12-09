<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = 'Add New Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['#']];

?>
<div class="category-create">

    <h2><?= Html::encode($this->title) ?></h2>
    <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
