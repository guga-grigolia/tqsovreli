<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/** @var \centigen\i18ncontent\models\Page $about */
$about = \centigen\i18ncontent\models\Page::findBySlug('about',\centigen\i18ncontent\models\Page::STATUS_PUBLISHED);
$this->title = $about->getTitle();
?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?php echo Url::to('/');?>"><?php echo Yii::t('frontend', 'Home') ?></a></li>
                    <li class="active"><?php echo $this->title ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <?php echo $about->getBody() ?>
        </div>
    </div>
</div>
