<?php
/* @var $this yii\web\View */
$this->title = 'categories';
use yii\helpers\Url;
?>
<div class="categories">
    <div class="row">

        <?php foreach ($categories as $id => $item): ?>
            <div class="card mb-3 col-12">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/web/images/<?= $item['img'] ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8 card-over">
                        <div class="card-body">
                            <h2 class="card-title"><?= $item['cat_name'] ?></h2>
                            <p class="card-text"><?= $item['description'] ?></p>
                        </div>
                        <div class="card-footer-right">
                            <a href="<?= Url::to(['category/view', 'id'=> $item['cat_name']])?>" class="btn btn-outline-warning">Shop now</a>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
