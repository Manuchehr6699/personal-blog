<?php

use app\assets\TextEditorAssets;
use app\modules\admin\models\ModelStatus;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\blog */
/* @var $form yii\widgets\ActiveForm */

TextEditorAssets::register($this);

?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card">
        <div class="card-header">
            <h2>Add New Post</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
           <?php
           if(!$model->isNewRecord){
              if(file_exists(Yii::getAlias('@uploadroot').'/blog/'.$model->photo)){
                 echo '<center><img src="/upload/blog/'.$model->photo.'" width="300"></center>';
              }
           }

           ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'text')->widget(TinyMce::className(), [
                        'options' => ['rows' => 15],
                        //'language' => 'en',
                        'clientOptions' => [
                            'plugins' => [
                                "advlist autolink lists link charmap print preview anchor",
                                "searchreplace visualblocks code fullscreen",
                                "insertdatetime media image table contextmenu paste"
                            ],
                            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                        ]
                    ]);
                    ?>
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px">
                <div class="col-md-6">
                    <?= $form->field($model, 'tags')->textInput(['data-role' => 'tagsinput', 'class' => 'form-control']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($blogCategory, 'category_id')->dropDownList(ArrayHelper::map($categories, 'id', 'name'),
                        [
                            'class' => 'selectpicker form-control',
                            'id' => 'number2-multiple',
                            'title' => 'Select category ...',
                            'data-hide-disabled' => 'true',
                            'multiple' => 'true'
                        ])
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
    </div>
</div>
