<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BackMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Menu items';
$this->params['breadcrumbs'][] = ' / '.$this->title;
?>
<div class="back-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Back Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
            //'userstatus',
            //'nodeaccess',
            //'nodestatus',
            //'nodeorder',
            //'service_id',
            //'nodefile',
            //'nodeicon',
            //'ishasdivider',
            //'hasnotify',
            //'notifyscript',
            //'isforguest',
            //'arrow_tag',
            //'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
