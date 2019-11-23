<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */

$this->title = 'Add new Menu item for Admin';
$this->params['breadcrumbs'][] = ['label' => 'Admin Menu items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ' / '.$this->title;
?>
<div class="back-menu-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
