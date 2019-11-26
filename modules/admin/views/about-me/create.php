<?php

use yii\helpers\Html;
use app\modules\admin\models\ModelStatus;

/* @var $this yii\web\View */
/* @var $model app\models\AboutMe */

$this->title = 'Create About Me';
$this->params['breadcrumbs'][] = ['label' => 'About Mes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-me-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
        'photo' => $photo,
    ]) ?>

</div>
