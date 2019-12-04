<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use kartik\grid\GridView;
use \kartik\editable\Editable;
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
        <?= Html::a('Add About Me', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card">
        <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'text:html',
            [
                   'attribute' => 'photo',
                   'filter' => false,
                   'format' => 'html'
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'status',

                'editableOptions' => [
                    'formOptions' => ['action' => ['/admin/editable/change-about-me-status']],
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
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>

</div>
