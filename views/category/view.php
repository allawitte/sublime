<?php
//echo "<pre>";
//var_dump($category['browser_name']);
//echo "</pre>";
use yii\helpers\Url;
?>
<div class="home home-notmain">
    <div class="home_container">
        <div class="home_background" style="background-image:url(/web/images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><?= $category['browser_name']?><span>.</span></div>
                            <div class="home_text"><p>$category['description']</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Product Sorting -->
                <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    <div class="results">Showing <span><?= $total ?></span> results</div>
                    <div class="sorting_container ml-md-auto">
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Sort by</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "title" }'><span>Name</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach ($catGoods as $item): ?>
                    <div class="product">
                        <div class="product_image"><img src="/web/images/<?= $item['img'] ?>" alt=""></div>
                        <div class="product_extra product_<?= $item['status'] ?>"><a href="/category"><?= $item['status'] ?></a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?=Url::to(['good/index', 'name'=> $item['link_name']]) ?>"><?= $item['name'] ?></a></div>
                            <div class="product_price">$<?= $item['price'] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="product_pagination">
                    <?php
                    //Выводим виджет с пагинацией
                    echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Icon Boxes -->

<div class="icon_boxes">
    <div class="container">
        <div class="row icon_box_row">

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/web/images/icon_1.svg" alt=""></div>
                    <div class="icon_box_title">Free Shipping Worldwide</div>
                    <div class="icon_box_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/web/images/icon_2.svg" alt=""></div>
                    <div class="icon_box_title">Free Returns</div>
                    <div class="icon_box_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="/web/images/icon_3.svg" alt=""></div>
                    <div class="icon_box_title">24h Fast Support</div>
                    <div class="icon_box_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
$this->registerJsFile('@web/js/categories.js', ['depends' => \app\assets\AppAsset::class]);