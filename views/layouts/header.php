<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 21:20
 */

use app\widgets\SiteMenu;

?>

<header class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide" data-navigation-offset=75px>
    <div class=akea-header-background></div>
    <div class="akea-header-container  akea-container">
        <div class="akea-header-container-inner clearfix">
            <div class="akea-navigation akea-item-pdlr clearfix ">
                <center>
                    <h3>
                        <?= Yii::$app->settings->get('Site', 'sitename') ?>
                    </h3>
                </center>
                <div class=akea-main-menu id=akea-main-menu style="margin-top: 20px">
                    <?php
                    $dependency = [
                        'class' => 'yii\caching\DbDependency',
                        'sql' => 'SELECT COUNT(*) FROM front_menu',
                    ];
                    if ($this->beginCache('FrontMenu')) {
                        echo SiteMenu::getMenu();
                        $this->endCache();
                    }
                    ?>
                    <div class=akea-navigation-slide-bar id=akea-navigation-slide-bar></div>
                </div>

                <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                    <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu>
                        <a class="akea-overlay-menu-icon akea-right-menu-button
                                  akea-top-menu-button akea-mobile-button-hamburger"
                            href=#><span></span>
                        </a>
                        <div class="akea-overlay-menu-content akea-navigation-font">
                            <div class=akea-overlay-menu-close></div>
                            <div class=akea-overlay-menu-row>
                                <div class=akea-overlay-menu-cell>
                                    <?php
                                    $dependency = [
                                        'class' => 'yii\caching\DbDependency',
                                        'sql' => 'SELECT COUNT(*) FROM front_menu',
                                    ];
                                    if ($this->beginCache('FrontMenuMobile')) {
                                        echo SiteMenu::getMobileMenu();
                                        $this->endCache();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="akea-main-menu-left-wrap akea-main-menu-left-social clearfix akea-item-pdlr akea-navigation-top">
                    <a href=# target=_blank class=akea-top-bar-social-icon title=facebook>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href=# target=_blank class=akea-top-bar-social-icon title=google-plus>
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href=# target=_blank class=akea-top-bar-social-icon title=pinterest>
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                    <a href=# target=_blank class=akea-top-bar-social-icon title=twitter>
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href=# target=_blank class=akea-top-bar-social-icon title=vimeo>
                        <i class="fa fa-vimeo"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
