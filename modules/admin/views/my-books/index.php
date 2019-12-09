<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MyBooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add New Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ModelStatus::getNotify() ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
                    'name',
                    'author',
                    'publisher',
                    'publish_year',
                    //'isbn',
                    //'page_count',
                    //'language',
                    //'category',
                    //'description:ntext',
                    //'photo',
                    //'ebook_file',
                    //'created_at',
                    //'created_by',
                    //'updated_at',
                    //'updated_by',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

</div>
