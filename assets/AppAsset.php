<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap4/bootstrap.min.css',
        'web/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'web/plugins/OwlCarousel2-2.2.1/owl.carousel.css',
        'web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
        'web/plugins/OwlCarousel2-2.2.1/animate.css',
        'css/media.css',
        'css/style.css',
    ];
    public $js = [
        //'js/jquery-3.2.1.min.js',
        'js/popper.js',
        'js/bootstrap.min.js',
        'web/plugins/greensock/TimelineMax.min.js',
        'web/plugins/greensock/TweenMax.min.js',
        'web/plugins/greensock/TimelineMax.min.js',
        'web/plugins/scrollmagic/ScrollMagic.min.js',
        'web/plugins/greensock/animation.gsap.min.js',
        'web/plugins/greensock/ScrollToPlugin.min.js',
        'web/plugins/OwlCarousel2-2.2.1/owl.carousel.js',
        'web/plugins/Isotope/isotope.pkgd.min.js',
        'web/plugins/easing/easing.js',
        'web/plugins/parallax-js-master/parallax.min.js',
//        'js/custom.js',
        //'js/cart.js',
//        'js/categories.js',
//        'js/checkout.js',
//        'js/contact.js',
//        'js/custom.js',
//        'js/product.js',
//

    ];

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
