<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 16:55
 */

?>

<!-- headertop -->
<div class="header">
    <nav class="navbar" style="margin-bottom: 0px">
        <div class="container-fluid">
            <div class="navbar-holder d-flex justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header d-flex align-items-center">
                    <!-- Navbar Brand -->
                    <a href="/admin/main/index" class="navbar-brand" style="font-size: 20px">
                        <div class="brand-text d-none d-lg-inline-block"><strong>Blog</strong></div>
                        <div class="brand-text  d-sm-inline-block d-lg-none"><strong>BL</strong></div>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center float-right">
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center"><a id="searchs" href="#"><i
                                class="fas fa-search"></i></a></li>
                    <li class="nav-item dropdown d-flex align-items-center mr-3">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" class="nav-link"><i
                                class="far fa-bell"></i><span class="badge bg-white">10</span></a>
                        <ul class="dropdown-menu notifications min-250">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-icon">
                                        <i class="fas fa-envelope bg-green"></i>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">You have 6 New Messages</h3>
                                        <span>4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-icon">
                                        <i class="fab fa-twitter bg-blue"></i>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">You have 6 new Followers</h3>
                                        <span>4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-icon">
                                        <i class="fas fa-upload bg-orange"></i>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Server Rebooted</h3>
                                        <span>2 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>Read all messages </strong></a>
                            </li>
                        </ul>
                    </li>
                    <!-- Logout    -->
                    <!-- Messages
               -->
                    <li id="comments" class="drawer d-flex align-items-center mr-2"><i
                            class="far fa-comments text-white pointer"></i></li>
                    <li class="nav-item dropdown d-flex align-items-center mr-2">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user"
                           data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false"><img src="/admin_assets/img/profile.jpg" alt="user"
                                                      class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle mr-2"></i>Profile</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-unlock-alt mr-2"></i> Lock
                                    screen</a></li>
                            <li><a class="dropdown-item text-danger" href="#"><i
                                        class="fas fa-power-off mr-2"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs d-xs-flex toggle-icon">
                        <a href="#top-nav-list" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-fw fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- end headertop -->
