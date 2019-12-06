<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'View', 'url' => ['#']];

?>
<?= ModelStatus::getNotify() ?>
<div class="row">

    <div class="col-lg-3 offset-4">
        <div class="card">
            <div class="card-body">
                <div class="personal-info">
                    <h3 class="text-center">Contacts</h3>
                    <ul class="personal-list">
                        <li><strong><span>Country:</span></strong> <?= $contact['country'] ?></li>
                        <li><strong><span>City: </span></strong> <?= $contact['city'] ?></li>
                        <li><strong><span>Address: </span></strong> <?= $contact['address'] ?></li>
                        <li><strong><span>Phone Number: </span></strong> <?= $contact['phone_number'] ?></li>
                    </ul>
                </div>
               <?php
               if ($contact['status'] == 1) {
                  $text = '<i class="fa fa-check" style="font-size: 10px"></i> Active';
                  $class = 'btn btn-success';
               } else {
                  $text = '<i class="fa fa-times" style="font-size: 10px"></i> Inactive';
                  $class = 'btn btn-danger';
               }
               ?>
                <a href="/admin/contact/update?id=<?= $contact['status'] ?>" class="btn btn-primary"><i class="fa fa-pen"></i> Edit</a>
                <button class="<?= $class ?>" data-status="<?= $contact['status'] ?>" data-id="<?= $contact['id'] ?>" onclick="changeContact(this)"><?= $text ?></button>
            </div>

        </div>
    </div>
</div>
<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>