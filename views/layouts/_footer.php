<?php
$boshliq = \app\models\User::find()->where(['role_id' => 4])->one();
?>
<footer>
    <div class="overlay" style="color: white">

        <div class="mg-footer-bottom-area">
            <div class="container-fluid">
                <div class="divide-line">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <h4 style="color: white"> Biz haqimizda</h4>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <img src="/profile/<?= $boshliq->image ?>" style="width: 100%" alt="">

                                    </div>
                                    <div class="col-lg-7">
                                        <p><strong><?= $boshliq->name ?></strong></p>
                                        <p><?= $boshliq->phone ?></p>
                                        <p>
                                            Xorazm viloyati veterinariya va chorvachilikni rivojlantirish boshqarmasi boshlig'i
                                        </p>
                                        <a style="color: white" href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="lm">Bog'lanish</a>
                                    </div>
                                </div>

                            </div>
                            <!--Footer Widget End-->
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <h4 style="color: white">Ijtimoiy tarmoqlar</h4>
                                <p>
                                <p class="mt-2 mb-2"><a style="color: white" href="#"><img src="/icon/telegram.png" alt="" style="width: 25px"> Telegram</a></p>
                                <p class="mt-2 mb-2"> <a style="color: white" href="#"><img src="/icon/facebook.png" alt="" style="width: 25px"> Facebook</a></p>
                                <p class="mt-2 mb-2"> <a style="color: white" href="#"><img src="/icon/linkedin.png" alt="" style="width: 25px"> LinkedIn</a></p>
                                <p class="mt-2 mb-2"> <a style="color: white" href="#"><img src="/icon/twitter.png" alt="" style="width: 25px"> Twitter</a></p>
                                <p class="mt-2 mb-2"> <a style="color: white" href="#"><img src="/icon/vk.png" alt="" style="width: 25px"> VK</a></p>

                                </p>

                            </div>
                            <!--Footer Widget End-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <h4 style="color: white" >Sayt yaratuvchisi</h4>
                                <ul class="lastest-products">

                                        <li>
                                           DUK
                                        </li>

                                </ul>
                            </div>
                            <!--Footer Widget End-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--Footer Widget Start-->
                            <div class="footer-widget">
                                <div id="fpro-slider" class="owl-carousel owl-theme">
                                    <!--Footer Product Start-->
                                    <div class="item">
                                        <div class="f-product">
                                            <img src="http://cbu.uz/uzc/informer/?r_choose=USD_EUR_RUB" alt="">
                                            <div class="fp-text">
                                                <h6><a href="#">Valyuta kurslari </a></h6>

                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Product End-->
                                    <!--Footer Product Start-->
                                    <div class="item">
                                        <div class="f-product">
                                            <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.uz/pogoda/193144"
                                               target="_blank"><img
                                                        src="https://info.weather.yandex.net/193144/1_white.ru.png?domain=uz"
                                                        border="0" alt="Яндекс.Погода"/>
                                            </a>
                                            <div class="fp-text">
                                                <h6><a href="#">Ob-hovo</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Product End-->
                                    <!--Footer Product Start-->
                                    <div class="item">
                                        <div class="f-product">
                                            <iframe  frameborder="no" style="padding-top: 5px; width: 100%" scrolling="no" src="https://yandex.ru/time/widget/?geoid=193144&lang=ru&layout=vert&type=digital&face=serif"></iframe>
                                            <div class="fp-text">
                                                <h6><a href="#">Soat</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Footer Product End-->
                                </div>
                            </div>
                            <!--Footer Widget End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--End mg-footer-widget-area-->

        <div class="mg-footer-copyright">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-xs">
                        <p>2020 © — Шымбай районы ҳәкимлиги
                            <span class="sep"> | </span>
                            Порталды ислеп шығыўшы: <a href="http://karakalpak.site/" rel="designer">Karakalpak info</a>.</p>
                    </div>
                    <div class="col-md-6 text-right text-xs">
                        <ul id="menu-footer-menu" class="info-right">
                            <li id="menu-item-243" class="menu-itemcurrent-menu-item current_page_item menu-item-243 active"><a href="">Бас бет</a></li>
                            <li id="menu-item-245" class="menu-itemmenu-item-245"><a href="#">Көп берилетуғын сораўлар</a></li>
                            <li id="menu-item-244" class="menu-itemmenu-item-244"><a href="#">Байланис</a></li>
                            <li id="menu-item-246" class="menu-itemmenu-item-246"><a href="#">Мағлыўматлардан пайдаланыў шәртлери</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/overlay-->
</footer>
