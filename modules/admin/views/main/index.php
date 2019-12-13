<?php

use app\assets\DataTableAssets;
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 17:29
 */
$this->title = 'Home page';
DataTableAssets::register($this);
?>

<div class="row">
    <div class="col-lg-4">
        <div class="widget1 bg-flat-iris1">
            <div class="widget-wrapper">
                <i class="fa fa-comment mr-4"></i>
                <div class="right-area">
                    <h3><?= \Yii::$app->view->params['commentCount'] ?></h3>
                    <span>Users comment</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="widget1 bg-flat-green1">
            <div class="widget-wrapper">
                <i class="fa fa-envelope mr-4"></i>
                <div class="right-area">
                    <h3><?= \Yii::$app->view->params['messageCount'] ?></h3>
                    <span>Messages</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="widget1 bg-flat-iris1">
            <div class="widget-wrapper">
                <i class="fa fa-users mr-4"></i>
                <div class="right-area">
                    <h3><?= \Yii::$app->view->params['subcribersCount'] ?></h3>
                    <span>Subcribers</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card customer-details">
            <div class="card-body ">
                <h3 class="card-title">Last Comments</h3>
                <div class="slimScroll">
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
                                    <td class="text-center">
                                        <textarea style="width: 100%;" id="comment_<?= $item['id'] ?>"><?= $item['reply'] ?></textarea>
                                        <button class="btn btn-primary p-2" style="font-size: 12px;" onclick="replyToComment(<?= $item['id'] ?>)"><i class="fa fa-reply"></i> Reply</button>
                                    </td>
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