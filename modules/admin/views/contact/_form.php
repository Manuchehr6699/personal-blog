<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">
    <div class="card">
        <div class="card-header">
            <h2>Add Contacts</h2>
        </div>
        <div class="card-body" style="padding: 40px">
           <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-6">
                   <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                   <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                   <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <?= $form->field($model, 'status')->textInput() ?>
                </div>
            </div>
            <div class="form-group">
               <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
           <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
