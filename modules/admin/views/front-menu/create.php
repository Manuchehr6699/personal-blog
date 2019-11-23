<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FrontMenu */

$this->title = 'Add new menu item';
$this->params['breadcrumbs'][] = ['label' => 'Menu items for Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ' / '.$this->title;
?>
<div class="front-menu-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
