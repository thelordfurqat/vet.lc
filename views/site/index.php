<?php

/** @var string $title */
/** @var \app\models\News $latest_new */
/** @var \app\models\News $photo_album */
/** @var \app\models\Category $category_for_slider */
$this->title = $title;

use app\models\News;
use yii\helpers\Url; ?>
<?php

echo $this->render('_slider');
?>

<div id="content" class="container-fluid home">
    <!--row-->
    <div class="">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div id="newsup_latest_post-1" class="newsup-front-page-content-widget mg-posts-sec mg-posts-modul-6">
                    <!-- mg-posts-sec mg-posts-modul-6 -->
                    <div class="mg-posts-sec mg-posts-modul-6">
                        <!-- mg-sec-title -->
                        <div class="mg-sec-title"><h4>So'ngi yangiliklar</h4></div>
                        <!-- // mg-sec-title -->
                        <!-- mg-posts-sec-inner -->
                        <div class="mg-posts-sec-inner">
                            <?foreach($news as $item):
                                $url=Url::to(['/site/view','code'=>$item->code]);
                                $urlNews=Url::to(['/site/news','code'=>$item->cat->code]);
                                ?>
                            <article class="mg-posts-sec-post">
                                <div class="standard_post">
                                    <div class="mg-thum-list col-md-4">
                                        <div class="mg-post-thumb" style="display: flex; margin-bottom: 10px; max-height: 200px;">
                                            <img src="/uploads/<?=$item->image?>" style=" object-fit: cover; width: 100%">
                                        </div>
                                    </div>
                                    <div class="list_content">
                                        <div class="mg-sec-top-post">
                                            <div class="mg-blog-category">
                                                <a class="newsup-categories category-color-1" href="<?=$urlNews?>" ><?=$item->cat->name?></a>
                                            </div>
                                            <h1 class="title"><a href="<?=$url?>"><?=$item->name?></a></h1>
                                            <div class="media-body">
                                                <span><i class="fa fa-clock-o" aria-hidden="true"> </i> <?=dateTime_($item->created)?></span>
                                                <span><i class="fa fa-eye" aria-hidden="true"> </i> <?=$item->show_counter?></span>
                                            </div>
                                        </div>
                                        <div class="mg-posts-sec-post-content">
                                            <div class="mg-content">
                                                <p><?=mb_substr($item->preview,0,235,'utf8')?><?=strlen($item->preview)>234?'...':''?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?endforeach;?>
                        </div> <!-- // mg-posts-sec-inner -->
                    </div> <!-- // mg-posts-sec block_6 -->
                </div>


                <div id="custom_html-2" class="widget_text newsup-front-page-content-widget widget_custom_html">
                    <h6>Biz haqimizda</h6>
                    <div class="textwidget custom-html-widget">
                        <div class="mg-posts-sec-post">
                            <div class="col-md-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.3828041230877!2d60.61534295070931!3d41.56095899307844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDMzJzM5LjQiTiA2MMKwMzcnMDMuMSJF!5e0!3m2!1sru!2s!4v1588932663315!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0; object-fit: cover; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <?$rais=\app\models\User::find()->where(['role_id'=>4])->one()?>
                            <div class="col-md-7 maps">
                                <h2> Xorazm viloyati veterinariya va chorvachilikni rivojlantirish boshqarmasi</h2>
                                <b>Boshqarma boshlig'i:</b> <?=$rais->name?> <br>
                                <b>Yuridik manzili:</b> <?=$rais->address.' ,'.$rais->district.' ,'.$rais->region?><br>
                                <b>Telefon raqam:</b> <?=$rais->phone?><br>
                                <b>Elektron pochta:</b> <?=$rais->email?><br>
                                <b>Ish vaqti:</b> 09:00 dan 18:00 gacha<br>
                                <b>Tushlik:</b> 13:00 dan 14:00 gacha<br>
                                <b>Qabul kunlari:</b> Dushanba<br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->

        <aside class="col-md-4 col-sm-4">
<?=$this->render('_right_side')?>
    </div>
    </aside><!-- #secondary -->
</div><!-- /col-md-4 -->
