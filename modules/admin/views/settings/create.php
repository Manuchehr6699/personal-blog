<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */

$this->title = Yii::t('yii2mod.settings', 'Create Setting');
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii2mod.settings', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="setting-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]);
    ?>

</div>
