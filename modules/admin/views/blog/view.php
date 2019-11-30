<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="blog-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="card">
        <div class="card-header alert-primary">
            <h2>Blog: <?= $model->title ?></h2>
        </div>
        <div class="card-body">
            <?php if(file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/blog/'.$model->photo) && !empty($model->photo)): ?>
                <center><img src="/upload/blog/<?= $model->photo ?>"  style="margin-bottom: 20px" height="250px" width="auto"/></center>
            <?php endif; ?>
            <?= $model->text ?>
        </div>
    </div>
</div>
