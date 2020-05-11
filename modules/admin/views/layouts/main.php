<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminkaAsset;
AdminkaAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <script>
        var statuschanger = function(){
            return 1;
        }
        var resetform = function(){
            return 1;
        }
        var updatemodal = function(){

        }
        var createmodal = function(){

        }
    </script>


    <style>

        .checkboxcustom>input[type="checkbox"]{
            position: relative;
            width:60px;
            height:30px;
            -webkit-appearance: none;
            background-color: #c6c6c6;
            outline: none;
            border-radius: 15px;
            box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
            transition: .5s;
        }
        .checkboxcustom>input:checked[type="checkbox"]{
            background-color: #03a9f4;
        }
        .checkboxcustom>input[type="checkbox"]:before{
            content: '';
            position: absolute;
            width:30px;
            height:30px;
            border-radius: 15px;
            top:0;
            left:0;
            background-color: #fff;
            transform: scale(1.1);
            box-shadow: 0 2px 5px rgba(0,0,0,.2);
            transition: .5s;
        }
        .checkboxcustom>input:checked[type="checkbox"]:before{
            left:30px;
        }

    </style>


    <?php

    $this->registerJs("
    
   resetform = function(){
        $('#w1')[0].reset();
   }
")
    ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container-fluid">

        <?= $this->render('_navigation')?>

         <div class="content">
            <div class="navbar-top">
                <div class="title">
                    <a href="/" target="_blank"><span class="glyphicon glyphicon-home"></span> Admin CMS</a>
                </div>
                <ul id="w1" class="navbar-nav navbar-right nav">
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <p class="user-image">
                                <img src="/mini_avatar.png" alt="">
                            </p>&nbsp;&nbsp;Администратор <span class="caret"></span>
                        </a>
                        <ul id="w2" class="dropdown-menu">
                            <li><a href="<?= Yii::$app->urlManager->createUrl(['admin/default/update'])?>" tabindex="-1">Мой профиль</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= Yii::$app->urlManager->createUrl(['admin/default/logout'])?>" data-method="post" tabindex="-1"><span class="glyphicon glyphicon-log-out"></span> Выйти</a></li>
                        </ul>
                    </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
                                <ul id="w3" class="dropdown-menu"><li><a href="#" tabindex="-1">Настройки системы</a></li>
                                    <li><a href="#" data-method="post" tabindex="-1">Очистить кеш</a></li>
                                    <li><a href="#" tabindex="-1">Резервное копирование</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" tabindex="-1">О системе</a></li>
                                </ul>
                            </li>
                </ul>
            </div>

            <div class="page">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <div class="site-dashboard">
    
                    <div class="block">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
 