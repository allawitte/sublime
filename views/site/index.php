<?php

/* @var $this yii\web\View */

$this->title = 'Sublime';
use yii\helpers\Url;
//echo "<pre>";
//var_dump($lastGoods);
//echo "</pre>";
?>
    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="owl-item home_slider_item">
                        <div class="home_slider_background"
                             style="background-image:url(/web/images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content" data-animation-in="fadeIn"
                                             data-animation-out="animate-out fadeOut">
                                            <div class="home_slider_title">A new Online Shop experience.</div>
                                            <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed
                                                viverra velit venenatis fermentum luctus.
                                            </div>
                                            <div class="button button_light home_button"><a href="/category">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>


            </div>

        </div>
    </div>

    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background" style="background-image:url(/web/images/avds_small.jpg)"></div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="/web/images/discount.png" alt="">
                        <div>
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Discount</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title"><?= $categories[0]['browser_name']?></div>
                        <div class="avds_link"><a href="<?= Url::to(['category/view', 'id'=> $categories[0]['cat_name']])?>">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image:url(/web/images/avds_large.jpg)"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title"><?= $categories[1]['browser_name']?></div>
                        <div class="avds_text"><?= $categories[1]['description']?></div>
                        <div class="avds_link avds_link_large"><a href="<?= Url::to(['category/view', 'id'=> $categories[1]['cat_name']])?>">See More</a></div>
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

                    <div class="product_grid">

                        <!-- Product -->
                        <?php foreach ($lastGoods as $item): ?>
                            <div class="product">
                                <div class="product_image">
                                    <a href="<?=Url::to(['good/index', 'name'=> $item['link_name']]) ?>">
                                    <img src="/web/images/<?= $item['img'] ?>"  alt="<?= $item['name'] ?>">
                                    </a>
                                </div>
                                <div class="product_extra product_<?= $item['status'] ?>"><a
                                            href="<?=Url::to(['good/index', 'name'=> $item['link_name']]) ?>"><?= $item['status'] ?></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_title">
                                        <a href="<?=Url::to(['good/index', 'name'=> $item['link_name']]) ?>"><?= $item['name'] ?></a>
                                    </div>
                                    <div class="product_price">$<?= $item['price'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Ad -->

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(/web/images/avds_xl.jpg)"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title"><?= $categories[2]['browser_name'] ?></div>
                            <div class="avds_text"><?= $categories[2]['description'] ?></div>
                            <div class="avds_link avds_xl_link">
                                <a href="<?= Url::to(['category/view', 'id' => $categories[2]['cat_name']]) ?>">See
                                    More</a></div>
                        </div>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="/web/images/icon_2.svg" alt=""></div>
                        <div class="icon_box_title">Free Returns</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="/web/images/icon_3.svg" alt=""></div>
                        <div class="icon_box_title">24h Fast Support</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
$this->registerJsFile('@web/js/custom.js', ['depends' => \app\assets\AppAsset::class]);
?>