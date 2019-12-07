<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 04.12.2019
 * Time: 15:29
 */
$this->title = 'Profile';
$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => '#'];
?>

<div class="row">
    <div class="col-lg-3 offset-4">
        <div class="card left-profile-card">
            <div class="card-body">
                <div class="text-center">
                    <img src="/admin_assets/img/profile.jpg" alt="" class="user-profile">
                    <h3 onclick="changeText(this)" data-tbl="user" data-atr="username" data-id="user_id-<?= $profile['user_id'] ?>"
                        title="Click here for change" id="text" style="cursor: pointer">
                       <?= $profile['username'] ?>
                    </h3>
                    <?php if($profile['user_type'] == 'A'){
                        echo '<p>Administrator</p>';
                    }else{
                        echo '<p>User</p>';
                    }

                    ?>

                </div>
                <div class="personal-info">
                    <h3>Personal Information</h3>
                    <ul class="personal-list">
                        <li><i class="fas fa-briefcase "></i>
                            <span onclick="changeText(this)" data-tbl="about_me" data-atr="position" data-id="id-<?= $about_me['id'] ?>"
                                   title="Click here for change" id="text" style="cursor: pointer">
                              <?= (!empty($about_me['position'])) ? $about_me['position'] : 'Your position is empty.' ?>
                            </span>
                        </li>
                        <li><i class="far fa-envelope "></i><span><?= $profile['email'] ?></span></li
                        <li><i class="fas fa-map-marker-alt "></i><span> </span></li>
                        >
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>