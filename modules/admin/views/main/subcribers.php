<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 09.12.2019
 * Time: 22:14
 */

use app\assets\DataTableAssets;

$this->title = 'Subcribers';
$this->params['breadcrumbs'][] = $this->title;

DataTableAssets::register($this);

?>

<div class="row">
    <div class="col-md-12">
        <h2>
            Subcribers List
        </h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data1" class="display table table-bordered table-striped table-hover"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Request Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $item): ?>
                            <?php if ($item['status'] == 1) {
                                $text = '<i class="fa fa-check"> </i> Active';
                                $class = 'label label-md label-success';
                                $status = 1;
                            }else{
                                $text = '<i class="fa fa-times"> </i> Intactive';
                                $class = 'label label-md label-warning';
                                $status = 0;
                            }
                            ?>
                            <tr>
                                <td><?= $item['email'] ?></td>

                                <td><?= date('d M Y H:i:s', $item['created_at']) ?></td>
                                <td>
                                  <span class="<?= $class ?>" id="status" onclick="changeSubcriberStatus(this)"
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