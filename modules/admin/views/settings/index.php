<?php

use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\editable\Editable;
use app\modules\admin\models\enumerables\SettingType;
use app\modules\admin\models\enumerables\SettingStatus;
use app\modules\admin\models\SettingModel;

/* @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = 'Page Settings';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="setting-index">
    <p><?php echo Html::a('<i class="fa fa-plus"></i> Add', ['create'], ['class' => 'btn btn-success']); ?></p>
    <div class="card">
        <div class="card-body">
            <?php Pjax::begin(['timeout' => 10000, 'enablePushState' => false]); ?>

            <?php echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                        ],
                        [
                            'attribute' => 'type',
                            'filter' => SettingType::listData(),
                            'filterInputOptions' => ['prompt' => Yii::t('yii2mod.settings', 'Select Type'), 'class' => 'form-control'],
                        ],
                        [
                            'attribute' => 'section',
                            'filter' => ArrayHelper::map(SettingModel::find()->select('section')->distinct()->all(), 'section', 'section'),
                            'filterInputOptions' => ['prompt' => Yii::t('yii2mod.settings', 'Select Section'), 'class' => 'form-control'],
                        ],
                        'key',
                        [
                            'attribute' => 'value',
                            'format' => 'html',
                            'value' => function ($dataProvider) {
                                return wordwrap($dataProvider->value, 40, '<br>');
                            }
                        ],

                        [
                            'attribute' => 'description',
                            'format' => 'html',
                            'value' => function ($dataProvider) {
                                return wordwrap($dataProvider->description, 40, '<br>');
                            }
                        ],
                        [
                            'class' => 'kartik\grid\EditableColumn',
                            'attribute' => 'status',
                            'editableOptions' => [
                                'formOptions' => ['action' => ['/admin/editable/change-setting-status']],
                                'inputType' => Editable::INPUT_DROPDOWN_LIST,
                                'data' => SettingStatus::listData(),
                                'displayValueConfig' => [
                                    '0' => '<span class="glyphicon glyphicon-remove-sign" style="font-size:25px;color:#C9302C"></span>',
                                    '1' => '<span class="glyphicon glyphicon-ok-sign" style="font-size:25px;color:#449D44"></span>',
                                ],
                            ],
                            'hAlign' => 'center',
                            'vAlign' => 'middle',
                            'filter' => SettingStatus::listData(),
                            'pageSummary' => true
                        ],
                        [
                            'header' => Yii::t('yii2mod.settings', 'Actions'),
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{update}',

                        ],
//
                    ],
                ]
            ); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
