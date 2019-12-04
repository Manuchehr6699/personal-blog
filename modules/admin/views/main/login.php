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
                <h1 class="gradient-text-01">
                    Welcome To Divine!
                </h1>
                <p>Lorem ipsum Consectetur voluptate Excepteur amet Ut laboris incididunt ea sit culpa aute minim
                    reprehenderit labore mollit mollit in voluptate aute elit ut sed mollit quis irure veniam.</p>
            </div>
        </div>
    </div>
    <!-- End Left Content -->
    <!-- Begin Right Content -->
    <div class="col-lg-5 my-auto " style="">
        <!-- Begin Form -->
        <div class="authentication-form mx-auto">

            <h3 class="mb-3">Log in to Divine</h3>
            <p>Lorem ipsum Exercitation incididunt sed exercitation sit minim non irure consectetur.</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username or Email address') ?>
            <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>
            <div class="row mb-4">

                <div class="col-6 text-left">
                    <a href="pages-forgot-password.html">Forgot Password ?</a>
                </div>
            </div>
            <?= Html::submitButton('Sign in', ['class' => 'btn-theme btn-theme-primary mb-4', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!-- End Right Content -->
</div>
<!-- End Row -->
