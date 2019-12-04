<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\blog */

$this->title = 'Create Blog';
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-create">
    <?= ModelStatus::getNotify() ?>

    <?= $this->render('_form', [
        'model' => $model,
        'blogCategory' => $blogCategory,
        'categories' => $categories
    ]) ?>

</div>
