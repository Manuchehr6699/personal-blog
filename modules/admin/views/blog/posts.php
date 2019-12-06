<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 05.12.2019
 * Time: 20:15
 */
$this->title = 'Posts';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['#']];

?>

<?php if (!empty($posts)): ?>
<div class="col-lg-12">
    <a href="/admin/blog/index" class="btn btn-primary">
        Show Like Gridview
    </a>
</div><hr>
<div class="row">
    <?php foreach ($posts as $post): ?>
    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top" src="/upload/blog/<?= $post['photo'] ?>" alt="Image post">
            <div class="card-body">
                <h5 class="card-heading"><?= $post['title'] ?></h5>
                <p class="card-text"><?= substr($post['text'], 0, 100) ?></p>
                <a href="<?= '/admin/blog/view?id='.$post['id'] ?>" target="_blank" class="btn btn-block" style="background: #990066; color: #ffffff">Read more</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php else: ?>
    <center><h2>Here is not any posts!</h2></center>
<?php endif; ?>
