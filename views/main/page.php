<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 03.12.2019
 * Time: 16:40
 */

$this->title = $content['title'];

?>

<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
     id="div_2207_2">
   <div class=gdlr-core-pbf-sidebar-content-inner>
      <div class="row">
         <div class="col-md-12">
            <?php if(!empty($content)): ?>
            <h4><?= $content['title'] ?></h4>
            <?= $content['text'] ?>
         </div>
         <?php else: ?>
      </div>
      <h2>Here posts not found...</h2>
      <?php endif; ?>
   </div>
</div>
</div>