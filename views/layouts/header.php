<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 21:20
 */

use app\widgets\SiteMenu;

?>

<header class="akea-header-wrap akea-header-style-plain akea-style-splitted-menu akea-style-slide" data-navigation-offset='75px'>
    <div class=akea-header-background></div>
    <div class="akea-header-container  akea-container">
        <div class="akea-header-container-inner clearfix">
            <div class="akea-navigation akea-item-pdlr clearfix ">
                <center>
                    <h3>
                        <a style="cursor: pointer; text-transform: uppercase; letter-spacing: 2px;" href="/">
                        <img src="/upload/book_cover/the_scopus_diaries_and_the_logics_of_academic_survival.jpg"
                             style="width: 42px; position: absolute; left: 27%; margin-top: 5px"/>
                            The SCOPUS Diaries
                        </a>
                    </h3>
                    <b><h6  style="margin-top: -20px; color: #7E3374!important;">and the (il)logics of Academic Survivals</h6></b>
                </center>
                <div class=akea-main-menu id=akea-main-menu style="margin-top: 20px">
                    <?php
                    $dependency = [
                        'class' => 'yii\caching\DbDependency',
                        'sql' => 'SELECT COUNT(*) FROM front_menu',
                    ];
                    if ($this->beginCache('FrontMenu', ['dependency' => $dependency])) {
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
                    <?php foreach (Yii::$app->params['profiles'] as $item): $item['link'] = ($item['icon'] == 'envelope') ? $item['link'] = 'mailto:'.$item['name'] : $item['link']; ?>
                        <a href='<?= $item['link'] ?>' target='_blank' class=akea-top-bar-social-icon title='<?= $item['icon'] ?>'>
                            <i class="fa fa-<?= $item['icon'] ?>"></i>
                        </a>
                    <?php endforeach; ?>
                    <?php if(Yii::$app->user->isGuest): ?>
                    <a href='/admin' target='_blank' class=akea-top-bar-social-icon title='Login'>
                        <i class="fa fa-sign-in"></i> Login
                    </a>
                    <?php else: ?>
                    <a href='/main/logout' class=akea-top-bar-social-icon title='Login'>
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>