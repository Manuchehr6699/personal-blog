<?php

use app\assets\TextEditorAssets;
use app\modules\admin\models\Pages;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use app\modules\admin\models\ModelStatus;

TextEditorAssets::register($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">
    <div class="about-me-form">
        <div class="card">
            <div class="card-header">
                <h2>Create new page</h2>
            </div>
            <div class="card-body" style="padding: 40px">
                <?php $form = ActiveForm::begin(['id' => 'form']); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'parent_id')->dropDownList(Pages::getListPages(), [
                                'prompt' => '--- Select Page Category ---'
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'menu_title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'order')->dropDownList(ArrayHelper::map(Pages::getPages(), 'order', function ($item) {
                                return 'After -> ' . $item['title'];
                            }) + ['-2' => "It's first page", '-1' => "It's last page"],
                            ['prompt' => '----Select page order---'])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!--                        --><? //= $form->field($model, 'blogs_id')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'blogs_id')->dropDownList(Pages::getBlogList(),
                            [
                                'class' => 'selectpicker form-control',
                                'id' => 'number2-multiple',
                                'title' => 'Select blogs ...',
                                'data-hide-disabled' => 'true',
                                'multiple' => 'true',
                            ])->label('Show Blogs to Content')
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px; width: 100%">
                    <div class="col-md-12">
                        <?= $form->field($model, 'tags')
                            ->textInput(['data-role' => 'tagsinput', 'class' => 'form-control', 'id' => 'tags'])->label('Press TAB for multiple tags') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'text')->widget(TinyMce::className(), [
                            'options' => ['rows' => 25],
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
                    </div>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    <?php echo Html::a('Go Back', ['index'], ['class' => 'btn btn-default']); ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

