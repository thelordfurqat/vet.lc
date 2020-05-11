<?php

use app\models\News;
use yii\helpers\Url;

$latest_news=News::find()->where(['cat_id'=>13])->orderBy(['created'=>SORT_DESC])->orderBy(['created'=>SORT_DESC])->limit(3)->all();
$hujjatlar=News::getHujjat();
$vet_maslahati=News::find()->where(['cat_id'=>30])->andWhere(['>','status',0])->orderBy(['created'=>SORT_DESC])->limit(4)->all();
$elonlar=News::find()->where(['cat_id'=>14])->andWhere(['>','status',0])->orderBy(['created'=>SORT_DESC])->limit(4)->all();
?>
<section class="mg-fea-area over" style="background-image:url('/uploads/image/xiva.jpg');">
    <div class="overlay" style="background: rgba(235,212,248,0.28)">
        <div class="container-fluid">
            <div class="">
                <div class="col-md-8">
                    <div class="row">
                        <div id="homemain" class="homemain owl-carousel mr-bot60 pd-r-10 owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?foreach ($latest_news as $k=>$item):?>
                                        <div class="item <?=$k==0?'active':''?>">
                                            <a class="ta-slide-items" href="<?=Url::to(['/site/view','code'=>$item->code])?>">
                                                <div class="mg-blog-img"  ">
                                                    <a class="ta-slide-items" style="display: flex; max-height: 475px; href="<?=Url::to(['/site/view','code'=>$item->code])?>">
                                                        <img src="/uploads/<?=$item->image?>" style="object-fit: cover; width:100%; ">
                                                    </a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="title">
                                                        <a href="<?=Url::to(['/site/view','code'=>$item->code])?>"><?=$item->name?></a>
                                                    </h4>
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"> </i><?=$item->created?></span>
                                                    <span><i class="fa fa-eye" aria-hidden="true"> </i> <?=$item->show_counter?></span>
                                                </div>
                                            </a>
                                        </div>
                                        <?endforeach;?>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>



                            </div><!-- owl-wrapper-outer -->


                        </div>
                    </div>
                </div>

                <div class="col-md-4 top-right-area">
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#maslahatlar" aria-controls="ilajlar" aria-expanded="true">
                                    <i class="fa fa-info"></i> Maslahatlar</a>
                            </li>
                            <li >
                                <a data-toggle="tab" href="#elonlar" aria-controls="dagazalar" aria-expanded="false">
                                    <i class="fa fa-bullhorn"></i>E'lonlar</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#hujjatlar" aria-controls="tendirler" aria-expanded="false">
                                    <i class="fa fa-book"></i> Hujjatlar</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="maslahatlar" role="tabpanel" class="tab-pane active">
                                <div class="mg-posts-sec mg-posts-modul-2">
                                    <div class="mg-posts-sec-inner row">
                                        <div class="small-list-post col-lg-12">
                                            <ul>
                                                <?foreach ($vet_maslahati as $item):
                                                    $url=Url::to(['/site/view','code'=>$item->code]);
                                                    ?>
                                                <li class="small-post clearfix">
                                                    <div class="img-small-post" >
                                                        <img src="/uploads/<?=$item->image?>">
                                                    </div>
                                                    <div class="small-post-content">
                                                        <div class="title_small_post">
                                                            <a href="<?=$url?>"><h5><?=mb_substr($item->name,0,150,'utf8')?><?=strlen($item->name)>150?'...':''?></h5></a>
                                                        </div>
                                                        <div class="tab_post_meta">
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"> </i><?=dateTime_($item->created)?> &nbsp;</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"> </i> <?=$item->show_counter?></span>
                                                        </div>
                                                    </div>
                                                </li><!-- /small-post -->
                                                <?endforeach;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- id/dagazalar -->

                            <div id="elonlar" role="tabpanel" class="tab-pane">
                                <div class="mg-posts-sec mg-posts-modul-2">
                                    <div class="mg-posts-sec-inner row">
                                        <div class="small-list-post col-lg-12">
                                            <ul>
                                                <?foreach ($elonlar as $item):
                                                    $url=Url::to(['/site/view','code'=>$item->code]);
                                                    ?>
                                                    <li class="small-post clearfix">
                                                        <div class="img-small-post">
                                                            <img src="/uploads/<?=$item->image?>">
                                                        </div>
                                                        <div class="small-post-content">
                                                            <div class="title_small_post">
                                                                <a href="<?=$url?>"><h5><?=mb_substr($item->name,0,150,'utf8')?><?=strlen($item->name)>150?'...':''?></h5></a>
                                                            </div>
                                                            <div class="tab_post_meta">
                                                                <span><i class="fa fa-clock-o" aria-hidden="true"> </i><?=dateTime_($item->created)?> &nbsp;</span>
                                                                <span><i class="fa fa-eye" aria-hidden="true"> </i> <?=$item->show_counter?></span>
                                                            </div>
                                                        </div>
                                                    </li><!-- /small-post -->
                                                <?endforeach;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- id/tendirler -->

                            <div id="hujjatlar" role="tabpanel" class="tab-pane">
                                <div class="mg-posts-sec mg-posts-modul-2">
                                    <div class="mg-posts-sec-inner row">
                                        <div class="small-list-post col-lg-12">
                                            <ul>
                                                <?foreach ($hujjatlar as $item):
                                                    $url=Url::to(['/site/view','code'=>$item->code]);
                                                    ?>
                                                    <li class="small-post clearfix">
                                                        <div class="img-small-post">
                                                            <img src="/uploads/<?=$item->image?>">
                                                        </div>
                                                        <div class="small-post-content">
                                                            <div class="title_small_post">
                                                                <a href="<?=$url?>"><h5><?=mb_substr($item->name,0,150,'utf8')?><?=strlen($item->name)>150?'...':''?></h5></a>
                                                            </div>
                                                            <div class="tab_post_meta">
                                                                <span><i class="fa fa-clock-o" aria-hidden="true"> </i><?=dateTime_($item->created)?> &nbsp;</span>
                                                                <span><i class="fa fa-eye" aria-hidden="true"> </i> <?=$item->show_counter?></span>
                                                            </div>
                                                        </div>
                                                    </li><!-- /small-post -->
                                                <?endforeach;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- id/ilajlar -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==/ Home Slider ==-->
