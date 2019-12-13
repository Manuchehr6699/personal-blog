<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akea-page-wrapper" id="akea-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " id="div_4e10_0">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_4e10_1">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h2 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h1_4e10_0">
                                    <?= Yii::$app->settings->get('Site', 'sitename') ?><br>
                                    Contact
                                    <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_4e10_3" data-skin="White Text">
            <div class="gdlr-core-pbf-background-wrap" id="div_4e10_4"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="White Link" id="gdlr-core-column-1">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_4e10_5">
                            <div class="gdlr-core-pbf-background-wrap" id="div_4e10_6"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-phone" id="i_4e10_0"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_4e10_7">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_4e10_0">Phone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_4e10_8">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_9">
                                            <p style="color: #ffffff;">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_10">
                                            <p><a onclick="javascript void(0)"><?= Yii::$app->params['contact']['phone_number'] ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="White Link" id="gdlr-core-column-2">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_4e10_11">
                            <div class="gdlr-core-pbf-background-wrap" id="div_4e10_12"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-envelope-open-o" id="i_4e10_1"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_4e10_13">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_4e10_1">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_4e10_14">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_15">
                                            <p style="color: #ffffff;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_16">
                                            <p>
                                                <?php
                                                foreach (Yii::$app->params['profiles'] as $item){
                                                    if($item['icon'] == 'envelope'){
                                                        echo '<a href="mailto:'.$item['name'].'" class="contact_email">'.$item['name'].'</a>';
                                                    }
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="White Link" id="gdlr-core-column-3">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_4e10_17">
                            <div class="gdlr-core-pbf-background-wrap" id="div_4e10_18"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon icon_compass_alt" id="i_4e10_2"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_4e10_19">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_4e10_2">Location<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_4e10_20">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_21">
                                            <p style="color: #ffffff;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_22">
                                            <p style="color: #ffffff;">
                                                <?= Yii::$app->params['contact']['city'].', '.
                                                    Yii::$app->params['contact']['country'].' '.
                                                    Yii::$app->params['contact']['address']
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_4e10_23">
            <div class="gdlr-core-pbf-background-wrap" id="div_4e10_24"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " id="div_4e10_25">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_4e10_26">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_4e10_3">
                                                <?= Yii::$app->settings->get('Contact', 'contact_form_title') ?>
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_4e10_27">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <div class="gdlr-core-title-item-title gdlr-core-skin-title  gdlr-core-title-font" id="div_4e10_28">
                                                <?= Yii::$app->settings->get('Contact', 'contact_form_title2') ?>
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if(Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                                    <center><h4><?= Yii::$app->session->getFlash('contactFormSubmitted') ?></h4></center><br><br>
                                <?php endif; ?>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_4e10_29">
                                            <p>
                                                <?= Yii::$app->settings->get('Contact', 'contact_form_description') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <?php $form = ActiveForm::begin() ?>
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <br>
                                                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name*', 'required' => 'true'])->label(false) ?>
                                                    </div>
                                                    <div class="quform-element"><br>
                                                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email*', 'type' => 'email', 'required' => 'true'])->label(false) ?>
                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <?= $form->field($model, 'message')->textarea(['placeholder' => 'Message*', 'required' => 'true'])->label(false) ?>
                                                    </div>
                                                    <!-- Begin Submit button -->
                                                    <div class="quform-submit">
                                                        <div class="quform-submit-inner">
                                                            <button type="submit" class="submit-button" style="background: #990066">
                                                                <span>Send</span>
                                                            </button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                    </div>
                                                </div>
                                            <?php ActiveForm::end() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_4e10_30">
            <div class="gdlr-core-pbf-background-wrap" id="div_4e10_31"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr">
                            <?php foreach (Yii::$app->params['profiles'] as $item): ?>
                            <?php $item['link'] = ($item['icon'] == 'envelope') ? 'mailto:'.$item['link'] : $item['link'] ?>
                                <a href="<?= $item['link'] ?>" target="_blank" class="gdlr-core-social-network-icon"
                                   title="email" id="a_4e10_0">
                                    <i class="fa fa-<?= $item['icon'] ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
