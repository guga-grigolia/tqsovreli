<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/** @var \centigen\i18ncontent\models\Page $about */
$about = \centigen\i18ncontent\models\Page::findBySlug('about',\centigen\i18ncontent\models\Page::STATUS_PUBLISHED);
$this->title = $about->getTitle();
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php echo $about->getBody() ?>
        </div>
    </div>
</div>
