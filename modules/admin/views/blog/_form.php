<?php

use app\modules\admin\models\ModelStatus;
use dosamigos\tinymce\TinyMce;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-12">
           <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <?= $form->field($model, 'text')->widget(TinyMce::className(), [
               'options' => ['rows' => 15],
              //'language' => 'en',
               'clientOptions' => [
                   'plugins' => [
                       "advlist autolink lists link charmap print preview anchor",
                       "searchreplace visualblocks code fullscreen",
                       "insertdatetime media table contextmenu paste"
                   ],
                   'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
               ]
           ]);
           ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
           <?php
               echo $form->field($blogCategory, 'category_id')->widget(Select2::classname(), [
               'data' => ArrayHelper::map($categories, 'id', 'name'),
               'options' => ['placeholder' => 'Select categories ...', 'width' => '100%'],
               'pluginOptions' => [
                   'allowClear' => true
               ],
           ])->label('Categories')
           ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>
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
