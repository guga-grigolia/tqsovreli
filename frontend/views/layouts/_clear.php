<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Html::encode($this->title) ?></title>
    <script src="/js/modernizr.min.js"></script>
    <?php /** @var \centigen\i18ncontent\models\Article $this */
    if (isset($this->params['model'])): ?>
        <meta property="og:url"
              content="<?php echo Url::to(['portfolio/view', 'slug' => $this->params['model']->slug], true); ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="T.Qsovreli"/>
        <meta property="og:description" content="<?php echo $this->params['model']->getBody(); ?>"/>
        <?php if ($this->params['model']->thumbnail_path): ?>
            <meta property="og:image" content="<?php echo $this->params['model']->getThumbnailUrl(); ?>" />
        <?php endif; ?>
    <?php endif; ?>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags() ?>
</head>
<body>
<?php if (isset($this->params['model'])): ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<?php endif; ?>
<div class="body">
    <?php $this->beginBody() ?>
    <?php echo $content ?>
    <?php $this->endBody() ?>
</div>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-97384600-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
<?php $this->endPage() ?>
