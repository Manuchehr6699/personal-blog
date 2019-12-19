<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.12.2019
 * Time: 17:16
 */

use yii\widgets\ActiveForm;

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
        <div class="row">
            <div class="col-md-12">
                <div id="comments" class="akea-comments-area">
                    <div class="akea-comments-title ">Comments <?php if(!empty($comments_list)) echo '('.count($comments_list).')' ?></div>
                    <?php if(!empty($comments_list)): ?>
                    <ol class="comment-list">
                        <?php foreach($comments_list as $comment): ?>
                        <li class="comment even thread-even depth-1" id="li-comment-114">
                            <article id="comment-114" class="comment-article">
                                <div class="comment-body">
                                    <header class="comment-meta">
                                        <div class="comment-author akea-title-font"><?= $comment['name'] ?></div>
                                        <div class="comment-time akea-info-font">
                                            <a href="">
                                                <time datetime="<?= date('F d, Y H:i:s') ?>"> <?= date('F d, Y H:i:s') ?> </time>
                                            </a>
                                        </div>
                                    </header>
                                    <section class="comment-content">
                                        <p><strong><?= $comment['name'].':</strong> '.$comment['text'] ?></p>
                                        <p>Replied by <?= $comment['username'].': '.$comment['reply'] ?></p>
                                    </section>
                                </div>
                            </article>
                        </li>
                        <?php endforeach; ?>
                    </ol>
                    <?php endif; ?>
                    <div id="respond" class="comment-respond">
                        <h4 id="reply-title" class="comment-reply-title akea-content-font">Leave a Comment</h4>
                        <?php if(Yii::$app->session->hasFlash('success_saved')): ?>
                            <h4 id="reply-title" class="comment-reply-title akea-content-font" style="color: green"><?= Yii::$app->session->getFlash('success_saved') ?></h4>
                        <?php endif; ?>
                       <?php if(Yii::$app->session->hasFlash('error_saved')): ?>
                           <h4 id="reply-title" class="comment-reply-title akea-content-font text-success" style="color: red"><?= Yii::$app->session->getFlash('error_saved') ?></h4>
                       <?php endif; ?>
                        <?php $form = ActiveForm::begin(['id' => 'commentform', 'class' => 'comment-form']) ?>
                            <div class="comment-form-comment">
                                <?= $form->field($commentModel, 'text')
                                    ->textarea(['id' => 'comment', 'cols' => '45', 'rows' => '8',
                                        'required' => 'true', 'placeholder' =>'Comment*'])->label(false) ?>
                            </div>
                            <div class="akea-comment-form-author">
                               <?= $form->field($commentModel, 'name')
                                   ->textInput(['id' => 'author', 'required' => 'true', 'placeholder' =>'Name*', 'size' => '30'])->label(false) ?>
                            </div>
                            <div class="akea-comment-form-email">
                               <?= $form->field($commentModel, 'email')
                                   ->textInput(['id' => 'email',  'required' => 'true', 'placeholder' =>'Email*', 'size' => '50'])->label(false) ?>
                            </div>
                            <div class="akea-comment-form-url">
                               <?= $form->field($commentModel, 'web')
                                   ->textInput(['id' => 'url',  'placeholder' =>'Website', 'size' => '50'])->label(false) ?>
                            </div>
                                <?= $form->field($commentModel, 'blog_id')
                                ->hiddenInput(['id' => 'blog_id', 'value' => $post['id']])->label(false) ?>
                            <div class="clear"></div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" style="background-color: #663366">
                            </p>
<!--                        <form action="#" method="post" id="commentform" class="comment-form" novalidate="">-->
<!--                            <div class="comment-form-comment">-->
<!--                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment*"></textarea>-->
<!--                            </div>-->
<!--                            <div class="akea-comment-form-author">-->
<!--                                <input id="author" name="author" type="text" value="" placeholder="Name*" size="30" aria-required="true">-->
<!--                            </div>-->
<!--                            <div class="akea-comment-form-email">-->
<!--                                <input id="email" name="email" type="text" value="" placeholder="Email*" size="30" aria-required="true">-->
<!--                            </div>-->
<!--                            <div class="akea-comment-form-url">-->
<!--                                <input id="url" name="url" type="text" value="" placeholder="Website" size="30">-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                            <p class="form-submit">-->
<!--                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" style="background-color: #663366">-->
<!--                            </p>-->
<!--                        </form>-->
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
