<?php

use app\modules\admin\models\ModelStatus;
use kartik\editable\Editable;
use yii\helpers\Html;
use kartik\grid\GridView;

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

//                    'id',
                    'title',
                    'text:html',
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'status',

                        'editableOptions' => [
                            'formOptions' => ['action' => ['/admin/editable/change-cv-status']],
                            'inputType' => Editable::INPUT_DROPDOWN_LIST,
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
                    //'order',
                    //'created_at',
                    //'created_by',
                    //'updated_at',
                    //'upadted_by',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update}{view}',
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
