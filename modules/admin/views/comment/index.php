<?php

use app\assets\DataTableAssets;


/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
DataTableAssets::register($this);
?>

<div class="comment-index">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data1" class="display table table-bordered table-striped table-hover"
                               style="width:100%">
                            <thead>
                            <tr>

                                <th>Blog</th>
                                <th>Comment</th>
                                <th>Reply</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $item): ?>
                                <?php if ($item['is_published'] == 'no') {
                                    $text = '<i class="fa fa-times"> </i> Unpublished';
                                    $class = 'label label-md label-warning';
                                    $status = 0;
                                } else {
                                    $text = '<i class="fa fa-check"> </i> Published';
                                    $class = 'label label-md label-success';
                                    $status = 1;
                                }
                                ?>
                                <tr>
                                    <td><?= $item['title'] ?></td>
                                    <td><?= $item['text'] ?></td>
                                    <td><textarea cols="25"><?= $item['text'] ?></textarea></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td><?= date('d M Y H:i:s', $item['created_at']) ?></td>
                                    <td>
                                        <span class="<?= $class ?>" id="status" onclick="changeStatus(this)"
                                              data-id="<?= $item['id'] ?>" data-status="<?= $status ?>"><?= $text ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>