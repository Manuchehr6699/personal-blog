<?php

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
                <div class="card-body">
                    <h3 class="card-title">Add new Menu item for Users</h3>
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'parentnodeid')->textInput() ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeshortname')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodename')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeurl')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'userstatus')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeaccess')->textInput() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodestatus')->textInput() ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodeorder')->textInput() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'service_id')->textInput() ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nodefile')->textInput(['maxlength' => true]) ?>
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
