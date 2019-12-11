<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */

$this->title = 'Add new Menu item for Admin';
$this->params['breadcrumbs'][] = ['label' => 'Admin SiteMenu items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['']];

?>
<div class="back-menu-create">
    <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
        'menuItems' => $menuItems
    ]) ?>

</div>
