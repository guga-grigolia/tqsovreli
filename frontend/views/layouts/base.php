<?php

use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
use yii\bootstrap\Nav;


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
    <div class="body">
        <header id="header" class="header-narrow header-semi-transparent-light"
                data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}'>
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="<?php echo \yii\helpers\Url::to(['site/index']) ?>">
                                    <span class="logo-default" >TQsovreli</span>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['site/index']) ?>">
                                    <span class="logo-default" >TQsovreli</span>
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-nav header-nav-stripe">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                            data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="header-social-icons social-icons visible-lg">
                                        <li class="social-icons-facebook <?php echo Yii::$app->keyStorage->get('FACEBOOK') != 'N/A' ?: 'hidden' ?> ">
                                            <a href="<?php echo Yii::$app->keyStorage->get('FACEBOOK') ?>"
                                               target="_blank"
                                               title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="social-icons-twitter <?php echo Yii::$app->keyStorage->get('TWITTER') != 'N/A' ?: 'hidden' ?>">
                                            <a href="<?php echo Yii::$app->keyStorage->get('TWITTER') ?>"
                                               target="_blank"
                                               title="Twitter"><i
                                                        class="fa fa-twitter"></i></a></li>
                                    </ul>
                                    <div
                                            class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <?php
                                            echo Nav::widget(
                                                [
                                                    'options' => ['class' => 'nav nav-pills', 'id' => 'mainNav'],
                                                    'items' => [
                                                        ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
                                                        ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug' => 'about']],
                                                        [
                                                            'label' => Yii::t('frontend', 'Projects'),
                                                            'url' => ['/project/index'],
                                                        ],
                                                        ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
                                                        [
                                                            'label' => Yii::t('frontend', 'Language'),
                                                            'items' => array_map(function ($code) {
                                                                return [
                                                                    'label' => Yii::$app->params['availableLocales'][$code],
                                                                    'url' => ['/site/set-locale', 'locale' => $code],
                                                                    'active' => Yii::$app->language === $code
                                                                ];
                                                            }, array_keys(Yii::$app->params['availableLocales']))
                                                        ]
                                                    ]
                                                ]
                                            )
                                            ?>
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

        <!--begin footer-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo \yii\helpers\Url::to(['site/index']) ?>">
                            <img alt="Instali" class="img-responsive logo" width="90"
                                 src="/porto/img/demos/construction/logo.png">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6 mb-sm">
                                <h4><?php echo Yii::t('frontend', 'Navigation') ?></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list list-footer-nav">
                                    <li>
                                        <a href="<?php echo \yii\helpers\Url::to(['/site/index']) ?>">
                                            <?php echo Yii::t('frontend', 'Home') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo \yii\helpers\Url::to(['page/view', 'slug' => 'about']) ?>">
                                            <?php echo Yii::t('frontend', 'About') ?>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle"
                                           href="<?php echo \yii\helpers\Url::to(['/service/index']) ?>">
                                            <?php echo Yii::t('frontend', 'Services') ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul class="list list-footer-nav">
                                    <li>
                                        <a href="<?php echo \yii\helpers\Url::to(['/project/index']) ?>">
                                            <?php echo Yii::t('frontend', 'Projects') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo \yii\helpers\Url::to(['/site/contact']) ?>">
                                            <?php echo Yii::t('frontend', 'Contact') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> <?php echo Yii::$app->keyStorage->get('CONTACT_PHONE') ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i><a
                                                href="mailto:<?php echo Yii::$app->keyStorage->get('CONTACT_EMAIL') ?>">
                                            <?php echo Yii::$app->keyStorage->get('CONTACT_EMAIL') ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-md-12 center">
                            <p>© Copyright <?php echo date('Y') ?>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>
    <!--end footer-->
<?php $this->endContent() ?>