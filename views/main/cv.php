<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 06.12.2019
 * Time: 19:30
 */
$this->title = 'CV';
?>
<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
     id="div_2207_2">
    <div class=gdlr-core-pbf-sidebar-content-inner>
        <div class="row">
            <div class="col-md-12">
                <?php if(!empty($data)): ?>
                   <?php if(Yii::$app->controller->action->id == 'cv'): ?>
                        <span style="font-size: 16px;">You can download PDF versions of my CV here.<br>
                                <a download="Complete_CV" title="Get PDF file" href="/upload/files/<?= $data[0]['cv_file'] ?>"><i class="fa fa-file"></i> Download</a>
                            </span>
                        <hr>
                   <?php endif; ?>
                    <h3>CV</h3>

                    <?php foreach ($data as $text): ?>
                        <?= $text['text'] ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?= $this->render('/layouts/sharing_buttons') ?>
            </div>
        </div>
    </div>
</div>

