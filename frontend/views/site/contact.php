<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = Yii::t('frontend','Contact');
$this->params['breadcrumbs'][] = $this->title;
?>
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

            <h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <hr>

            <h4 class="heading-primary">The <strong>Office</strong></h4>
            <ul class="list list-icons list-icons-style-3 mt-xlg">
                <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
            </ul>

            <hr>

            <h4 class="heading-primary">Business <strong>Hours</strong></h4>
            <ul class="list list-icons list-dark mt-xlg">
                <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
            </ul>

        </div>
    </div>
</div>
