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

                    [
                      'attribute' => 'photo',
                       'format' => 'html',
                        'value' => function($model){
                            return '<img src="/upload/book_cover/'.$model->photo.'" width=150>';
                        },
                        'hAlign' => 'center',
                        'vAlign' => 'middle',


                    ],
                    'name',
                    'author',
                    'publisher',
                    'publish_year',
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'status',
                        'editableOptions' => [
                            'formOptions' => ['action' => ['/admin/editable/change-book-status']],
                            'inputType' => \kartik\editable\Editable::INPUT_DROPDOWN_LIST,
                            'data' => [1 => 'Active', 0 => 'Inactive'],
                            'displayValueConfig' => [
                                '0' => '<span class="glyphicon glyphicon-remove-sign" style="font-size:25px;color:#C9302C"></span>',
                                '1' => '<span class="glyphicon glyphicon-ok-sign" style="font-size:25px;color:#449D44"></span>',
                            ],
                        ],
                        'hAlign' => 'center',
                        'vAlign' => 'middle',
                        'filter' => array(1 => 'Active', 0 => 'Inactive'),
                        'pageSummary' => true
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update}{view}',

                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
