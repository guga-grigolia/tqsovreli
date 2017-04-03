<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/jquery.min.js',
        'js/jquery.appear.min.js',
        'js/jquery.easing.min.js',
        'js/jquery-cookie.min.js',
        'js/bootstrap.min.js',
        'js/common.min.js',
        'js/jquery.lazyload.min.js',
        'js/jquery.isotope.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/vide.min.js',
        'js/jquery.themepunch.tools.min.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/jquery.flipshow.min.js',
        'js/theme.js',
        'js/view.home.js',
        'js/theme.init.js'
    ];

    public $css = [
        'css/animate.min.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/magnific-popup.min.css',
        'css/theme.css',
        'css/theme-elements.css',
        'css/theme-shop.css',
        'css/font-awesome.min.css',
        'css/skins/default.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
