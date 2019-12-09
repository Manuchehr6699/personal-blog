<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:30
 */

?>
<?php if(!empty($data)): ?>
<div id=gdlr-core-category-background-widget-2
     class="widget widget_gdlr-core-category-background-widget akea-widget">
    <h3 class="akea-widget-title">
        <span class=akea-widget-head-text>Category</span>
        <span class=akea-widget-head-divider></span>
    </h3>
    <span class=clear></span>
    <ul class=gdlr-core-category-background-widget>
        <?php foreach ($data as $item): ?>
        <li class=gdlr-core-with-bg id="li_2207_0">
            <a href='#'>
                <span class=gdlr-core-category-background-widget-content>
                    <span class=gdlr-core-category-background-widget-title><?= $item['name'] ?></span>
                    <span class=gdlr-core-category-background-widget-count><?= $item['amount'] ?></span>
                </span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>