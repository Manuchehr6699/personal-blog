<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BackMenu */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="back-menu-form">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add new Menu item for Admin</h2>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodename')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeshortname')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeurl')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeaccess')->dropDownList(ModelStatus::listData()) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'parentnodeid')->dropDownList(ArrayHelper::map($menuItems, 'nodeid', 'nodename'), [
                                'prompt' => '---Select parent---'
                            ]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeorder')->dropDownList(ArrayHelper::map($menuItems, 'nodeorder', function ($item) {
                                  return 'After -> ' . $item['nodename'];
                               }) + ['-2' => "It's first Item", '-1' => "It's last Item"],
                               ['prompt' => '----Select Order---'])
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($model, 'nodeicon')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

