<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;


use yii\helpers\Url; ?>
<!--Blog Start-->
<section class="wf100 p80 blog">
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <!--Blog Single Content Start-->
                    <div class="blog-single-content">
                        <div id="primary" class="content-area post-single-layout1 vmagazine-lite-content">
                            <main id="main" class="site-main" role="main">

                                <h1><?= Html::encode($this->title) ?></h1>

                                <div class="alert alert-danger">
                                    <?= nl2br(Html::encode($message)) ?>
                                </div>

                                <p>
                                    The above error occurred while the Web server was processing your request.
                                </p>
                                <p>
                                    Please contact us if you think this is a server error. Thank you.
                                </p>
                            </main>


                            </div><!-- .vmagazine-lite-home-wrapp -->

                        </div><!-- #primary -->
                    </div>
                    <!--Blog Single Content End-->
                <div class="col-lg-3 col-md-4">
                    <?= $this->render('_secondary') ?>

                </div>
                <!--Sidebar End-->
            </div>
        </div>
    </div>
</section>
<!--Blog End-->

