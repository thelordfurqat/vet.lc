<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<meta name="google-site-verification" content="yM-oVjGPK3ps7bJp8oWJ24J3pfvsPfcNqGSwQHBkjLA">-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="icon" type="image/png" href="/front-theme/images/favicon.png" />




<?php $this->head() ?>


</head>

<body class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-50 custom-background wp-custom-logo  ta-hide-date-author-in-list">
<?php $this->beginBody() ?>
<div id="page" class="site">
    <div class="wrapper">
        <?=$this->render('_header')?>
        <div class="clearfix"></div>
<?
    if(!(Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index'))
        echo $this->render('_brandcrubs');

    ?>
    <?=$content?>
    </div>
    <?=$this->render('_mediateka')?>
    <?=$this->render('_footer')?>

</div>
</div>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
