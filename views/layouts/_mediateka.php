<?php

use app\models\News;
use yii\helpers\Url;

$query=' `created` + INTERVAL 30 DAY < NOW() ';
$dolzarb=News::find()->where($query)->andWhere(['cat_id'=>13])->orderBy(['show_counter'=>SORT_DESC])->limit(3)->all();
?>

<!-- Mediateka -->
<div class="container-fluid">
    <div class="row">
        <div id="newsup_posts_carousel-4" class="mg-widget bottom_widget_area mg-posts-sec mg-posts-modul-3">
            <!-- mg-posts-sec mg-posts-modul-3 -->
            <div class="mg-posts-sec mg-posts-modul-3">
                <!-- mg-sec-title -->
                <div class="mg-sec-title">
                    <h4>Ommabop xabarlar</h4>
                </div> <!-- // mg-sec-title -->
                <!-- mg-posts-sec-inner -->
                <div class="mg-posts-sec-inner">
                    <!-- featured_cat_slider -->
                    <div class="featured_cat_slider">
                        <div class="featuredcat owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <!-- item -->
                            <div class="owl-wrapper-outer">
                                <div>
                                    <?foreach ($dolzarb as $item):
                                        $url=Url::to(['/site/view','code'=>$item->code]);
                                        $url2=Url::to(['/site/news','code'=>$item->cat->code]);
                                        ?>
                                    <div class="owl-item" style="width:33%; height:290px;">
                                        <div class="item">
                                            <!-- blog -->
                                            <div class="mg-blog-post-3">
                                                <div class="mg-blog-img" >
                                                    <a href="<?=$url?>" style="position: relative;width: 100%; max-height: 475px; "><img src="/uploads/<?=$item->image?>" alt="<?=$item->name?>" style="width:100%; "></a>
                                                </div>
                                                <div class="mg-blog-inner">
                                                    <div class="mg-blog-category">
                                                        <a href="<?=$url2?>" rel="tag"><?=$item->cat->name?></a>
                                                    </div>
                                                    <h1 class="title"><a href=""><?=$item->name?></a></h1>
                                                    <div class="mg-blog-meta">
                                                        <span class="mg-blog-date"><i class="fa fa-clock-o"></i>
                                                        <a href="date/2020/03"><?=dateTime_($item->created)?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- blog -->
                                        </div>
                                    </div>
                                    <?endforeach;?>
                                </div>
                            </div>
                            <!-- // item -->


                        </div>
                    </div> <!-- // featured_cat_slider -->
                </div> <!-- // mg-posts-sec-inner -->
            </div>
            <!-- // mg-posts-sec mg-posts-modul-3 -->
        </div>

    </div>
</div>
<!--Why Ecova + Facts Start-->
<section class="mg-fea-area over" style="background-image:url('/front-theme/img/post/IMG_1294.jpg'); margin-bottom: unset!important;">
    <div class="overlay">
        <div class="container-fluid">
            <div id="media_gallery-3" class="mg-widget bottom_widget_area widget_media_gallery" style="background: unset">
                <div id="gallery-2" class="gallery galleryid-50 gallery-columns-4 gallery-size-large">
                    <figure class="gallery-item">
                        <a href="http://dd.gov.uz/uz/" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/008.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/008.png 600w, /front-theme/img/008-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://president.uz/oz" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/007.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/007.png 600w, /front-theme/img/007-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://my.gov.uz/oz" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/006.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/006.png 600w, /front-theme/img/006-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://id.gov.uz/oid/main.do?locale=uz" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/005.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/005.png 600w, /front-theme/img/005-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://regulation.gov.uz/oz" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/004.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/004.png 600w, /front-theme/img/004-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://data.gov.uz/uz" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/003.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/003.png 600w, /front-theme/img/003-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://www.lex.uz/uz/" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/002.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/002.png 600w, /front-theme/img/002-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>
                    <figure class="gallery-item">
                        <a href="https://gov.uz/oz" target="_blank">
                        <div class="gallery-icon landscape">
                            <img width="600" height="84" src="/front-theme/img/001.png" class="attachment-large size-large" alt="" srcset="/front-theme/img/001.png 600w, /front-theme/img/001-300x42.png 300w" sizes="(max-width: 600px) 100vw, 600px" style="border: unset!important;">
                        </div>
                        </a>
                    </figure>

                </div>
            </div>

        </div>
    </div>
</section>
