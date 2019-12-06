<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\blog */

$this->title = $model['title'];
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];

?>
<div class="column is-flexible ">
    <!-- BEGIN: .container-fluid -->
    <div class="container-fluid">
        <div class="card">
            <div class="box">
                <header class="b-b">
                    <button class="btn btn-light visible-xs m-r-15" data-toggle="canvas" data-target="#email-left">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <h4><?= $model['title'] ?></h4>
                </header>
                <div class="box-body">
                    <div class="media row d-flex align-items-center">
                        <div class="media-left">
                            <img src="/upload/blog/<?= $model['photo'] ?>" alt="..." class="mr-4 ml-4" style="width: 250px;">
                        </div>
                        <div class="media-body">
                            <?php //Todo ?>
                            <span><?= date('d M Y H:i:s', $model['created_at']) ?></span>
                            <h4><?= $model['username'] ?></h4>
                            <h5><?= $model['email'] ?></h5>
                        </div>
                    </div>
                    <hr>
                    <p class="text-muted">
                        <?= $model['text'] ?>
                    </p>
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6">-->
<!--                            <button class="btn btn-light"> <i class="fas fa-reply mr-2"></i>Reply</button>-->
<!--                            <button class="btn btn-light"><i class="fas fa-arrow-right mr-2"></i>Forward</button>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 text-right">-->
<!--                            <button class="flat-btn flat-btn-primary"><i class="fas fa-paper-plane mr-2"></i>Send</button>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- END: .container-fluid -->
</div>
