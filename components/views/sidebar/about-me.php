<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:05
 */

?>
<?php if(!empty($text)): ?>
<div id=text-4 class="widget widget_text akea-widget">
    <h3 class="akea-widget-title"><span class=akea-widget-head-text>About Me</span><span
            class=akea-widget-head-divider></span></h3><span class=clear></span>
    <div class=textwidget>
        <p><img class="alignnone size-full wp-image-6650" src='<?= Yii::getAlias('@web').'/upload/avatars/'.$text['photo'] ?>' alt="my photo" width='120' style="border-radius: 60px">
            <br>
        <?= substr($text['text'], 0, 250).'...' ?>
        </p>
        <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-transparent gdlr-core-button-with-border"
           href='/main/about-me' target=_blank id="a_2207_10" rel="noopener noreferrer"><span
                class=gdlr-core-content>More about me</span>
            <i class="gdlr-core-pos-right arrow_right"></i></a>
    </div>
</div>
<?php endif; ?>