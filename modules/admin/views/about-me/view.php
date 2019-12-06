<?php

use app\modules\admin\models\ModelStatus;


/* @var $this yii\web\View */
/* @var $model app\models\AboutMe */

$this->title = 'About Me';
$this->params['breadcrumbs'][] = $this->title;
echo ModelStatus::getNotify();
?>

<div class="row">
    <div class="col-lg-3">
        <div class="card left-profile-card">
            <div class="card-body">
                <div class="text-center">
                    <img src="/upload/avatars/<?= $aboutMe['photo'] ?>" alt="" class="user-profile">
                    <h3><?= $aboutMe['first_name'].' '.$aboutMe['last_name'] ?></h3>
                    <p><?= $aboutMe['position'] ?></p>
                </div>
                <div class="personal-info">
                    <h3>Personal Information</h3>
                    <ul class="personal-list">
                        <li><i class="fas fa-briefcase "></i><span><?= $aboutMe['position'] ?></span></li>
                        <li><i class="fas fa-map-marker-alt "></i><span> New York</span></li>
                        <li><i class="far fa-envelope "></i><span>like @example.com</span></li>
                        <li><i class="fas fa-mobile "></i><span>1234564343</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card right-profile-card">
            <div class="card-header alert-primary">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="/admin/about-me/update?id=<?= $aboutMe['id'] ?>"><i class="fa fa-pen"></i> Edit</a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if($aboutMe['status'] == 1){
                                $text = '<i class="fa fa-check"></i> Active';
                                $class = 'btn btn-success';
                            }else{
                                $text = '<i class="fa fa-times"></i> Inactive';
                                $class = 'btn btn-danger';
                            }
                        ?>
                        <button class="<?= $class ?>" href="/" data-id="<?= $aboutMe['id'] ?>"
                           data-status="<?= $aboutMe['status']  ?>" onclick="changeAboutMe(this)"><?= $text ?></button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="work-container">
                            <?= $aboutMe['text'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .nav-pills li a:hover{
        color:black!important;
    }
</style>

<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>
