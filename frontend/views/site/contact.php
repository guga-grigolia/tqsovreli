<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/** @var \centigen\i18ncontent\models\Page $contact */
$contact = \centigen\i18ncontent\models\Page::findBySlug('contact',\centigen\i18ncontent\models\Page::STATUS_PUBLISHED);
$this->title = $contact->getTitle();
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
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <?php echo $form->field($model, 'name') ?>
            <?php echo $form->field($model, 'email') ?>
            <?php echo $form->field($model, 'subject') ?>
            <?php echo $form->field($model, 'body')->textArea(['rows' => 6]) ?>
            <?php echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>
            <div class="form-group">
                <?php echo Html::submitButton(Yii::t('frontend', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-6">
            <h4 class="heading-primary mt-lg"><?php echo Yii::t('frontend','Get in') ?><strong><?php echo Yii::t('frontend','Touch') ?></strong></h4>
            <?php echo $contact->getBody() ?>
        </div>
    </div>
</div>
