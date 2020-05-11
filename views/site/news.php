<?php
$this->title = $name;
$this->params['breadcrumbs'][] = $name;
/** @var \yii\data\Pagination $pages */
use yii\helpers\Url; ?>

<div id="content" class="container-fluid home">
    <!--row-->
    <div class="">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div id="newsup_latest_post-1" class="newsup-front-page-content-widget mg-posts-sec mg-posts-modul-6">
                    <!-- mg-posts-sec mg-posts-modul-6 -->
                    <div class="mg-posts-sec mg-posts-modul-6">
                        <!-- mg-sec-title -->
                        <div class="mg-sec-title"><h4><?=$name?></h4></div>
                        <!-- // mg-sec-title -->
                        <!-- mg-posts-sec-inner -->
                        <div class="mg-posts-sec-inner">
                            <?php if (count($model) == 0) {
                                echo $this->render('_searchnotfound');
                            } ?>
                            <!--Project Box Start-->
                            <? foreach ($model as $item) {
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
                            <? } ?>
                            <nav>
                                <?=
                                \yii\widgets\LinkPager::widget(['pagination'=>$pages,

                                    'options'=>[
                                        'class'=>'pagination ',
                                    ],

//                                'linkContainerOptions'=>['class'=>'page-item'],
                                    'linkOptions'=>['class'=>'page-link'],

                                ]);?>

                            </nav>
                        </div> <!-- // mg-posts-sec-inner -->
                    </div> <!-- // mg-posts-sec block_6 -->
                </div>


            </div>
        </div>

        <!-- Sidebar -->

        <aside class="col-md-4 col-sm-4">
            <?=$this->render('_right_side')?>
        </aside><!-- #secondary -->
</div><!-- /col-md-4 -->

