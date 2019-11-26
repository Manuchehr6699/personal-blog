<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = 'Add Contact';
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
   <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
