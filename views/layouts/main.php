<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\MainAsset;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox"
      data-home-url=index.html>
<?php $this->beginBody() ?>


<div class=akea-mobile-header-wrap>
    <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation "
         id=akea-mobile-header>
        <div class="akea-mobile-header-container akea-container clearfix">
            <div class="akea-logo  akea-item-pdlr">
                <div class=akea-logo-inner>
                    <a class href=index.html><img src=upload/logo-2-1.png alt width=140 height=33 title=logo-2></a>
                </div>
            </div>
            <div class=akea-mobile-menu-right>
                <div class=akea-main-menu-search id=akea-mobile-top-search><i class="fa fa-search"></i></div>
                <div class=akea-top-search-wrap>
                    <div class=akea-top-search-close></div>
                    <div class=akea-top-search-row>
                        <div class=akea-top-search-cell>
                            <form role=search method=get class=search-form action=#>
                                <input type=text class="search-field akea-title-font" placeholder=Search... value
                                       name=s>
                                <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                <input type=submit class=search-submit value=Search>
                                <div class=akea-top-search-close><i class=icon_close></i></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a
                            class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger"
                            href=#><span></span></a>
                    <div class="akea-overlay-menu-content akea-navigation-font">
                        <div class=akea-overlay-menu-close></div>
                        <div class=akea-overlay-menu-row>
                            <div class=akea-overlay-menu-cell>
                                <ul id=menu-main-navigation class=menu>
                                    <li class="menu-item menu-item-home current-menu-item"><a href=index.html
                                                                                              aria-current=page>Home</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item menu-item-home current-menu-item "><a href=index.html
                                                                                                       aria-current=page>Homepage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=contact.html>Contact</a></li>
                                            <li class="menu-item"><a href=author.html>Author</a></li>
                                            <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                            <li class="menu-item"><a href=price-table.html>Price Table</a></li>
                                            <li class="menu-item"><a href=maintenance.html>Maintenance</a></li>
                                            <li class="menu-item"><a href=coming-soon.html>Coming Soon</a></li>
                                            <li class="menu-item"><a href=404.html>404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=photography.html>Photography</a></li>
                                            <li class="menu-item"><a href=travel.html>Travel</a></li>
                                            <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                            <li class="menu-item"><a href=food.html>Food</a></li>
                                            <li class="menu-item"><a href=technology.html>Technology</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a
                                                href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single
                                                    Post</a></li>
                                            <li class="menu-item"><a
                                                        href=9-most-awesome-blue-lake-with-snow-mountain.html>Single
                                                    Post</a></li>
                                            <li class="menu-item menu-item-has-children"><a
                                                        href=blog-full-no-sidebar.html>Blog Full</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No
                                                            Sidebar</a></li>
                                                    <li class="menu-item"><a
                                                                href=blog-full-no-sidebar-with-post-format.html>Blog
                                                            Full No Sidebar With Post Format</a></li>
                                                    <li class="menu-item"><a
                                                                href=blog-full-right-sidebar-with-frame.html>Blog Full
                                                            Right Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full
                                                            Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a
                                                        href=blog-grid-overlay-no-space.html>Blog Grid Overlay</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid
                                                            Overlay</a></li>
                                                    <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog
                                                            Grid Overlay No Space</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a
                                                        href=blog-columns-with-frame.html>Blog Columns</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-columns-with-frame.html>Blog
                                                            Columns With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-columns.html>Blog Columns</a>
                                                    </li>
                                                    <li class="menu-item"><a
                                                                href=blog-columns-with-frame-post-format.html>Blog
                                                            Columns With Post Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href=about-us.html>About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="akea-body-outer-wrapper ">
    <div class="akea-body-wrapper clearfix  akea-with-frame">
        <header class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide"
                data-navigation-offset=75px>
            <div class=akea-header-background></div>
            <div class="akea-header-container  akea-container">
                <div class="akea-header-container-inner clearfix">
                    <div class="akea-navigation akea-item-pdlr clearfix ">
                        <center><h3>
                                Raul Pacheco-Vega, PhD
                            </h3></center>
                        <div class=akea-main-menu id=akea-main-menu>
                            <ul id=menu-main-navigation-1 class=sf-menu>
                                <li class="menu-item menu-item-home current-menu-item akea-normal-menu"><a
                                            href=index.html class=sf-with-ul-pre>Home</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item menu-item-home current-menu-item " data-size=60><a
                                                    href=index.html>Homepage</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=#
                                                                                                 class=sf-with-ul-pre>Pages</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href=contact.html>Contact</a></li>
                                        <li class="menu-item" data-size=60><a href=author.html>Author</a></li>
                                        <li class="menu-item" data-size=60><a href=gallery.html>Gallery</a></li>
                                        <li class="menu-item" data-size=60><a href=price-table.html>Price Table</a></li>
                                        <li class="menu-item" data-size=60><a href=maintenance.html>Maintenance</a></li>
                                        <li class="menu-item" data-size=60><a href=coming-soon.html>Coming Soon</a></li>
                                        <li class="menu-item" data-size=60><a href=404.html>404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=#
                                                                                                 class=sf-with-ul-pre>Category</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href=photography.html>Photography</a></li>
                                        <li class="menu-item" data-size=60><a href=travel.html>Travel</a></li>
                                        <li class="menu-item" data-size=60><a href=fashion.html>Fashion</a></li>
                                        <li class="menu-item" data-size=60><a href=food.html>Food</a></li>
                                        <li class="menu-item" data-size=60><a href=technology.html>Technology</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a
                                            href=blog-full-right-sidebar-with-frame.html class=sf-with-ul-pre>Layout</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a>
                                        </li>

                                        <li class="menu-item menu-item-has-children" data-size=60><a
                                                    href=blog-full-no-sidebar.html class=sf-with-ul-pre>Blog Full</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No
                                                        Sidebar</a></li>
                                                <li class="menu-item"><a
                                                            href=blog-full-no-sidebar-with-post-format.html>Blog Full No
                                                        Sidebar With Post Format</a></li>
                                                <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog
                                                        Full Right Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full
                                                        Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a
                                                    href=blog-grid-overlay-no-space.html class=sf-with-ul-pre>Blog Grid
                                                Overlay</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid
                                                        Overlay</a></li>
                                                <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid
                                                        Overlay No Space</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a
                                                    href=blog-columns-with-frame.html class=sf-with-ul-pre>Blog
                                                Columns</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns
                                                        With Frame</a></li>
                                                <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog
                                                        Columns With Post Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item akea-normal-menu"><a
                                            href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                <li class="menu-item akea-normal-menu"><a href=about-us.html>About</a></li>
                            </ul>
                            <div class=akea-navigation-slide-bar id=akea-navigation-slide-bar></div>
                        </div>

                        <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                            <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu><a
                                        class="akea-overlay-menu-icon akea-right-menu-button akea-top-menu-button akea-mobile-button-hamburger"
                                        href=#><span></span></a>
                                <div class="akea-overlay-menu-content akea-navigation-font">
                                    <div class=akea-overlay-menu-close></div>
                                    <div class=akea-overlay-menu-row>
                                        <div class=akea-overlay-menu-cell>
                                            <ul id=menu-main-navigation-2 class=menu>
                                                <li class="menu-item menu-item-home current-menu-item"><a
                                                            href=index.html aria-current=page>Home</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item menu-item-home current-menu-item "><a
                                                                    href=index.html aria-current=page>Homepage</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=contact.html>Contact</a></li>
                                                        <li class="menu-item"><a href=author.html>Author</a></li>
                                                        <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                                        <li class="menu-item"><a href=price-table.html>Price Table</a>
                                                        </li>
                                                        <li class="menu-item"><a href=maintenance.html>Maintenance</a>
                                                        </li>
                                                        <li class="menu-item"><a href=coming-soon.html>Coming Soon</a>
                                                        </li>
                                                        <li class="menu-item"><a href=404.html>404 Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=photography.html>Photography</a>
                                                        </li>
                                                        <li class="menu-item"><a href=travel.html>Travel</a></li>
                                                        <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                                        <li class="menu-item"><a href=food.html>Food</a></li>
                                                        <li class="menu-item"><a href=technology.html>Technology</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a
                                                            href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg
                                                                Single Post</a></li>
                                                        <li class="menu-item"><a
                                                                    href=9-most-awesome-blue-lake-with-snow-mountain.html>Single
                                                                Post</a></li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                    href=blog-full-no-sidebar.html>Blog Full</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog
                                                                        Full No Sidebar</a></li>
                                                                <li class="menu-item"><a
                                                                            href=blog-full-no-sidebar-with-post-format.html>Blog
                                                                        Full No Sidebar With Post Format</a></li>
                                                                <li class="menu-item"><a
                                                                            href=blog-full-right-sidebar-with-frame.html>Blog
                                                                        Full Right Sidebar With Frame</a></li>
                                                                <li class="menu-item"><a
                                                                            href=blog-full-right-sidebar.html>Blog Full
                                                                        Right Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                    href=blog-grid-overlay-no-space.html>Blog Grid
                                                                Overlay</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-grid-overlay.html>Blog
                                                                        Grid Overlay</a></li>
                                                                <li class="menu-item"><a
                                                                            href=blog-grid-overlay-no-space.html>Blog
                                                                        Grid Overlay No Space</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                    href=blog-columns-with-frame.html>Blog Columns</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a
                                                                            href=blog-columns-with-frame.html>Blog
                                                                        Columns With Frame</a></li>
                                                                <li class="menu-item"><a href=blog-columns.html>Blog
                                                                        Columns</a></li>
                                                                <li class="menu-item"><a
                                                                            href=blog-columns-with-frame-post-format.html>Blog
                                                                        Columns With Post Format</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href=about-us.html>About</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=akea-main-menu-search id=akea-top-search><i class="fa fa-search"></i></div>
                            <div class=akea-top-search-wrap>
                                <div class=akea-top-search-close></div>
                                <div class=akea-top-search-row>
                                    <div class=akea-top-search-cell>
                                        <form role=search method=get class=search-form action=#>
                                            <input type=text class="search-field akea-title-font" placeholder=Search...
                                                   value name=s>
                                            <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                            <input type=submit class=search-submit value=Search>
                                            <div class=akea-top-search-close><i class=icon_close></i></div>
                                        </form>
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
        <div class=akea-page-wrapper id=akea-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <?= $content ?>
            </div>
                <?= $this->render('sidebar') ?>

                <div class="gdlr-core-pbf-wrapper " id="div_2207_14">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                     id="div_2207_15">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_11">Our Instagram<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-instagram-item gdlr-core-item-pdb  gdlr-core-item-pdlr">
                                    <div class="gdlr-core-instagram-item-content clearfix">
                                        <div class=" gdlr-core-column-12 gdlr-core-column-first gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js "
                                               href="upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg"
                                               data-lightbox-group=gdlr-core-img-group-2><img
                                                        src="upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg"
                                                        width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js "
                                               href="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg"
                                               data-lightbox-group=gdlr-core-img-group-2><img
                                                        src="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg"
                                                        width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js "
                                               href="upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg"
                                               data-lightbox-group=gdlr-core-img-group-2><img
                                                        src="upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg"
                                                        width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js "
                                               href="upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg"
                                               data-lightbox-group=gdlr-core-img-group-2><img
                                                        src="upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg"
                                                        width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js "
                                               href="upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg"
                                               data-lightbox-group=gdlr-core-img-group-2><img
                                                        src="upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg"
                                                        width=640 height=640 alt></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="akea-footer-wrapper ">
                <div class="akea-footer-container akea-container clearfix">
                    <div class="akea-footer-column akea-item-pdlr akea-column-20">
                        <div id=text-2 class="widget widget_text akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Akea, blogger</span><span
                                        class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <div class=textwidget>
                                <p>23 King Street, 5th Avenue, New York
                                    <br> <span class=gdlr-core-space-shortcode id="span_2207_6"></span>
                                    <br> +1-2355-3345-5
                                    <br> <span class=gdlr-core-space-shortcode id="span_2207_7"></span>
                                    <br> <a href=mailto:call@akeablog.co class="contact_email">call@akeablog.co</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="akea-footer-column akea-item-pdlr akea-column-20">
                        <div id=gdlr-core-custom-menu-widget-2
                             class="widget widget_gdlr-core-custom-menu-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Category</span><span
                                        class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <div class=menu-category-container>
                                <ul id=menu-category class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                                    <li class="menu-item"><a href=#>Technology</a></li>
                                    <li class="menu-item"><a href=#>Photography</a></li>
                                    <li class="menu-item"><a href=#>Travel</a></li>
                                    <li class="menu-item"><a href=#>Fashion</a></li>
                                    <li class="menu-item"><a href=#>Food</a></li>
                                    <li class="menu-item"><a href=#>Trending</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="akea-footer-column akea-item-pdlr akea-column-20">
                        <div id=text-3 class="widget widget_text akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Follow Us</span><span
                                        class=akea-widget-head-divider></span></h3><span class=clear></span>

                            <div class=textwidget>
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                     id="div_2207_16">
                                    <a href=# target=_blank class=gdlr-core-social-network-icon title=facebook
                                       id="a_2207_31" rel="noopener noreferrer">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href=# target=_blank class=gdlr-core-social-network-icon title=pinterest
                                       id="a_2207_32" rel="noopener noreferrer">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a href=# target=_blank class=gdlr-core-social-network-icon title=skype
                                       id="a_2207_33" rel="noopener noreferrer">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                    <a href=# target=_blank class=gdlr-core-social-network-icon title=twitter
                                       id="a_2207_34" rel="noopener noreferrer">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href=# target=_blank class=gdlr-core-social-network-icon title=instagram
                                       id="a_2207_35" rel="noopener noreferrer">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=akea-copyright-wrapper>
                <div class="akea-copyright-container akea-container clearfix">
                    <div class="akea-copyright-left akea-item-pdlr">Copyright 2019 Akea Blog, All Right Reserved</div>
                    <div class="akea-copyright-right akea-item-pdlr">
                        <a href=index.html>Home</a>
                        <a href=about-us.html>About</a>
                        <a href=#>Updates</a>
                        <a href=#>Advertising</a>
                        <a href=contact.html>Contact</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<a href=#akea-top-anchor class="akea-footer-back-to-top-button  akea-with-recent-post-bar "
   id=akea-footer-back-to-top-button><i class="fa fa-angle-up"></i></a>
