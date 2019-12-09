<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:32
 */

?>
<?php if(!empty($data)): ?>
<div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
    <h3 class="akea-widget-title">
        <span class=akea-widget-head-text>Tags</span>
        <span class=akea-widget-head-divider></span>
    </h3>
    <span class=clear></span>
    <div class=tagcloud>
        <?php foreach ($data as $item): ?>
        <a href="#" class="tag-cloud-link tag-link-117 tag-link-position-1" id="a_2207_16"
           aria-label="<?= $item ?>"><?= $item ?></a>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>