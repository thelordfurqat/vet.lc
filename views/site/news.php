<?php
$this->title = $name;
$this->params['breadcrumbs'][] = $name;

use yii\helpers\Url; ?>


<!--Causes Start-->
<section class="wf100 p80 projects">
    <div class="projects-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <?php if (count($model) == 0) {
                        echo $this->render('_searchnotfound');
                    } ?>
                    <!--Project Box Start-->
                    <? foreach ($model as $item) { ?>
                        <div class="pro-list-box">
                            <div class="pro-thumb"><a href="<?=Url::to(['/site/view','code'=>$item->code])?>"><i class="fas fa-eye"></i></a>
                                <img src="/uploads/<?=$item->image?>" style="object-fit: cover; object-position: center; height: 300px" alt="">
                            </div>
                            <div class="pro-txt">
                                <h3><a href="<?=Url::to(['/site/view','code'=>$item->code])?>"><?=$item->name?></a></h3>
                                <p> <?=Yii::$app->formatter->asDate($item->created)?> </p>
                                <a href="<?=Url::to(['/site/view','code'=>$item->code])?>" class="view">Batafsil</a>
                            </div>
                        </div>
                    <? } ?>
                    <!--Project Box End-->
                </div>
                <div class="col-lg-3 col-md-4">
                    <?=$this->render('_secondary')?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gt-pagination mt20">
                        <nav>
                            <?= \yii\widgets\LinkPager::widget(['pagination'=>$pages,

                                'options'=>[
                                    'class'=>'pagination justify-content-end mb-0',
                                ],

//                                'linkContainerOptions'=>['class'=>'page-item'],
                                'linkOptions'=>['class'=>'page-link'],

                            ]);?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

