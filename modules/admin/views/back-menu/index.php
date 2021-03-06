<?php

use app\modules\admin\models\BackMenu;
use app\modules\admin\models\ModelStatus;
use kartik\editable\Editable;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BackMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Menu Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="back-menu-index">
    <?= ModelStatus::getNotify() ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add new item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="card">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
//                    'nodeid',
                    [
                      'attribute' => 'parentnodeid',
                      'format' => 'html',
                      'filter' => ArrayHelper::map(BackMenu::getItems(), 'nodeid', 'nodename'),
                        'value' => function($model, $key){
                            $value = BackMenu::find()->where(['nodeid' => $model->parentnodeid])->asArray()->one();

                            if(empty($value['nodename'])){
                                $value['nodename'] = '-';
                            }
                            return $value['nodename'];
                        }
                    ],
//                    'nodeshortname',
                    'nodename',
                    'nodeurl',
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'nodeaccess',
                        'editableOptions' => [
                            'formOptions' => ['action' => ['/admin/editable/change-admin-menu-nodeaccess']],
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
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update}{view}',
                    ],
                ],
            ]); ?>

        </div>
    </div>
</div>
