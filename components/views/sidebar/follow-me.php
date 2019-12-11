<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 16:05
 */

use app\modules\admin\models\ModelStatus;
use yii\widgets\ActiveForm;

?>

<div id=text-7 class="widget widget_text akea-widget">
    <div class=textwidget>
        <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" id="div_2207_10">
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_11">
                <div class="gdlr-core-title-item-title-wrap ">
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_9">
                        Follow Me
                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                    </h3>
                    <?php if(\Yii::$app->session->hasFlash('saved')): ?>
                        <h6 class="text-center m-2" style="color: green"><?= Yii::$app->session->getFlash('saved') ?></h6>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($text)): ?>
            <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align" id="div_2207_12">
                <?php foreach($text as $item): ?>
                <a href='<?= $item['link'] ?>' target=_blank class=gdlr-core-social-network-icon title='<?= $item['name'] ?>' id="a_2207_11" rel="noopener noreferrer">
                    <i class="fa fa-<?= $item['icon'] ?>"></i>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <br><span class=gdlr-core-space-shortcode id="span_2207_3"></span>
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_13">
                <div class="gdlr-core-title-item-title-wrap ">
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_10">
                        Newsletter
                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                    </h3>
                </div>
            </div>
            Fill your email below to subscribe to my posts
            <span class=gdlr-core-space-shortcode id="span_2207_4"></span>
            <br>
            <div class="tnp tnp-subscription-minimal ">
                <?php $form = ActiveForm::begin(['action' => '/main/subcribe']) ?>
                <?= $form->field($model, 'email')->textInput(['type' => 'email', 'class' => 'tnp-email', 'placeholder' => 'Email'])->label(false) ?>
                    <input class="tnp-submit" type="submit" value="Subscribe" style="background: #990066">
                <?php ActiveForm::end() ?>
            </div>
            <span class=gdlr-core-space-shortcode id="span_2207_5"></span>
        </div>
    </div>
</div>