<!--Slider Start-->
<section id="home-slider" class="owl-carousel owl-theme wf100">
    <div class="item">
        <div class="slider-caption h2slider">
            <div class="container">
                <strong>Issiqlikdan <span> shikoyat qilmang</span></strong>
                <h1>Daraxt eking!</h1>
                <p>Daraxtlar yo'q, odamzod yo'q.</p>
<!--                <a href="#" class="active">Find Out More</a> -->
                <a href="/site/contact">Bog'lanish</a>
            </div>
        </div>
        <img src="/front-theme/images/h2-slide1.jpg" alt="">
    </div>
    <div class="item">
        <div class="slider-caption h2slider">
            <div class="container">
                <strong><span>Iltimos</span> ov qilishni to'xtating </strong>
                <h1>yo'qolib borayotgan</h1>
                <p>hayvonlarning <strong>yovvoyi hayotini</strong> saqlang</p>
                <a href="/site/contact">Bog'lanish</a>
            </div>
        </div>
        <img src="/front-theme/images/h2-slide2.jpg" alt="">
    </div>
    <div class="item">
        <div class="slider-caption h2slider">
            <div class="container">
                <strong>Hayot <span> asosi</span> bo'lgan</strong>
                <h1>Suv manbaini asrang</h1>
                <p>Biz uchun <strong>Kech bo'lmasidan</strong> oldin...</p>
                <a href="/site/contact">Bog'lanish</a>
            </div>
        </div>
        <img src="/front-theme/images/h2-slide3.jpg" alt="">
    </div>
</section>
<!--Slider End-->
