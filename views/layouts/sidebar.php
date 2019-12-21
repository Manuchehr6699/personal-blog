<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 21.11.2019
 * Time: 15:21
 */

use app\components\AboutMe;
use app\components\Categories;
use app\components\FollowMe;
use app\components\MyBooks;
use app\components\PopularPost;
use app\components\Tags;

?>

<div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  akea-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height"
     data-skin="Blog List" id="div_2207_9">
    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        <?php if (Yii::$app->controller->action->id != 'about-me' && Yii::$app->controller->action->id != 'cv'): ?>
            <?php
            $dependency = [
                'class' => 'yii\caching\DbDependency',
                'sql' => 'SELECT MAX(updated_at) FROM about_me',
            ];
            if ($this->beginCache('AboutMe', ['dependency' => $dependency])) {
                echo AboutMe::widget();
                $this->endCache();
            }
            ?>
        <?php endif; ?>
        <?php
        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT COUNT(*) FROM profiles',
        ];
        if ($this->beginCache('FollowMe', ['dependency' => $dependency])) {
            echo FollowMe::widget();
            $this->endCache();
        }
        ?>
        <h6>Follow me on twitter</h6>
        <div style="height: 450px; overflow-y: auto; margin: 10px 0 10px 0">

        <a class="twitter-timeline"
           href="https://twitter.com/abiquitous">
            Abel Polese @abiquitous</a>

        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
        </script>
        </div>
        <?php
        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT COUNT(*) FROM blog',
        ];
        if($this->beginCache('PopularPosts', ['dependency' => $dependency])) {
            echo PopularPost::widget();
            $this->endCache();
        }

        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT COUNT(*) FROM blog_category',
        ];

        if($this->beginCache('Categories', ['dependency' => $dependency])) {
            echo Categories::widget();
            $this->endCache();
        }
        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT COUNT(*) FROM blog_category',
        ];

        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT MAX(updated_at) FROM blog',
        ];

        if($this->beginCache('Tags', ['dependency' => $dependency])) {
            echo Tags::widget();
            $this->endCache();
        }

        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT COUNT(*) FROM my_books',
        ];

        if($this->beginCache('MyBooks', ['dependency' => $dependency])) {
            echo MyBooks::widget();
            $this->endCache();
        }
        ?>
    </div>
</div>

