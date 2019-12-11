<?php

use app\modules\admin\models\ModelStatus;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\AboutMe */

$this->title = 'About Me';
$this->params['breadcrumbs'][] = ['label' => 'About Me', 'url' => '#'];
echo ModelStatus::getNotify();
?>

<div class="row">
    <div class="col-lg-3">
        <div class="card left-profile-card">
            <div class="card-body">
                <div class="text-center">
                    <img src="/upload/avatars/<?= $profile['avatar'] ?>" alt="" class="user-profile">
                    <h3>
                       <span onclick="changeText(this, 'id-<?= $aboutMe['first_name'] ?>')" data-tbl="about_me"
                             data-atr="first_name" data-id="id-<?= $aboutMe['id'] ?>"
                             title="Click here for change" id="id-<?= $aboutMe['first_name'] ?>"
                             style="cursor: pointer">
                              <?= (!empty($aboutMe['first_name'])) ? $aboutMe['first_name'] : 'Your first name is empty.' ?>
                       </span>
                        <span onclick="changeText(this, 'id-<?= $aboutMe['last_name'] ?>')" data-tbl="about_me"
                              data-atr="last_name" data-id="id-<?= $aboutMe['id'] ?>"
                              title="Click here for change" id="id-<?= $aboutMe['last_name'] ?>"
                              style="cursor: pointer">
                              <?= (!empty($aboutMe['last_name'])) ? $aboutMe['last_name'] : 'Your last name is empty.' ?>
                       </span>
                    </h3>
                   <?php if ($profile['user_type'] == 'A') {
                      echo '<p>Administrator</p>';
                   } else {
                      echo '<p>User</p>';
                   }

                   ?>
                </div>
                <div class="personal-info">
                    <h3>Personal Information</h3>
                    <ul class="personal-list">
                        <li><i class="fas fa-user"></i>
                            <span onclick="changeText(this, 'user_id-<?= $profile['user_id'] ?>')" data-tbl="user"
                                  data-atr="username" data-id="user_id-<?= $profile['user_id'] ?>"
                                  title="Click here for change" id="user_id-<?= $profile['user_id'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($profile['username'])) ? $profile['username'] : 'Your username is empty.' ?>
                            </span>
                        </li>
                        <li><i class="fas fa-briefcase "></i>
                            <span onclick='changeText(this, "id-<?= $aboutMe['id'] ?>")' data-tbl="about_me"
                                  data-atr="position" data-id="id-<?= $aboutMe['id'] ?>"
                                  title="Click here for change" id="id-<?= $aboutMe['id'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($aboutMe['position'])) ? $aboutMe['position'] : 'Your position is empty.' ?>
                            </span>
                        </li>
                        <li><i class="fas fa-envelope "></i>
                            <span onclick='changeText(this, "uid-<?= $profile['user_id'] ?>")' data-tbl="user"
                                  data-atr="email" data-id="user_id-<?= $profile['user_id'] ?>"
                                  title="Click here for change" id="uid-<?= $profile['user_id'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($profile['email'])) ? $profile['email'] : 'Your email is empty.' ?>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt "></i>
                            <span onclick='changeText(this, "country-<?= $contacts['id'] ?>")' data-tbl="contact"
                                  data-atr="country" data-id="id-<?= $contacts['id'] ?>"
                                  title="Click here for change" id="country-<?= $contacts['id'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($contacts['country'])) ? $contacts['country'] : 'Your country is empty.' ?>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-city"></i>
                            <span onclick='changeText(this, "city-<?= $contacts['id'] ?>")' data-tbl="contact"
                                  data-atr="city" data-id="id-<?= $contacts['id'] ?>"
                                  title="Click here for change" id="city-<?= $contacts['id'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($contacts['city'])) ? $contacts['city'] : 'Your city is empty.' ?>
                            </span>
                        </li>

                        <li>
                            <i class="fas fa-phone"></i>
                            <span onclick='changeText(this, "phone_number-<?= $contacts['id'] ?>")'
                                  data-tbl="contact" data-atr="phone_number" data-id="id-<?= $contacts['id'] ?>"
                                  title="Click here for change" id="phone_number-<?= $contacts['id'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($contacts['phone_number'])) ? $contacts['phone_number'] : 'Your phone number is empty.' ?>
                            </span>
                        </li>
                    </ul>
                   <?php $form = ActiveForm::begin(['action' => '/admin/editable/change-photo']) ?>
                   <?= $form->field($model, 'avatar')->fileInput() ?>
                    <button type="submit" class="btn btn-success p-1">Change</button>
                   <?php ActiveForm::end() ?>
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
