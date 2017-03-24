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
        <div class="container">
            <div class="row">
                <div class="footer-ribbon">
                    <span>Get in Touch</span>
                </div>
                <div class="col-md-3">
                    <div class="newsletter">
                        <h4>Newsletter</h4>
                        <p>Keep up on our always evolving product features and technology. Enter your e-mail and
                            subscribe to our newsletter.</p>

                        <div class="alert alert-success hidden" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>

                        <div class="alert alert-danger hidden" id="newsletterError"></div>

                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                            <div class="input-group">
                                <input class="form-control" placeholder="Email Address" name="newsletterEmail"
                                       id="newsletterEmail" type="text">
                                <span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Latest Tweets</h4>
                    <div id="tweet" class="twitter" data-plugin-tweets
                         data-plugin-options="{'username': '', 'count': 2}">
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-details">
                        <h4>Contact Us</h4>
                        <ul class="contact">
                            <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City
                                    Name, United States</p></li>
                            <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                            <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a
                                            href="mailto:mail@example.com">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="https://www.facebook.com/TQosvreli/" target="_blank"
                                                             title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <a href="index.html" class="logo">
                            <img alt="Porto Website Template" class="img-responsive" src="/img/logo-footer.png">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <p>© Copyright 2017. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="page-faq.html">FAQ's</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php $this->endContent() ?>