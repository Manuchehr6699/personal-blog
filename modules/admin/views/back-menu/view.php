<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */

$this->title = $model->nodeid;
$this->params['breadcrumbs'][] = ['label' => 'Back Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="back-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nodeid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nodeid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nodeid',
            'parentnodeid',
            'nodeshortname',
            'nodename',
            'nodeurl',
            'userstatus',
            'nodeaccess',
            'nodestatus',
            'nodeorder',
            'service_id',
            'nodefile',
            'nodeicon',
            'ishasdivider',
            'hasnotify',
            'notifyscript',
            'isforguest',
            'arrow_tag',
            'position',
        ],
    ]) ?>

</div>
