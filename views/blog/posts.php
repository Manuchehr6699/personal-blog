<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 06.12.2019
 * Time: 19:43
 */

use yii\widgets\LinkPager;

$this->title = 'Posts';
?>
<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
     id="div_2207_2">
    <div class=gdlr-core-pbf-sidebar-content-inner>
        <div class="row">
            <div class="col-md-12">
                <?php if(!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                        <?php if(!empty($post['photo'])): ?>
                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                            <a href='/blog/post/<?= $post['alias'] ?>' target="_blank">
                                <img src="/upload/blog/<?= $post['photo'] ?>" alt width="1000" height="486" title="<?= $post['title'] ?>">
                            </a>
                        </div>
                        <?php endif; ?>
                        <a href='' class=zilla-likes id=zilla-likes-6611 title="Like this">
                            <span class=zilla-likes-count><?= $post['like_count']+0 ?></span>
                            <span class=zilla-likes-postfix></span>
                        </a>
                    </div>
                    <div class=gdlr-core-blog-full-content-wrap>
                        <div class="gdlr-core-blog-full-head clearfix">
                            <div class=gdlr-core-blog-full-head-right>
                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_4">
                                    <a href="/blog/post/<?= $post['alias'] ?>" ><?= $post['title'] ?></a>
                                </h3>
                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                            <a href="#" title="Posts by Janet Jones" rel="author">Janet Jones</a>
                                    </span>
                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                        <a href="#"><?= date('M d Y', $post['created_at']) ?></a>
                                    </span>
                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                        <a href="#" rel="tag">Travel</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=gdlr-core-blog-content>
                            <?= $post['text'] ?>
                        </div>
                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_4">
                            <span class="gdlr-core-social-share-wrap">
                                <a class="gdlr-core-social-share-facebook" href="#" target=_blank >
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="gdlr-core-social-share-google-plus" href="#" target=_blank >
                                    <i class="fa fa-google-plus" ></i>
                                </a>
                                <a class="gdlr-core-social-share-pinterest" href="#" target=_blank >
                                    <i class="fa fa-pinterest-p" ></i>
                                </a>
                                <a class="gdlr-core-social-share-stumbleupon" href="#" target=_blank >
                                    <i class="fa fa-stumbleupon" ></i>
                                </a>
                                <a class="gdlr-core-social-share-twitter" href="#" target=_blank   id="a_2207_5"  >
                                    <i class="fa fa-twitter" ></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
<!--                    --><?php //echo LinkPager::widget([
//                        'pagination' => $pages,
//                    ])
//                    ?>
<!--                <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr"><span aria-current="page" class="page-numbers current">1</span> <a class="page-numbers" href="page/2/index.html">2</a> <a class="page-numbers" href="page/3/index.html">3</a> <span class="page-numbers dots">…</span> <a class="page-numbers" href="page/8/index.html">8</a>-->
<!--                    <a class="next page-numbers" href="page/2/index.html"></a>-->
<!--                </div>-->
            </div>
            <?php else: ?>
                <h2>Here posts not found...</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
