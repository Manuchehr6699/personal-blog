<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:05
 */

if(!empty($data)):
?>

<div id=gdlr-core-recent-post-widget-2
     class="widget widget_gdlr-core-recent-post-widget akea-widget">
    <h3 class="akea-widget-title"><span
                class=akea-widget-head-text>Popular Post</span><span
                class=akea-widget-head-divider></span></h3><span class=clear></span>
    <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
        <?php foreach ($data as $item): ?>
        <div class="gdlr-core-recent-post-widget clearfix">
            <div class=gdlr-core-recent-post-widget-content>
                <div class=gdlr-core-recent-post-widget-title>
                    <a href='/blog/post/<?= $item['alias'] ?>'><?= $item['title'] ?></a>
                </div>
                <div class=gdlr-core-recent-post-widget-info>
                        <a href="/main/about-me" title="<?= $author['full_name'] ?>" rel=author><?= $author['full_name'] ?></a>
                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                        <p><?= date('M d, Y', $item['created_at']) ?></p>
                    </span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php endif; ?>