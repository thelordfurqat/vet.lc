<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Bog\'lanish';
$this->params['breadcrumbs'][] = $this->title;
Use yii\helpers\Url; ?>

<!--Blog Start-->
<section class="wf100 p80 blog">
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <!--Blog Single Content Start-->
                    <div class="blog-single-content">
                        <div id="primary" class="content-area post-single-layout1 vmagazine-lite-content">
                            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                                <h2>Bog'lanish</h2>
                                <div class="alert alert-success">
                                   Murojaatingiz uchun tashakkur. Kengash tomonidan murojaatingiz o'rganilib chiqladi hamda sizga bo'laniladi.
                                </div>



                            <?php else: ?>

                            <p>
                               Kengash uchun ariza, taklif, shikoyat va boshqa turdagi murojjatingiz bo'lsa bizga yozing. Murojaatingiz albatta kengash tomonidan ko'rib chiqiladi. Tashakkur
                            </p>

                            <div class="row">
                                <div class="col-lg-11">

                                    <?php $form = ActiveForm::begin(); ?>

                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'phone')->textInput()?>

                                    <?= $form->field($model, 'email')->textInput(['type'=>'email']) ?>

                                    <?= $form->field($model, 'subject') ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                                    <?= $form->field($model, 'file')->fileInput() ?>


                                    <div class="form-group">
                                        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-success pull-right', 'name' => 'contact-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>
                            <?endif;?>
                        </div><!-- #primary -->
                    </div>
                    <!--Blog Single Content End-->
                </div>
                <!--Sidebar Start-->
                <div class="col-lg-3 col-md-4">
                    <?=$this->render('_secondary')?>

                </div>
                <!--Sidebar End-->
            </div>
        </div>
    </div>
</section>