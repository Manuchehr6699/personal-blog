<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 10.12.2019
 * Time: 23:22
 */

?>
<?php if(!empty($data)): ?>
<div class="akea-footer-recent-post-button akea-active" id="akea-footer-recent-post-button"><i class="icon_plus"></i></div>
<div class="akea-footer-recent-post-bar" id=akea-footer-recent-post-bar style="display: none;">
    <div class=akea-footer-recent-post-bar-close><i class=icon_minus-06></i></div>
    <div class="akea-footer-recent-post-bar-container akea-container clearfix">
        <h3 class="akea-footer-recent-post-bar-title">My Books</h3>
        <div class="akea-recent-post-bar-wrap clearfix">
            <?php foreach ($data as $item): ?>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href='/books/details?id=<?= $item['id'] ?>' target="_blank"><img src='/upload/book_cover/<?= $item['photo'] ?>' alt width=150 height=150 title=post-vr></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>