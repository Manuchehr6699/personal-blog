<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 16:55
 */
$all = $this->params['commentCount'] + $this->params['messageCount'] + $this->params['subcribersCount'];

?>
<!-- headertop -->
<div class="header">
    <nav class="navbar" style="margin-bottom: 0px">
        <div class="container-fluid">
            <div class="navbar-holder d-flex justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header d-flex align-items-center">
                    <!-- Navbar Brand -->
                    <a href="/" class="navbar-brand" style="font-size: 20px">
                        <div class="brand-text d-none d-lg-inline-block"><strong><?= Yii::$app->settings->get('Site', 'sitename') ?></strong></div>
                        <div class="brand-text  d-sm-inline-block d-lg-none"><strong>AP</strong></div>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center float-right">
                    <!-- Search-->
                    <li class="nav-item dropdown d-flex align-items-center mr-3">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" class="nav-link"><i
                                class="far fa-bell"></i><span class="badge bg-white"><?= $all ?></span></a>
                        <ul class="dropdown-menu notifications min-250">
                            <?php if($this->params['messageCount'] > 0): ?>
                            <li>
                                <a rel="nofollow" href="/admin/comment/messages" class="dropdown-item d-flex">
                                    <div class="msg-icon">
                                        <i class="fas fa-envelope bg-green"></i>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">You have <?=  $this->params['messageCount'] ?> New Messages</h3>
                                    </div>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if($this->params['subcribersCount'] > 0): ?>
                            <li>
                                <a rel="nofollow" href="/admin/main/subcribers" class="dropdown-item d-flex">
                                    <div class="msg-icon">
                                        <i class="fab fa-users bg-blue"></i>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">You have <?=  $this->params['subcribersCount'] ?> new Subcribers</h3>
                                    </div>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if($this->params['commentCount'] > 0): ?>
                            <li>
                                <a rel="nofollow" href="/admin/comment/index" class="dropdown-item d-flex">
                                    <div class="msg-icon">
                                        <i class="fas fa-upload bg-orange"></i>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">You have <?= $this->params['commentCount'] ?> User Comments</h3>
                                    </div>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <!-- Logout    -->
                    <!-- Messages
               -->
<!--                    <li id="comments" class="drawer d-flex align-items-center mr-2"><i-->
<!--                            class="far fa-comments text-white pointer"></i></li>-->
                    <li class="nav-item dropdown d-flex align-items-center mr-2">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user"
                           data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false"><img src="/upload/avatars/<?= $this->params['avatar']['avatar'] ?>" alt="user" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin/main/profile"><i class="fas fa-user-circle mr-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="/admin/settings"><i class="fas fa-cog mr-2"></i> Settings</a></li>
                            <li><a class="dropdown-item text-danger" href="/admin/main/logout"><i class="fas fa-power-off mr-2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- end headertop -->

