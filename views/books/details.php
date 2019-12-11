<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 10.12.2019
 * Time: 23:31
 */
$this->title = 'Book Details | '.$data['name'];
if(!empty($data)):
?>


    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" id="div_6ed7_0" style="min-height: 3401px;">
        <div class="gdlr-core-pbf-background-wrap" id="div_6ed7_1"></div>
        <div class="gdlr-core-pbf-sidebar-content-inner">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" id="div_6ed7_2">
                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                        <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left" id="div_6ed7_3">
                            <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                            </div>
                            <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                <div class="gdlr-core-blog-full-head clearfix">
                                    <div class="gdlr-core-blog-full-head-right">
                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_6ed7_0"><a href="#"><?= $data['name'] ?></a></h3>
                                       
                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                <img alt="" src="upload/avatar.jpg" class="avatar avatar-50 photo" height="50" width="50">
                                                <a href="#" title="Posts by Jane Smith" rel="author">Author: <?= $data['author'] ?></a>
                                            </span>
                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                <a href="#">Publish Year: <?= $data['publish_year'] ?></a></span>
                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                <a href="#" rel="tag">Category: <?= $data['category'] ?></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-blog-content">
                                        <img src="/upload/book_cover/<?= $data['photo'] ?>" style="width: 150px; float: left; margin-right: 20px;">
                                    HardCover: <?= $data['count_page'] ?> pages</br>
                                    Publisher: <?= $data['publisher'] ?></br>
                                    Publish Year: <?= $data['publish_year'] ?></br>
                                    Author: <?= $data['author'] ?></br>
                                    Language: <?= $data['language'] ?></br>

                                </div>
                                <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_6ed7_4">
                                    <a class="gdlr-core-social-share-facebook"
                                       href="https://www.facebook.com/dialog/share?app_id=145634995501895&display=popup&href=<?= $link ?>redirect_uri=<?= urlencode($link)?>" target=_blank >
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="gdlr-core-social-share-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($link) ?>&title=<?= $post['title'] ?>" target=_blank >
                                        <i class="fa fa-linkedin" ></i>
                                    </a>
                                    <!--                                <a class="gdlr-core-social-share-pinterest" href="http://pinterest.com/pin/create/button/?url=--><?//= urlencode($link) ?><!--" target=_blank >-->
                                    <!--                                    <i class="fa fa-pinterest-p" ></i>-->
                                    <!--                                </a>-->
                                    <a class="gdlr-core-social-share-twitter" href="https://twitter.com/intent/tweet?url=<?= urlencode($link)?>" target=_blank id="a_2207_5"  >
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="gdlr-core-social-share-email" href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?= urlencode($link)?>" target=_blank id="a_2207_5"  >
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                                <div class="gdlr-core-blog-content" style="margin-top: 40px">
                                    <?= $data['description'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>