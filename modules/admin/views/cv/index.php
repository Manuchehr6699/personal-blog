<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CVSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cvs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cv-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cv', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            'status',
            'order',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'upadted_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
