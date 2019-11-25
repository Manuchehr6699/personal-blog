<?php

use app\assets\TextEditorAssets;
use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
TextEditorAssets::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\AboutMe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-me-form">
    <div class="card">
        <div class="card-header">
            <h2>About Me</h2>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'text')->textarea(['rows' => 6, 'id' => 'code_preview0', 'style' => 'style="height: 300px;']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
                </div>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>







</div>
