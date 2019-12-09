<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 17:16
 */
$this->title = $post['title'];
?>
<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
     id="div_2207_2">
    <div class=gdlr-core-pbf-sidebar-content-inner>
        <div class="row">
            <div class="col-md-12">
                <?php if(!empty($post)): ?>
                    <h3><?php echo $post['title'] ?></h3>
                        <?php if(!empty($post['photo'])): ?>
                            <center><img src="/upload/blog/<?= $post['photo'] ?>"></center>
                        <?php endif; ?>
                        <?php echo $post['text'] ?>
                <?php else: ?>
                    <center><h3><?= Yii::$app->settings->get('Site', 'empty_result') ?></h3></center>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
