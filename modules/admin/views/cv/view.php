<?php

use app\modules\admin\models\ModelStatus;


/* @var $this yii\web\View */
/* @var $model app\models\CV */

$this->title = 'Curriculum Vitae';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['']];
echo ModelStatus::getNotify();
?>

<div class="col-lg-12">
    <a href="/admin/cv/index" class="btn btn-primary">
        Show Like Gridview
    </a>
</div><hr>


<div class="col-lg-12">

    <div class="card right-profile-card">
        <div class="card-header alert-default">

        </div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    <?php foreach ($cv as $item): ?>
                        <?php
                        if ($item['status'] == 1) {
                            $text = '<i class="fa fa-check" style="font-size: 10px"></i> Active';
                            $class = 'btn btn-success';
                        } else {
                            $text = '<i class="fa fa-times" style="font-size: 10px"></i> Inactive';
                            $class = 'btn btn-danger';
                        }
                        ?>
                        <div class="work-container" style="border-bottom: 0px">
                            <h3><?= $item['title'] ?></h3>
                            <div style="margin: 0px 20px 20px 0px">
                                <a href="/admin/cv/update?id=<?= $item['id'] ?>" class="btn btn-primary p-2 mr-0"
                                   style="font-size: 13px">
                                    <i class="fas fa-pen" aria-hidden="true" style="font-size: 10px"></i>
                                    Edit
                                </a>
                                <a href="/admin/cv/delete?id=<?= $item['id'] ?>" class="btn btn-warning p-2 mr-0"
                                   data-method="post"
                                   style="font-size: 13px" data-confirm="Are you really want to delete this item?">
                                    <i class="fas fa-trash" aria-hidden="true" style="font-size: 10px"></i>
                                    Delete
                                </a>
                                <button class="<?= $class ?> p-2 mr-0" style="font-size: 13px"
                                        onclick="changeCV(this)" data-status="<?= $item['status'] ?>"
                                        data-id="<?= $item['id'] ?>">
                                    <?= $text ?>
                                </button>
                            </div>
                            <?= $item['text'] ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>