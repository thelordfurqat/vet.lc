<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/front-theme/css/styles.css',
        '/front-theme/css/Total-Soft-Poll-Widget.css',
        '/front-theme/css/totalsoft.css',
        '/front-theme/css/bootstrap.css',
        '/front-theme/css/style.css',
        '/front-theme/css/default.css',
        '/front-theme/css/font-awesome.css',
        '/front-theme/css/owl.carousel.css',
        '/front-theme/css/jquery.smartmenus.bootstrap.css',

//        'backend/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        '/front-theme/js/wp-emoji-release.min.js',
        '/front-theme/js/jquery.js',
        '/front-theme/js/core.min.js',
        '/front-theme/js/navigation.js',
        '/front-theme/js/bootstrap.js',
        '/front-theme/js/owl.carousel.min.js',
        '/front-theme/js/jquery.smartmenus.js',
        '/front-theme/js/jquery.smartmenus.bootstrap.js',
        '/front-theme/js/jquery.marquee.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
