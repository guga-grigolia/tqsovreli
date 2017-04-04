<?php
/**
 * @var $this yii\web\View
 * @var $categories [] ArticleCategory
 */
use yii\bootstrap\Nav;

$paramCatSlug = isset(Yii::$app->request->queryParams['slug']) ?
    Yii::$app->request->queryParams['slug'] : false;


$navItems = [];
$navItems[] = [
    'url' => ['/portfolio/index'],
    'label' => Yii::t('frontend', 'Show All'),
    'active' => !$paramCatSlug
];
/** @var \centigen\i18ncontent\models\ArticleCategory $item */
foreach ($categories as $item) {
    $navItems[] = [
        'url' => \yii\helpers\Url::to(['/portfolio/index','slug' => $item->slug ]),
        'label' => $item->getTitle(),
        'active' => $paramCatSlug && $paramCatSlug == $item->slug,

    ];
}
echo Nav::widget([
    'items' => $navItems,
    'options' => [
        'class' => 'nav nav-pills sort-source',
    ]
])
?>

