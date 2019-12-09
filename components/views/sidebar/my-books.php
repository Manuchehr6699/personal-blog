<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:32
 */

?>
<?php if(!empty($data)): ?>
<div id=gdlr-core-instagram-widget-2
     class="widget widget_gdlr-core-instagram-widget akea-widget">
    <h3 class="akea-widget-title">
        <span class=akea-widget-head-text>My Books</span>
        <span class=akea-widget-head-divider></span></h3><span class=clear></span>
    <div class="gdlr-core-instagram-widget clearfix">
        <?php foreach ($data as $item): ?>
        <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
            <a class="gdlr-core-lightgallery gdlr-core-js" href="/upload/book_cover/<?= $item['photo'] ?>"
               data-lightbox-group=gdlr-core-img-group-1>
                <img src='/upload/book_cover/<?= $item['photo'] ?>' width='150' height='150' alt></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>