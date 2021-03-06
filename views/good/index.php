<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'sublime | '.$good['name'];
?>
<div class="home home-notmain">
    <div class="home_container">
        <div class="home_background" style="background-image:url(/web/images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><?= $good['name'] ?><span>.</span></div>
                            <div class="home_text"><p><?= $good['descr'] ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details -->

<div class="product_details">
    <div class="container">
        <div class="row details_row">

            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="details_image">
                    <div class="details_image_large"><img src="/web/images/<?= $good['img'] ?>"
                                                          alt="<?= $good['name'] ?>">
                        <div class="product_extra product_<?= $good['status'] ?>"><a
                                    href="<?= Url::to(['category/view', 'id' => $good['category']]) ?>"><?= $good['status'] ?></a>
                        </div>
                    </div>
                    <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        <div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img
                                    src="/web/images/details_1.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_2.jpg"><img
                                    src="/web/images/details_2.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_3.jpg"><img
                                    src="/web/images/details_3.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_4.jpg"><img
                                    src="/web/images/details_4.jpg" alt=""></div>
                    </div>
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-6">
                <div class="details_content">
                    <div class="details_name"><?= $good['name'] ?></div>
                    <?php if ($good['discount']): ?>
                        <div class="details_discount">$<?= $good['discount'] ?></div>
                    <? endif; ?>
                    <div class="details_price">$<?= $good['price'] ?></div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Availability:</div>
                        <span>In Stock</span>
                    </div>
                    <div class="details_text">
                        <p><?= $good['descr'] ?></p>
                    </div>

                    <!-- Product Quantity -->
                    <div class="product_quantity_container">
                        <div class="product_quantity clearfix">
                            <span>Qty</span>
                            <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                            <div class="quantity_buttons">
                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                            class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="button cart_button"><a href="#" data-id="<?= $good['id'] ?>"
                                                           class="product-button__add">Add to cart</a></div>
                    </div>

                    <!-- Share -->
                    <div class="details_share">
                        <span>Share:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row description_row">
            <div class="col">
                <div class="description_title_container">
                    <div class="description_title">Description</div>
                </div>
                <div class="description_text">
                    <p><?= $good['descr'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="products_title">Related Products</div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">
                    <?php foreach ($related as $item): ?>
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="/web/images/<?= $item['img'] ?>" alt=""></div>
                            <div class="product_extra product_<?= $item['status'] ?>"><a href="<?= Url::to(['category/view', 'id' => $item['category']]) ?>"><?= $item['status'] ?></a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="<?= Url::to(['good/index', 'name' => $item['link_name']]) ?>"><?= $item['name'] ?></a></div>
                                <div class="product_price">$<?= $item['price'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('@web/js/product.js', ['depends' => \app\assets\AppAsset::class]);
?>
