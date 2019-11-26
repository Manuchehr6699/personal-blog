<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AboutMeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Me';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-me-index">

   <?= ModelStatus::getNotify() ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create About Me', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:html',
            [
                   'attribute' => 'photo',
                   'filter' => false,
                   'format' => 'html'
            ],
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
