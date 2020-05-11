<?php
$class = "vmagazine-lite-home-wrapp";
switch (Yii::$app->controller->action->id){
    case 'news': $class = "vmagazine-lite-container"; break;
    case 'view': $class = "vmagazine-lite-container";break;
}
$this->title=$name;
$this->params['breadcrumbs'][] = ['label' => \app\models\Category::findOne($model->cat_id)->name, 'url' => [\yii\helpers\Url::to(['site/news','code'=>\app\models\Category::findOne($model->cat_id)->code])]];
$this->params['breadcrumbs'][] = $name;
$posts=\app\models\News::find()->where(['cat_id'=>$model->cat_id])->andWhere(['<>','id',$model->id])->orderBy(['created'=>SORT_DESC])->limit(8)->all();

use yii\helpers\Url; ?>

<div id="content" class="container-fluid home">
    <!--row-->
    <div class="">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div id="newsup_latest_post-1" class="newsup-front-page-content-widget mg-posts-sec mg-posts-modul-6">
                    <div class="blog-single-content">
                        <div id="primary" class="content-area post-single-layout1 vmagazine-lite-content">
                            <main id="main" class="site-main" role="main">
                                <article class="post type-post status-publish format-standard has-post-thumbnail hentry category-news category-wiiu category-xboxone">

                                    <header class="entry-header">
                                        <h3 class="entry-title"><?= $model->name?></h3>
                                        <?php if($model->name!=$model->preview){?>
                                            <h5 class="entry-title"><?=$model->preview?></h5>
                                        <?php }?>
                                    </header><!-- .entry-header -->

                                    <div class="entry-meta clearfix">
                <span class="posted-on">
                    <i class="fa fa-clock-o"></i> <?= $this->render('_date',['date'=>$model->created])?></span>
                                        <span class="comments"><i class="fa fa-eye"></i> <?= $model->show_counter?></span>
                                    </div>
                                    <?php if($model->image!='default.jpg'){?>
                                        <figure>
                                            <img src="/uploads/<?=$model->image?>"  style="object-fit: cover; object-position: center;">
                                        </figure>
                                        <br>
                                    <?php }?>
                                    <style>
                                        figure{
                                            width:100%; /*container-width*/
                                            overflow:hidden; /*hide bounds of image */
                                            margin:0;   /*reset margin of figure tag*/
                                        }
                                        figure img{
                                            display:block; /*remove inline-block spaces*/
                                            width:100%; /*make image streatch*/
                                        }
                                        /*figure img{*/
                                        /*    !*add to other styles*!   margin:-11.875% 0;*/
                                        /*}*/
                                    </style>

                                    <div class="entry-content clearfix">
                                        <div id="idTextPanel" class="jqDnR">

                                            <?= $model->detail?>



                                            <br>

                                            <style type="text/css">

                                                #share-buttons img {
                                                    width: 35px;
                                                    padding: 5px;
                                                    border: 0;
                                                    box-shadow: 0;
                                                    display: inline;
                                                    text-align: right;
                                                }

                                            </style>
                                            <!-- I got these buttons from simplesharebuttons.com -->
                                            <div id="share-buttons">

                                                <span>Tarqatish:</span>

                                                <!-- Email -->
                                                <a href="mailto:?Subject=<?= $model->name?>&amp;Body=<?= $model->preview?> <?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>">
                                                    <img src="/icon/email.png" alt="Email" />
                                                </a>

                                                <!-- Facebook -->
                                                <a href="http://www.facebook.com/sharer.php?u=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>" target="_blank">
                                                    <img src="/icon/facebook.png" alt="Facebook" />
                                                </a>

                                                <!-- Google+ -->
                                                <a href="https://plus.google.com/share?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>" target="_blank">
                                                    <img src="/icon/google.png" alt="Google" />
                                                </a>

                                                <!-- LinkedIn -->
                                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>" target="_blank">
                                                    <img src="/icon/linkedin.png" alt="LinkedIn" />
                                                </a>



                                                <!-- Twitter -->
                                                <a href="https://twitter.com/share?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>&amp;text=<?=$model->name?>" target="_blank">
                                                    <img src="/icon/twitter.png" alt="Twitter" />
                                                </a>

                                                <!-- VK -->
                                                <a href="http://vkontakte.ru/share.php?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>" target="_blank">
                                                    <img src="/icon/vk.png" alt="VK" />
                                                </a>

                                                <!-- VK -->
                                                <a href="https://t.me/share/url?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/news','code'=>$model->code])?>" target="_blank">
                                                    <img src="/icon/telegram.png" alt="VK" />
                                                </a>

                                                <span class="pull-right" style="font-weight: bold;     margin-top: 8px;">
                            <?= $this->render('_date',['date'=>$model->created])?> -
                            Avtor: <?= $model->author->name?>
                        </span>

                                            </div>



                                        </div>


                                    </div>


                                </article><!-- #post-## -->
                            </main><!-- #main -->

                        </div><!-- #primary -->
                    </div>
                </div>


            </div>
        </div>

        <!-- Sidebar -->

        <aside class="col-md-4 col-sm-4">
            <?=$this->render('_right_side')?>
        </aside><!-- #secondary -->
    </div><!-- /col-md-4 -->
