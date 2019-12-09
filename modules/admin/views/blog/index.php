<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->
    <?= ModelStatus::getNotify() ?>
    <p>
        <?= Html::a('Create New Post', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Show All Posts', ['posts'], ['class' => 'btn btn-primary']) ?>
    </p>
    <div class="card">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
                    [
                        'attribute' => 'title'
                    ],
//                    'text:ntext',
                    [
                        'attribute' => 'photo',
                        'format' => 'html',
                        'value' => function($dataProvider){
                            return '<img src="/upload/blog/'.$dataProvider->photo.'" width="250" height="auto">';
                        },
                        'hAlign' => 'center',
                        'vAlign' => 'middle',
                    ],
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'status',
                        'editableOptions' => [
                            'formOptions' => ['action' => ['/admin/editable/change-post-status']],
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
                    //'tags',
                    //'like_count',
                    //'created_at',
                    //'created_by',
                    //'updated_at',
                    //'updated_by',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update}{view}',
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
