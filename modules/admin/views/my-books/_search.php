<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MyBooksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="my-books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'publisher') ?>

    <?= $form->field($model, 'publish_year') ?>

    <?php // echo $form->field($model, 'isbn') ?>

    <?php // echo $form->field($model, 'page_count') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'ebook_file') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
