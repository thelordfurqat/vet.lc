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
                                <ul class="lastest-products" style="padding-left: unset!important;">

                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="/image/akt-logo.png" style="width: 100%" alt="">

                                        </div>
                                        <div class="col-lg-7">
                                            <p><strong>
                                                    Xorazm viloyati hokimligi huzuridagi "Axborot kommunikatsiya texnologiyalarini rivojlantirish markazi" DUK
                                                </strong></p>
                                            <p>8 (62) 223 00 98</p>
                                        </div>
                                    </div>

                                </ul>
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
                        <p>2020 © — Xorazm viloyati veterinariya va chorvachilikni rivojlantirish boshqarmasi
                           </p>
                    </div>
                    <div class="col-md-6 text-right text-xs">
                        <ul id="menu-footer-menu" class="info-right">
                            <li id="menu-item-243" class="menu-itemcurrent-menu-item current_page_item menu-item-243 active"><a href="/site/contact">Murojaat yo'llash</a></li>
                            <li id="menu-item-245" class="menu-itemmenu-item-245"><a href="/site/page?code=qabul-kunlari">Qabul kunlari</a></li>
                            <li id="menu-item-244" class="menu-itemmenu-item-244"><a href="https://my.gov.uz/uz/service/view/228">Sertifikatga ariza yuborish</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/overlay-->
</footer>
