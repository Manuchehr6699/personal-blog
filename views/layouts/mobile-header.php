<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 21:21
 */
?>
<div class=akea-mobile-header-wrap>
    <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation "
         id=akea-mobile-header>
        <div class="akea-mobile-header-container akea-container clearfix">
            <div class=akea-mobile-menu-right>
                <div class=akea-main-menu-search id=akea-mobile-top-search><i class="fa fa-search"></i></div>
                <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a
                        class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger"
                        href=#><span></span></a>
                    <div class="akea-overlay-menu-content akea-navigation-font">
                        <div class=akea-overlay-menu-close></div>
                        <div class=akea-overlay-menu-row>
                            <div class=akea-overlay-menu-cell>
                               <?= \app\widgets\SiteMenu::getMobileMenu() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
