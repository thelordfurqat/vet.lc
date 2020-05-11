<?php

use yii\widgets\ActiveForm;

?>
<div class="sidebar">
    <!--Widget Start-->
    <div class="side-widget">
        <h5>Qidirish</h5>
        <div class="side-search">
            <?php $form = ActiveForm::begin(['action' => Yii::$app->urlManager->createUrl(['site/search']),'method'=>'get']);

            ?>

            <input type="search" class="form-control" autocomplete="off" placeholder="Kalit soʼz kiriting ..."
                   value="" name="s">
            <button type="submit"><i class="fas fa-search"></i></button>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!--Widget End-->

    <!--Widget Start-->
    <div class="side-widget">
        <h5>Ommabop maqolalar</h5>
        <ul class="lastest-products">
            <?php $model = \app\models\News::find()->where(['>', 'id', 3])->orderBy(['show_counter' => SORT_DESC])->limit(7)->all();
            foreach ($model as $item) { ?>
                <li><img src="/uploads/<?= $item->image ?>" alt=""
                         style="object-fit: cover; object-position: center; width: 50px; height: 50px"> <strong>
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/view', 'code' => $item->code]) ?>">
                            <?= $item->name ?>
                        </a></strong> <span class="pdate"><i
                                class="fas fa-calendar-alt"></i> <?= Yii::$app->formatter->asDate($item->created) ?></span>
                </li>
            <?php }
            ?>
        </ul>
    </div>
    <!--Widget Start-->
    <!--Widget Start-->
    <div class="side-widget project-list-widget">
        <h4>Ijtimoiy tarmoqlar</h4>
        <p>
        <p class="mt-2 mb-2" ><a  href="#"><img src="/icon/telegram.png" alt="" style="width: 25px"> Telegram</a></p>
        <p class="mt-2 mb-2"> <a href="#"><img src="/icon/facebook.png" alt="" style="width: 25px"> Facebook</a></p>
        <p class="mt-2 mb-2" ><a href="#"><img src="/icon/google.png" alt="" style="width: 25px"> GooglePlus</a></p>
        <p class="mt-2 mb-2"> <a href="#"><img src="/icon/linkedin.png" alt="" style="width: 25px"> LinkedIn</a></p>
        <p class="mt-2 mb-2"> <a href="#"><img src="/icon/twitter.png" alt="" style="width: 25px"> Twitter</a></p>
        <p class="mt-2 mb-2"> <a href="#"><img src="/icon/vk.png" alt="" style="width: 25px"> VK</a></p>

        </p>
    </div>
    <!--Widget End-->
    <div class="side-widget project-list-widget">
        <?= $this->render('_vote') ?><br>
        <h4 class="widget-title"><span class="title-bg">Валюталар курслари</span></h4>

        <a title="Ўзбекистон Республикаси Марказий банки" href="http://cbu.uz/uz/arkhiv-kursov-valyut/" target="_blank"
           rel="noopener"><img style="display: block; margin-left: auto; margin-right: auto;"
                               src="http://cbu.uz/uz/informer/?txtclr=ffffff&amp;brdclr=3399cc&amp;bgclr=3399cc&amp;r_choose=USD_EUR_RUB"
                               alt=""></a>


    </div>
    <!--Widget End-->
    <div class="side-widget project-list-widget">

    </div>
</div>