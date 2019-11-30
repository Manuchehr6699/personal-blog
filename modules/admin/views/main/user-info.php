<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 29.11.2019
 * Time: 22:04
 */

use app\assets\DataTableAssets;

$this->title = 'Users Info';

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
                            <th>User Photo</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($userData)): ?>
                            <?php foreach ($userData as $data): ?>
                            <tr>
                                <td><?= $data['username'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['user_type'] ?></td>
                                <td>
                                    <div class="pretty p-switch p-fill">
                                        <input type="checkbox" />
                                        <div class="state">
                                            <label>
                                                <?php if($data['is_block'] == 0): ?>
                                                    Active
                                                <?php else: ?>
                                                    Blocked (Inactive)
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
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



