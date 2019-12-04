<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CVSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Curriculum Vitae Sections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cv-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= ModelStatus::getNotify() ?>
    <p>
        <?= Html::a('Create CV', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'title',
                    'text:html',
                    'status',
                    //'order',
                    //'created_at',
                    //'created_by',
                    //'updated_at',
                    //'upadted_by',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
