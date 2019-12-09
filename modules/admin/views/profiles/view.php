<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profiles */

$this->title = 'View Profiles';
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view']];
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Social and Research Profiles</h3>
                <?php foreach ($profiles as $profile): $icon = ($profile['icon'] == 'email') ? 'envelope' : $profile['icon'] ?>
                    <button class="btn-social btn-<?= $profile['icon'] ?>" data-container="body" data-toggle="popover" data-placement="top" data-content="<?= $profile['name'].' - '.$profile['description'] ?>" data-original-title="" title="" aria-describedby="popover296353">
                        <i class="fa fa-<?= $icon ?>"></i>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
