<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FrontMenu */

$this->title = 'Add new Menu item for Users';
$this->params['breadcrumbs'][] = ['label' => 'Site Menu items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['']];

?>
<div class="front-menu-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
        'menuItems' => $menuItems
    ]) ?>

</div>
