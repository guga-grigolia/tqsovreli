<?php

use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
use yii\bootstrap\Nav;
use yii\helpers\Url;


/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php');

?>
<?php
//NavBar::begin([
//    'brandLabel' => Yii::$app->name,
//    'brandUrl' => Yii::$app->homeUrl,
//    'options' => [
//        'class' => 'navbar-inverse navbar-fixed-top',
//    ],
//]); ?>

<?php // echo \yii\bootstrap\Nav::widget(['options' => ['class' => 'nav nav-pills'],
//                        'items' => [
//                            ['label' => 'Home', 'url' => ['/site/index']]
//                        ]]); ?>
<?php //NavBar::end(); ?>
    <header id="header"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="index.html">
                                <h2>TQsovreli</h2>
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="header-social-icons social-icons hidden-xs">
                                    <li class="social-icons-facebook"><a href="https://www.facebook.com/TQosvreli/"
                                                                         target="_blank" title="Facebook"><i
                                                    class="fa fa-facebook"></i></a></li>
                                </ul>

                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                    <nav>
                                        <?php echo Nav::widget([
                                            'route' => preg_replace('/site\/index$/', '', Yii::$app->controller->action->getUniqueId()),
                                            'options' => ['class' => 'nav nav-pills', 'id' => 'mainNav'],
                                            'encodeLabels' => false,
                                            'activateParents' => true,
                                            'dropDownCaret' => '',
                                            'items' => [
                                                [
                                                    'label' => Yii::t('frontend', 'Home'),
                                                    'url' => ['/']
                                                ],
                                                [
                                                    'label' => Yii::t('frontend', 'Portfolio'),
                                                    'items' => [
                                                        [
                                                            'label' => 'test',
                                                            'url' => 'test'
                                                        ],
                                                        [
                                                            'label' => 'test',
                                                            'url' => 'test'
                                                        ]
                                                    ]
                                                ],
                                                [
                                                    'label' => Yii::t('frontend', 'About'),
                                                    'url' => ['site/about']
                                                ],
                                                [
                                                    'label' => Yii::t('frontend', 'Contact Us'),
                                                    'url' => ['site/contact']
                                                ]
                                            ]
                                        ]); ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php echo $content ?>

    <footer id="footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <a href="index.html" class="logo">
                            <h2>TQsovreli</h2>
                            <p>© Copyright <?php echo date('Y',time())?>. All Rights Reserved.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/TQosvreli/"
                                                                     target="_blank" title="Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php $this->endContent() ?>