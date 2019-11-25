<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */

$this->title = $model->nodename;
$this->params['breadcrumbs'][] = ['label' => 'Admin menu', 'url' => ['index']];
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
        <?= Html::a('Add New Item', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nodeid',
            'parentnodeid',
            'nodename',
            'nodeshortname',
            'nodeurl',
            'nodeaccess',
            'nodeorder',
//            'nodefile',
//            'nodeicon',
//            'ishasdivider',
//            'hasnotify',
//            'notifyscript',
//            'isforguest',
//            'arrow_tag',
//            'position',
        ],
    ]) ?>

</div>
