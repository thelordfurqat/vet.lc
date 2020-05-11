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

<div id="content" class="container-fluid home">
    <!--row-->
    <div class="">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div class="blog-single-content">
                    <div id="primary" class="content-area post-single-layout1 vmagazine-lite-content">
                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                            <h2>Bog'lanish</h2>
                            <div class="alert alert-success">
                                Murojaatingiz uchun tashakkur. Boshqarma tomonidan murojaatingiz o'rganilib chiqiladi hamda sizga bo'laniladi.
                            </div>



                        <?php else: ?>

                            <p>
                                Boshqarmaga ariza, taklif, shikoyat va boshqa turdagi murojjatingiz bo'lsa bizga yozing. Murojaatingiz albatta boshqarma tomonidan ko'rib chiqiladi. Tashakkur
                            </p>

                            <div class="row">
                                <div class="col-lg-11">

                                    <?php $form = ActiveForm::begin(); ?>

                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true,'style'=>'color:#000']) ?>

                                    <?= $form->field($model, 'phone')->textInput(['style'=>'color:#000'])?>

                                    <?= $form->field($model, 'email')->textInput(['type'=>'email','style'=>'color:#000']) ?>

                                    <?= $form->field($model, 'subject')->textInput(['style'=>'color:#000']) ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 6,'style'=>'color:#000']) ?>
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
            </div>
        </div>

        <!-- Sidebar -->

        <aside class="col-md-4 col-sm-4">
            <?=$this->render('_right_side')?>
        </aside><!-- #secondary -->
    </div><!-- /col-md-4 -->
