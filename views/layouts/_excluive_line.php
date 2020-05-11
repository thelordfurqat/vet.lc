<?php

use app\models\News;
use yii\helpers\Url;

$latest_new=News::find()->where(['cat_id'=>13])->orderBy(['created'=>SORT_DESC])->limit(5)->all();
?>
<section class="mg-tpt-tag-area">

</section>
<section class="mg-latest-news-sec">
    <div class="container-fluid">
        <div class="mg-latest-news">
            <div class="bn_title">
                <h2>Yangiliklar<span></span></h2>
            </div>
            <div class="mg-latest-news-slider marquee">
                <div style="width: 100000px; transform: translateX(0px); animation: 42.3s linear 0s infinite normal none running marqueeAnimation-9277533;" class="js-marquee-wrapper">
                    <div class="js-marquee" style="margin-right: 20px; float: left;">
                        <?foreach ($latest_new as $item):?>
                            <a href="<?=Url::to(['/site/view','code'=>$item->code])?>">
                                <span><?=$item->name?></span>
                            </a>
                        <?endforeach;?>
                    </div>
                    <div class="js-marquee" style="margin-right: 20px; float: left;">
                        <?foreach ($latest_new as $item):?>
                            <a href="<?=Url::to(['/site/view','code'=>$item->code])?>">
                                <span><?=$item->name?></span>
                            </a>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Excluive line END -->
