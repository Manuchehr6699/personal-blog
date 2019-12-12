<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 10.12.2019
 * Time: 22:12
 */
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="row">
    <div class="col-lg-12">

            <h3 id="social_buttons">
    <a href="#" onclick="window.print();"><i class="fa fa-print"></i></a>
    <a class="gdlr-core-social-share-facebook"
       href="https://www.facebook.com/dialog/share?app_id=145634995501895&display=popup&href=<?= $link ?>redirect_uri=<?= urlencode($link)?>" target=_blank >
    <i class="fa fa-facebook"></i>
    </a>
    <a class="gdlr-core-social-share-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($link) ?>&title=<?= $post['title'] ?>" target=_blank >
        <i class="fa fa-linkedin" ></i>
    </a>
    <a class="gdlr-core-social-share-twitter" href="https://twitter.com/intent/tweet?url=<?= urlencode($link)?>" target=_blank id="a_2207_5"  >
        <i class="fa fa-twitter"></i>
    </a>
    <a class="gdlr-core-social-share-email" href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?= urlencode($link)?>" target=_blank id="a_2207_5"  >
        <i class="fa fa-envelope"></i>
    </a>
</h3>
</span>

    </div>
</div>
