
<?php
use centigen\i18ncontent\models\WidgetCarousel;
use centigen\i18ncontent\models\WidgetCarouselItem;

$query = WidgetCarouselItem::find()
    ->joinWith('carousel')
    ->where([
        '{{%widget_carousel_item}}.status' => 1,
        '{{%widget_carousel}}.status' => WidgetCarousel::STATUS_ACTIVE,
        '{{%widget_carousel}}.key' => 'index',
    ])
    ->orderBy(['order' => SORT_ASC]);
/**
 * @var $dbCarousel WidgetCarouselItem
 */
$dbCarousel = $query->all();
?>
<div role="main" class="main">
    <?php if($dbCarousel): ?>
        <div class="slider-container light rev_slider_wrapper" style="height: 700px;">
            <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider
                 data-plugin-options='{"delay": 9000, "gridwidth": 1170, "gridheight": 900, "disableProgressBar": "on"}'>
                <ul>
                    <?php foreach($dbCarousel as $item): ?>
                        <li data-transition="fade">
                            <img src="<?php echo $item->getImageUrl()?>"
                                 alt=""
                                 data-bgposition="center 100%"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 class="rev-slidebg">

                            <div class="tp-caption top-label tp-caption-custom-stripe"
                                 data-x="right" data-hoffset="100"
                                 data-y="bottom" data-voffset="100"
                                 data-start="1000"
                                 data-transform_in="x:[100%];opacity:0;s:1000;">
                                <?php echo $item->activeTranslation->caption?>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    <?php endif;?>
</div>
