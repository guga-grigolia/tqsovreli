<?php
/**
 * Created by PhpStorm.
 * User: Guga-PC
 * Date: 3/25/2017
 * Time: 12:03 AM
 */
use yii\widgets\LinkPager;

$this->title = Yii::t('frontend', 'Portfolio');
?>
<section class="section section-tertiary section-no-border pb-md mt-none">
    <div class="container">
        <div class="row mt-xl">
            <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                <h1 class="text-uppercase font-weight-light mt-xl text-color-primary"><?php echo Yii::t('frontend', 'Portfolio') ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h2><?php echo $this->title; ?></h2>
    <?php echo $this->render('_navPills', ['categories' => $categories]) ?>
    <hr>

    <div class="row">

        <div class="sort-destination-loader sort-destination-loader-loaded">
            <?php /** @var \yii\debug\models\timeline\DataProvider $dataProvider */
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'emptyTextOptions' => [
                    'class' => 'col-xs-12'
                ],
                'pager' => [
                    'class' => LinkPager::className(),
                ],
                'summary' => false,
                'options' => [
                    'tag' => 'ul',
                    'class' => 'portfolio-list sort-destination',
                    'data-sort-id' => '*'
                ],
                'itemOptions' => [
                    'tag' => 'li',
                    'class' => 'col-md-12 isotope-item brands'
                ]
            ]); ?>
        </div>
    </div>

</div>
