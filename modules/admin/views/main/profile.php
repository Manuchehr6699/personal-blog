<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 04.12.2019
 * Time: 15:29
 */

use yii\widgets\ActiveForm;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => '#'];
?>

    <div class="row">
        <div class="col-lg-4 offset-2">
            <div class="card left-profile-card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="/upload/avatars/<?= $profile['avatar'] ?>" alt="" class="user-profile">
                        <h3>
                       <span onclick="changeText(this, 'id-<?= $about_me['first_name'] ?>')" data-tbl="about_me"
                             data-atr="first_name" data-id="id-<?= $about_me['id'] ?>"
                             title="Click here for change" id="id-<?= $about_me['first_name'] ?>"
                             style="cursor: pointer">
                              <?= (!empty($about_me['first_name'])) ? $about_me['first_name'] : 'Your first name is empty.' ?>
                       </span>
                            <span onclick="changeText(this, 'id-<?= $about_me['last_name'] ?>')" data-tbl="about_me"
                                  data-atr="last_name" data-id="id-<?= $about_me['id'] ?>"
                                  title="Click here for change" id="id-<?= $about_me['last_name'] ?>"
                                  style="cursor: pointer">
                              <?= (!empty($about_me['last_name'])) ? $about_me['last_name'] : 'Your last name is empty.' ?>
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
                                <span onclick='changeText(this, "id-<?= $about_me['id'] ?>")' data-tbl="about_me"
                                      data-atr="position" data-id="id-<?= $about_me['id'] ?>"
                                      title="Click here for change" id="id-<?= $about_me['id'] ?>"
                                      style="cursor: pointer">
                              <?= (!empty($about_me['position'])) ? $about_me['position'] : 'Your position is empty.' ?>
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
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Social and Research Profiles</h3>
                    <?php foreach ($socials as $social): $icon = ($social['icon'] == 'email') ? 'fas fa-envelope' : 'fab fa-'.$social['icon'] ?>
                        <button class="btn-social btn-<?= $social['icon'] ?>" data-container="body" data-toggle="popover" data-placement="top" data-content="<?= $social['name'].' - '.$social['description'] ?>" data-original-title="" title="" aria-describedby="popover296353">
                            <i class="<?= $icon ?>"></i>
                        </button>
                    <?php endforeach; ?>
<!--                    <a href="#" target="_blank" class="btn-social btn-twitter"><i class="fab fa-twitter"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-facebook"><i class="fab fa-facebook"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-google-plus"><i class="fab fa-google-plus"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-instagram"><i class="fab fa-instagram"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-linkedin"><i class="fab fa-linkedin"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-pinterest"><i class="fab fa-pinterest"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-skype"><i class="fab fa-skype"></i></a>-->
<!--                    <a href="#" target="_blank" class="btn-social btn-dropbox"><i class="fab fa-dropbox"></i></a>-->
                    <br><hr>
                    <a class="btn btn-success" href="/admin/profiles/create" target="_blank"><i class="fa fa-plus-circle"></i> Add</a>
                </div>
            </div>
        </div>
    </div>


<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>


