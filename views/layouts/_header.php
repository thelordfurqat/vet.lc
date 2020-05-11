<?php
?>

<header class="mg-headwidget">
    <!--==================== TOP BAR ====================-->
    <div class="mg-head-detail hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <ul class="info-left">
                        <li><a href="/site/page?code=bayroq"><img src="/front-theme/img/flag.png"></a></li>
                        <li><a href="/site/page?code=gerb"><img src="/front-theme/img/gerb.png"></a></li>
                        <li><a href="/site/page?code=madhiya"><img src="/front-theme/img/gimn.png"></a></li>
                        <li>/</li>
                        <li><a href="/site/rss" title="RSS"><i class="fa fa-rss"></i></a></li>
                        <li><a href="/site/map" title="Sayt xaritasi"><i class="fa fa-sitemap"></i></a></li>
<!--                        <li><a href="#" title="Maxsus imkoniyatlar"><i class="fa fa-eye"></i></a></li>-->
                        <li><a href="/admin" title="Saytga kirish"><i class="fa fa-sign-in"></i></a></li>

                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">


                    <ul class="info-left change-language">
                        <li>
                            <iframe  src="http://free.timeanddate.com/clock/i79xffoy/n3633/tluz75/fs16/fcfff/tct/pct/pt5/tt0/td1" frameborder="0" width="296" height="24" allowTransparency="true"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- container-fluid -->
    </div>
    <div class="clearfix"></div>
    <div class="mg-nav-widget-area-back" style="background: url('/uploads/image/tb.jpg') repeat scroll center 0 #143745; background-size: cover;">
        <div class="overlay">
            <div class="inner">
                <div class="container-fluid">
                    <div class="mg-nav-widget-area">
                        <div class="row">
                            <div class="col-md-7 col-sm-6 text-center-xs">
                                <div class="navbar-header">
                                    <a href="" class="navbar-brand" rel="home" itemprop="url">
                                        <img  src="/front-theme/static/logo.png" class="custom-logo" alt="Xorazm viloyati hokimligi">
                                    </a>
                                    <div class="site-branding-text" style="width: unset">
                                        <h1 class="site-title" style="line-height: 1.15"> <a href="/" rel="home">
                                                XORAZM VILOYATI VETERINARIYA VA <br>
                                                CHORVACHILIKNI RIVOJLANTIRISH BOSHQARMASI
                                                <hr style="margin:0; padding:0">
                                                <span style="font-weight: 500; font-size:25px; letter-spacing: 1px;">Rasmiy veb sayti</span>
                                            </a></h1>
                                    </div>
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-wp">
                                        <span class="sr-only">Toggle Navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6">

                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="contact-card">

                                            Ishonch telefoni:
                                            <br style="padding:0;">
                                            <span>+998(62)</span> <span style="font-size: 30px">228-54-13</span>
                                        </div>

                                        <div class="contact-card">
                                            Yagona telefoni:
                                            <br style="padding:0;">
                                            <span>+998(62)</span> <span style="font-size: 30px">228-54-12</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-card">
                                            <a href="/site/contact"><button  type="button" style="width: 100%">Bog'lanish</button></a>
                                        </div>

                                        <div class="contact-card">
                                            <a href="/site/page?code=qabul-kunlari"><button  type="button" style="width: 100%"> Qabul kunlari</button></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Trending line END -->

                        </div><!-- row -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- mg-nav-widget-area-back -->
    <div class="mg-menu-full">
        <nav class="navbar navbar-default navbar-static-top navbar-wp">
            <div class="container-fluid">
                <!-- navbar-toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-wp">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /navbar-toggle -->

                <div class="collapse navbar-collapse" id="navbar-wp">
                    <?=\app\components\MenuBuilder::generate('_menu')?>
                </div>
            </div>
        </nav> <!-- /Navigation -->
    </div>
</header>
<div class="clearfix"></div>
<?=$this->render('_excluive_line')?>
