<?php

use app\models\News;

$gallery=News::find()->where(['cat_id'=>25])->orderBy(['created'=>SORT_DESC])->limit(9)->all();
$news=News::find()->where(['cat_id'=>13])->orderBy(['created'=>SORT_DESC])->limit(6)->all();

$query=' `created` + INTERVAL 7 DAY < NOW() ';
$dolzarb=News::find()->where($query)->andWhere(['cat_id'=>13])->orderBy(['show_counter'=>SORT_DESC])->limit(2)->all();
?>
<div id="sidebar-right" class="mg-sidebar">

    <!-- Izlew -->
    <div id="search-4" class="mg-widget widget_search">
        <form role="search" method="get" id="searchform" action="">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" value="" name="s">
                <span class="input-group-btn btn-default">
          <button type="submit" class="btn"> <i class="fa fa-search"></i> </button>
          </span>
            </div>
        </form>
    </div>
    <!-- 2020 jil  -->
    <div id="media_image-3" class="mg-widget widget_media_image">
        <img width="626" height="244" src="/uploads/image/yil_nomi.png" class="image wp-image-153  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" />
    </div>
    <!-- Prezident -->
    <div id="custom_html-3" class="widget_text mg-widget widget_custom_html">
        <div class="textwidget custom-html-widget">
            <h5 align="center">O'zbekiston Respublikasi Prezidentining rasmiy veb sayti</h5>
            <a href="https://president.uz/"><img src="/front-theme/img/prezident.png"></a>
            <p align="center">O'zbekiston Respublikasi Prezidentining ijtimoiy tarmoqdagi sahifalari</p>
            <div class="profile-links social-icons-widget social-icons-large">
                <div class="profile-link">
                    <a href="https://www.facebook.com/Mirziyoyev/?ref=ts&amp;fref=ts" class="profile-link-inner fa-facebook-block social-icons-icon">
                        <i class="fa-facebook fa"></i>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="https://twitter.com/president_uz" class="profile-link-inner fa-twitter-block social-icons-icon">
                        <i class="fa-twitter fa"></i>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="https://www.instagram.com/mirziyoyev_sh/" class="profile-link-inner fa-instagram-block social-icons-icon">
                        <i class="fa-instagram fa"></i>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="https://www.youtube.com/channel/UC61Jnumjuz8NXhSuLoZD2xg" class="profile-link-inner fa-youtube-block social-icons-icon">
                        <i class="fa-youtube fa"></i>
                    </a>
                </div>
                <div class="profile-link">
                    <a href="https://t.me/shmirziyoyev" class="profile-link-inner fa-telegram-block social-icons-icon">
                        <i class="fa-telegram fa"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div id="media_gallery-2" class="mg-widget widget_media_gallery">
        <div id="gallery-1" class="gallery galleryid-50 gallery-columns-3 gallery-size-full">
            <?foreach ($gallery as $item):?>
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                    <a href="/uploads/<?=$item->image?>"><img width="1024" height="683" src="/uploads/<?=$item->image?>" class="attachment-full size-full" alt="" srcset="/uploads/<?=$item->image?> 1024w, /uploads/<?=$item->image?> 300w, /uploads/<?=$item->image?> 768w"></a>
                </div>
            </figure>
            <?endforeach;?>
        </div>
    </div>
    <div id="recent-posts-4" class="mg-widget widget_recent_entries">
        <h6>Dolzarb</h6>
        <?foreach ($dolzarb as $item):
            $url=\yii\helpers\Url::to(['/site/view','code'=>$item->code]);
            $urlNews=\yii\helpers\Url::to(['/site/news','code'=>$item->cat->code]);
            ?>
        <div class="mg-blog-post-3">
            <div class="mg-blog-img">
                <a href="<?=$url?>"><img src="/uploads/<?=$item->image?>" alt="<?=$item->name?>"></a>
            </div>
            <div class="mg-blog-inner">
                <div class="mg-blog-category">
                    <a href="<?=$urlNews?>" rel="tag"><?=$item->cat->name?></a>
                </div>
                <h1 class="title"><a href="<?=$url?>"><?=$item->name?></a></h1>
                <div class="mg-blog-meta">
                <span class="mg-blog-date"><i class="fa fa-clock-o"></i>
                    <?=dateTime_($item->created)?>
                </span>
                </div>
            </div>
        </div>
        <br>
       <?endforeach;?>
    </div>

    <!-- Songi janaliq -->
    <div id="recent-posts-4" class="mg-widget widget_recent_entries">
        <h6>So'ngi yangiliklar</h6>
        <ul>
            <?foreach ($news as $item):
                $url=\yii\helpers\Url::to(['/site/view','code'=>$item->code]);
                ?>
            <li>
                <a href="<?=$url?>"><?=$item->name?></a>
                <div class="tab_post_meta"><i class="fa fa-calendar" aria-hidden="true"></i><span class="post-date"><?=dateTime_($item->created)?></span></div>
            </li>
            <?endforeach;?>
        </ul>
    </div>

<!--    <div id="calendar-2" class="mg-widget widget_calendar">-->
<!--        <div id="calendar_wrap" class="calendar_wrap">-->
<!--            <table id="wp-calendar">-->
<!--                <caption>Апрель 2020</caption>-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th scope="col" title="Понедельник">Пн</th>-->
<!--                    <th scope="col" title="Вторник">Вт</th>-->
<!--                    <th scope="col" title="Среда">Ср</th>-->
<!--                    <th scope="col" title="Четверг">Чт</th>-->
<!--                    <th scope="col" title="Пятница">Пт</th>-->
<!--                    <th scope="col" title="Суббота">Сб</th>-->
<!--                    <th scope="col" title="Воскресенье">Вс</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!---->
<!--                <tfoot>-->
<!--                <tr>-->
<!--                    <td colspan="3" id="prev"><a href="date/2020/03">« Мар</a></td>-->
<!--                    <td class="pad">&nbsp;</td>-->
<!--                    <td colspan="3" id="next" class="pad">&nbsp;</td>-->
<!--                </tr>-->
<!--                </tfoot>-->
<!---->
<!--                <tbody>-->
<!--                <tr>-->
<!--                    <td colspan="2" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td id="today">26</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>27</td><td>28</td><td>29</td><td>30</td>-->
<!--                    <td class="pad" colspan="3">&nbsp;</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->

        <?=$this->render('_vote')?>
</div>
