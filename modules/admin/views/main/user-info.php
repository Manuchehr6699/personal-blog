<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 29.11.2019
 * Time: 22:04
 */

use app\assets\DataTableAssets;

$this->title = 'Users Info';
$this->params['breadcrumbs'][] = $this->title;
DataTableAssets::register($this);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Users Info</h5>
                <div class="table-responsive-lg">
                    <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Username</th>
<!--                            <th>User Photo</th>-->
                            <th>User Password</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($userData)): ?>
                            <?php foreach ($userData as $data): ?>
                                <?php
                                if ($data['is_block'] == 0) {
                                    $text = '<i class="fa fa-check"> </i> Active';
                                    $class = 'label label-md label-success';
                                    $status = 0;
                                } else {
                                    $text = '<i class="fa fa-times"> </i> Blocked';
                                    $class = 'label label-md label-warning';
                                    $status = 1;
                                }
                                ?>
                                <tr>
                                    <td><?= $data['username'] ?></td>
<!--                                    <td><img src="/upload/avatars/--><?//= $data['photo'] ?><!--"></td>-->
                                    <td class="text-center">
                                        <input type="password" id="password_<?= $data['user_id'] ?>">
                                        <button class="btn btn-primary p-2" style="font-size: 12px;" onclick="resetPassword(<?= $data['user_id'] ?>)"><i class="fa fa-refresh"></i> Reset</button>
                                    </td>
                                    <td><?= $data['email'] ?></td>
                                    <td><?= $data['user_type'] ?></td>
                                    <td>
                                        <span class="<?= $class ?>" id="status" onclick="changeUserStatus(this)"
                                              data-id="<?= $data['user_id'] ?>" data-status="<?= $status ?>"><?= $text ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>

