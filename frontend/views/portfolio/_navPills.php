<?php
/**
 * @var $this yii\web\View
 * @var $categories [] ArticleCategory
 */
use yii\bootstrap\Nav;

$paramCatId = isset(Yii::$app->request->queryParams['PortfolioSearch']['category_id']) ?
    Yii::$app->request->queryParams['PortfolioSearch']['category_id'] : false;

$navItems = [];
$navItems[] = [
    'url' => ['/portfolio/index'],
    'label' => Yii::t('frontend', 'Show All'),
    'active' => !$paramCatId
];
/** @var \centigen\i18ncontent\models\ArticleCategory $item */
foreach ($categories as $item) {
    $navItems[] = [
        'url' => \yii\helpers\Url::to('/portfolio/index?' . http_build_query(['PortfolioSearch' => ['category_id' => $item->id]])),
        'label' => $item->getTitle(),
        'active' => $paramCatId && $paramCatId == $item->id,
    ];
}
echo Nav::widget(['items' => $navItems, 'options' => ['class' => 'nav nav-pills font-size-sm']])
?>

