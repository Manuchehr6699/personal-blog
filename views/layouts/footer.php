<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 21:25
 */

?>

<footer>
    <div class="akea-footer-wrapper ">
        <div class="akea-footer-container akea-container clearfix">
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=text-2 class="widget widget_text akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text><?= Yii::$app->settings->get('Site', 'sitename') ?></span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>
                    <div class='textwidget'>
                        <span>
                            <?= Yii::$app->params['contact']['city'].', '.
                                Yii::$app->params['contact']['country'].' '.
                                Yii::$app->params['contact']['address']
                            ?>
                        </span>
                            <br> <span class=gdlr-core-space-shortcode id="span_2207_6"></span>
                            <br> <?= Yii::$app->params['contact']['phone_number'] ?>
                            <br> <span class=gdlr-core-space-shortcode id="span_2207_7"></span>

                            <?php
                            if(!empty(Yii::$app->params['profiles'])) {
                               foreach (Yii::$app->params['profiles'] as $item) {
                                  if ($item['icon'] == 'envelope') {
                                     echo '<br> <a href="mailto:' . $item['name'] . '" class="contact_email">' . $item['name'] . '</a>';
                                  }
                               }
                            }
                             ?>
                    </div>
                </div>
            </div>
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=gdlr-core-custom-menu-widget-2
                     class="widget widget_gdlr-core-custom-menu-widget akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Categories</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>
                    <div class=menu-category-container>
                        <ul id=menu-category class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                            <?php if(!empty(Yii::$app->params['category']))
                            {
                                foreach(Yii::$app->params['category'] as $category): ?>
                                   <li class="menu-item"><a href='admin/posts/<?= $category['name'] ?>'><?= $category['name'] ?></a></li>
                               <?php endforeach;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=text-3 class="widget widget_text akea-widget">
                    <h3 class="akea-widget-title">
                        <span class=akea-widget-head-text>Follow Me</span>
                        <span class=akea-widget-head-divider></span></h3>
                    <span class=clear></span>
                    <div class=textwidget>
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_2207_16">
                            <?php foreach(Yii::$app->params['profiles'] as $item): ?>
                                <a href='<?= $item['link'] ?>' target=_blank class=gdlr-core-social-network-icon title='<?= $item['name'] ?>'
                                   id="a_2207_31" rel="noopener noreferrer">
                                    <i class="fa fa-<?= $item['icon'] ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=akea-copyright-wrapper>
        <div class="akea-copyright-container akea-container clearfix">
            <div class="akea-copyright-left akea-item-pdlr">Copyright <?= date('Y').' '.Yii::$app->settings->get('Site', 'sitename') ?>, All Right Reserved.</div>
            <div class="akea-copyright-right akea-item-pdlr">
                <a href='/'>Home</a>
                <a href='/blog/posts'>Posts</a>
                <a href='/main/about-me/'>About</a>
                <a href='/main/contact'>Contact</a>
                <a href='/book/my-books-list'>My Books</a>
            </div>
        </div>
    </div>
</footer>
