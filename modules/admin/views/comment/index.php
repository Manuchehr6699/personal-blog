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
                        <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>Comment</th>
                                <th>Blog</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $item): ?>
                                <tr>
                                    <td><?= $item['text'] ?></td>
                                    <td><?= $item['title'] ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td><?= $item['created_at'] ?></td>
                                    <td>
                                        <div class="pretty p-switch p-fill">
                                            <input type="checkbox" />
                                            <div class="state">
                                                <label>
                                                    <?php if($item['is_published'] == 'no'): ?>
                                                        Unpublished
                                                    <?php else: ?>
                                                        Published
                                                    <?php endif; ?>
                                                </label>
                                            </div>
                                        </div>
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
