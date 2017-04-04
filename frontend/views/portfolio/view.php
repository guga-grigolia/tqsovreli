<?php
/**
 * Created by PhpStorm.
 * User: Guga-PC
 * Date: 4/5/2017
 * Time: 2:14 AM
 *
 */
use centigen\base\helpers\DateHelper;
use yii\helpers\Url;

$this->title = Yii::t('frontend', 'Portfolio');

$imageUrls = [];
/** @var \centigen\i18ncontent\models\Article $model */
if($model->getThumbnailUrl()){
    $imageUrls[] = $model->getThumbnailUrl();
}
/** @var \centigen\i18ncontent\models\ArticleAttachment $attachment */
foreach ($model->articleAttachments as $attachment){
    $imageUrls[] = $attachment->getUrl();
}

?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?php echo Url::to('/'); ?>"><?php echo Yii::t('frontend', 'Home') ?></a>
                    </li>
                    <li ><a href="<?php echo Url::to('/portfolio/index'); ?>"><?php echo $this->title ?></a></li>
                    <li class="active"><?php echo $model->getTitle() ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="portfolio-title">
                <div class="row">
                    <div class="portfolio-nav-all col-md-1">
                        <a href=""<?php echo Url::to('/portfolio/index'); ?>" data-tooltip data-original-title="Back to list"><i
                                    class="fa fa-th"></i></a>
                    </div>
                    <div class="col-md-10 center">
                        <h2 class="mb-none"><?php echo $model->getTitle(); ?></h2>
                    </div>
                    <div class="portfolio-nav col-md-1">
                    </div>
                </div>
            </div>

            <hr class="tall">
        </div>

    </div>

    <div class="row">

        <ul class="portfolio-list lightbox m-none"
            data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
            <?php foreach ($imageUrls as $url):?>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="portfolio-item">
                    <span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
                        <span class="thumb-info-wrapper">
                            <img src="<?php echo $url; ?>" class="img-responsive" alt="">
                            <span class="thumb-info-action">
                                <a href="<?php echo $url; ?>" class="lightbox-portfolio">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                class="fa fa-search-plus"></i></span>
                                </a>
                            </span>
                        </span>
                    </span>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>



    <div class="row">

        <div class="col-md-12">

            <h5 class="mt-lg mb-sm"><?php echo Yii::t('frontend','Project Description')?></h5>
            <p class="mt-none mb-xlg"><?php echo $model->getBody(); ?></p>

        </div>
    </div>

</div>