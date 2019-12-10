<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 09.12.2019
 * Time: 21:30
 */
use app\assets\DataTableAssets;

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
DataTableAssets::register($this);

?>

<div class="row">
    <div class="col-md-12">
        <h2>
            User Messages From Contact Page
        </h2>
        <p>Your  answer will be sent to the user's mail</p>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data1" class="display table table-bordered table-striped table-hover"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Answer</th>
                            <th>Post Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($messages as $item): ?>
                            <?php if ($item['status'] == 1) {
                                $text = '<i class="fa fa-check"> </i> Replyed';
                                $class = 'label label-md label-success';
                                $status = 1;
                            }else{
                                $text = '<i class="fa fa-times"> </i> Pending';
                                $class = 'label label-md label-warning';
                                $status = 0;
                            }
                            ?>
                            <tr>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['message'] ?></td>
                                <td class="text-center">
                                    <textarea style="width: 100%;" id="message_<?= $item['id'] ?>"><?= $item['reply'] ?></textarea>
                                    <button class="btn btn-primary p-2" style="font-size: 12px;" onclick="answerToMessage(<?= $item['id'] ?>)"><i class="fa fa-reply"></i> Reply</button>
                                </td>
                                <td><?= date('d M Y H:i:s', $item['created_at']) ?></td>
                                <td>
                                  <span class="<?= $class ?>" id="status"
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
<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>