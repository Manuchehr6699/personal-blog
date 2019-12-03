<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Pages */

$this->title = 'Create Pages';
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="pages-create">
    <?= ModelStatus::getNotify() ?>
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
