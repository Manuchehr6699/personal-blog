<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BackMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Menu Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="back-menu-index">
    <?= ModelStatus::getNotify() ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add new item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="card">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'nodeid',
                    'parentnodeid',
                    'nodeshortname',
                    'nodename',
                    'nodeurl',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        </div>
    </div>
</div>
