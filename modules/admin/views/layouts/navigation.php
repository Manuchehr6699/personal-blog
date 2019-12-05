<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 17:15
 */

?>

<!-- navigation -->
<div class="main-heading">
    <nav class="top-nav  navbar-collapse collapse" id="top-nav-list">
        <!-- BEGIN: nav-content -->
        <?php
        $dependency = [
            'class' => 'yii\caching\DbDependency',
            'sql' => 'SELECT COUNT(*) FROM back_menu',
        ];
        if($this->beginCache('AdminMenu', ['dependency' => $dependency])){
            echo $this->params['AdminMenu'];
            $this->endCache();
        }
        ?>
    </nav>
</div>
<!-- end navigation -->
