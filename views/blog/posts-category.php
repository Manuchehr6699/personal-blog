<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 06.12.2019
 * Time: 19:43
 */

use yii\widgets\LinkPager;

$this->title = 'Posts by category | '.$category;


?>
<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
     id="div_2207_2">
    <div class=gdlr-core-pbf-sidebar-content-inner>
        <div class="row">
            <div class="col-md-12">
                <?php if(!empty($posts)): ?>
                    <h5>Category: <?= $category ?></h5>
                    <?php foreach ($posts as $post): ?>
                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">

                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                        <?php if(!empty($post['photo'])): ?>
                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                            <a href='/blog/post/<?= $post['alias'] ?>' target="_blank">
                                <img src="/upload/blog/<?= $post['photo'] ?>" alt width="1000" height="486" title="<?= $post['title'] ?>">
                            </a>
                        </div>
                        <?php endif; ?>
                        <a href='' class='zilla-likes' id='<?= $post['id'] ?>' title="Like this">
                            <span class='zilla-likes-count'><?= $post['like_count']+0 ?></span>
                            <span class='zilla-likes-postfix'></span>
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
                                            <a href="/" title="Posts by Abel Polese" rel="author">Posted by Abel Polese</a>
                                    </span>
                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                        <a href="#"><?= date('F d, Y', $post['created_at']) ?></a>
                                    </span>
                                    <?php
                                        $tags = unserialize($post['tags']); echo 'Tags:';
                                        foreach ($tags as $tag){
                                    ?>
                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                        <a href="/blog/posts-by-tag/<?= $tag ?>" rel="tag"><?= $tag ?></a>
                                    </span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class=gdlr-core-blog-content>
                            <?= $post['text'] ?>
                        </div>
                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_4">
                            <span class="gdlr-core-social-share-wrap">
                                <?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
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
                            </span>
                        </div>
                    </div>
                </div>
                    <?php endforeach;  ?>

                   <?php
                        echo LinkPager::widget([
                        'pagination' => $pages,
                        'options' => [
                            'tag' => 'div',
                            'class' => 'gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlrr',
                            'style' => 'margin-bottom: 50px',
                            'id' => 'paginate'

                        ],
                        'linkOptions' => ['class' => 'page-numbers'],
                        'activePageCssClass' => 'active',
//                        'disabledPageCssClass' => 'page-numbers',
                   ])
                   ?>
            </div>
            <?php else: ?>
                <h2>Here posts not found...</h2>
            <?php endif; ?>
        </div>
    </div>
</div>