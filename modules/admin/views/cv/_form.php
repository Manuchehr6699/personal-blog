<?php

use app\models\CV;
use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\CV */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cv-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="card">
        <div class="card-header">
            <h2>Add CV section</h2>
        </div>
        <div class="card-body">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'text')->widget(TinyMce::className(), [
                'options' => ['rows' => 15],
                'language' => 'en-US',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media image table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]); ?>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'order')->dropDownList(\yii\helpers\ArrayHelper::map(CV::getItems(), 'order', function ($item) {
                           return 'After -> ' . $item['title'];
                        }) + ['-2' => "It's first Item", '-1' => "It's last Item"],
                        ['prompt' => '----Select Order---'])
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'cv_file')->fileInput()->label('Choose complete CV file') ?>
                </div>
            </div>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