<div class="akea-footer-recent-post-button " id=akea-footer-recent-post-button><i class=icon_plus></i></div>
<div class="akea-footer-recent-post-bar " id=akea-footer-recent-post-bar>
    <div class=akea-footer-recent-post-bar-close><i class=icon_minus-06></i></div>
    <div class="akea-footer-recent-post-bar-container akea-container clearfix">
        <h3 class="akea-footer-recent-post-bar-title">My New Stories</h3>
        <div class="akea-recent-post-bar-wrap clearfix">
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/post-vr-150x150.jpg alt width=150 height=150 title=post-vr></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/max-bender-580753-unsplash-150x150.jpg alt width=150 height=150
                               title=max-bender-580753-unsplash></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/juja-han-456323-unsplash-150x150.jpg alt width=150 height=150
                               title=juja-han-456323-unsplash></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/yiran-ding-624696-unsplash-150x150.jpg alt width=150 height=150
                               title=yiran-ding-624696-unsplash></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/christopher-burns-271403-unsplash-150x150.jpg alt width=150 height=150
                               title=christopher-burns-271403-unsplash></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/pexels-photo-736166-150x150.jpg alt width=150 height=150
                               title=pexels-photo-736166></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/pexels-photo-871053-150x150.jpg alt width=150 height=150
                               title=pexels-photo-871053></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/pexels-photo-25284-150x150.jpg alt width=150 height=150
                               title=pexels-photo-25284></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/pexels-photo-225227-150x150.jpg alt width=150 height=150
                               title=pexels-photo-225227></a>
            </div>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src=upload/hugues-de-buyer-mimeure-335733-unsplash-150x150.jpg alt width=150 height=150
                               title=hugues-de-buyer-mimeure-335733-unsplash></a>
            </div>
        </div>
    </div>
</div>

<script>
    var zilla_likes = {
        "ajaxurl": ""
    };
</script>
<script>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "#"
    };
</script>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
