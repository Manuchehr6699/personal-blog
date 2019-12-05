<?php


use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\AboutMe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-me-form">
    <div class="card">
        <div class="card-header">
            <h2>Add about me</h2>
        </div>
        <div class="card-body" style="padding: 40px">
           <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'first_name')->textInput() ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'last_name')->textInput() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'position')->textInput() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <?= $form->field($model, 'text')->widget(TinyMce::className(), [
                       'options' => ['rows' => 20],
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
                   <?= $form->field($model, 'photo')->fileInput() ?>
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
