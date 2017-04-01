<?php
/**
 * Created by PhpStorm.
 * User: Guga-PC
 * Date: 4/1/2017
 * Time: 1:57 PM
 *
 * @var $model \centigen\i18ncontent\models\Article
 */
use yii\helpers\Url;

$imageUrls = [];
if($model->getThumbnailUrl()){
    $imageUrls[] = $model->getThumbnailUrl();
}
/** @var \centigen\i18ncontent\models\ArticleAttachment $attachment */
foreach ($model->articleAttachments as $attachment){
    $imageUrls[] = $attachment->getUrl();
}
?>

<div class="portfolio-item">
    <span class="thumb-info thumb-info-lighten thumb-info-no-zoom thumb-info-hide-wrapper-bg">
        <span class="thumb-info-wrapper">
            <div class="owl-carousel owl-theme nav-inside m-none"
                 data-plugin-options="{'items': <?php echo count($imageUrls); ?>, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                <?php foreach ($imageUrls as $url): ?>
                <div>
                    <a href="<? echo Url::to(['/portfolio/view', 'id' => $model->id]); ?>">
                        <img src="<?php echo $url; ?>"
                             class="img-responsive" alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <span class="thumb-info-title">
                <span class="thumb-info-inner">TQsovreli</span>
                <span class="thumb-info-type"><?php echo $model->getTitle(); ?></span>
            </span>
            <span class="thumb-info-action">
                <span class="thumb-info-action-icon"><i
                            class="fa fa-link"></i></span>
            </span>
        </span>
    </span>
</div>
