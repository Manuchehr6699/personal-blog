<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 29.11.2019
 * Time: 22:22
 */
use app\assets\DataTableAssets;

$this->title = 'Users Login Details';
$this->params['breadcrumbs'][] = $this->title;
DataTableAssets::register($this);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Users Login Details</h5>
                <div class="table-responsive-lg">
                    <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>User Photo</th>
                            <th>Login Time</th>
                            <th>Logout Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($data)): ?>
                            <?php foreach ($data as $data2): ?>
                                <tr>
                                    <td><?= $data2['username'] ?></td>
                                    <td><?= $data2['email'] ?></td>
                                    <td><?= $data2['login_at'] ?></td>
                                    <td><?= $data2['logout_at'] ?></td>
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
