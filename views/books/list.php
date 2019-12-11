<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 10.12.2019
 * Time: 23:31
 */

if(!empty($data)):
?>

<div class="gdlr-core-page-builder-body">
    <div class="gdlr-core-pbf-section">
        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image" id="div_8565_0">
                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                        <?php foreach ($data as $item): ?>
                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 ">
                            <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                <div class="gdlr-core-blog-modern-inner">
                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image"><img src="/upload/book_cover/<?= $item['photo'] ?>" alt="" width="700" height="940" title="juja-han-456323-unsplash"></div>
                                    <div class="gdlr-core-blog-modern-content  gdlr-core-center-align" id="div_8565_1">
                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_8565_0">
                                            <a href="/books/details?id=<?= $item['id'] ?>" target="_blank">
                                                <?= $item['name'] ?>
                                            </a>
                                        </h3>
                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                <a href="/books/details?id=<?= $item['id'] ?>" target="_blank" title="<?= $item['author'] ?>" rel="author"><?= $item['author'] ?>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
<!--                    <div class="gdlr-core-load-more-wrap gdlr-core-js gdlr-core-center-align gdlr-core-item-pdlr" data-ajax="gdlr_core_post_ajax"><a href="#" class="gdlr-core-load-more gdlr-core-button-color" data-ajax-name="paged" data-ajax-value="2">Load More</a></div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>