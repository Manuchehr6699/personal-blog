<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profiles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profiles-form">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add Profile Details</h2>
                </div>
                <div class="card-body">
                   <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-md-6">
                           <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Username') ?>
                        </div>
                        <div class="col-md-6">
                           <?= $form->field($model, 'link')->textInput(['maxlength' => true])->label('URL to profile') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <?= $form->field($model, 'type')->dropDownList(['social' => 'Social', 'publication' => 'Publication'], ['prompt' => '---Select Profile Type---']) ?>
                        </div>
                        <div class="col-md-6">
                           <?= $form->field($model, 'order')->textInput() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <?= $form->field($model, 'icon')->dropDownList(ModelStatus::$listIcons) ?>
                        </div>
                        <div class="col-md-6">
                           <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                       <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                   <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
