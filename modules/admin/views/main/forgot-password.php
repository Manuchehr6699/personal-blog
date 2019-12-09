<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 13.11.2019
 * Time: 21:23
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="row h-100 bg-white">
    <!-- Begin Left Content -->
    <div class="col-lg-7 no-padding">
        <div class="background-01" style="background-image: linear-gradient(150deg, rgba(128, 24, 102, 0.8)15%, rgba(231, 124, 200, 0.8)70%, rgba(253, 162, 251, 0.8)94%), url(/admin_assets/img/login-bg.jpg );background-size: cover;">
            <div class="authentication-col-content mx-auto">
                <h1 class="gradient-text-01 text-center">
                    Forgot Password
                </h1>
                <p>
                    Enter your email and check. We will send link to reset your password!
                </p>
            </div>
        </div>
    </div>
    <!-- End Left Content -->
    <!-- Begin Right Content -->
    <div class="col-lg-5 my-auto " style="">
        <!-- Begin Form -->
        <div class="authentication-form mx-auto">

            <h3 class="mb-3">Forgot Your Password?</h3>

            <?php $form = ActiveForm::begin(['id' => 'reset-form']); ?>
            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'type' => 'email'])->label('Enter your Email') ?>
            <div class="text-left">
                <a href="/"><i class="fa fa-angle-left"></i> Back to <?= Yii::$app->settings->get('Site', 'sitename') ?></a>
            </div>
            <div class="row mb-4">
                <div class="col-6 text-left">
                    <a href="/admin/main/login"><i class="fa fa-angle-left"></i> Back to Login page</a>
                </div>
            </div>

            <?= Html::submitButton('<i class=\'fa fa-undo\'></i> Send', ['class' => 'btn-theme btn-theme-primary mb-4', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!-- End Right Content -->
</div>
<!-- End Row -->
