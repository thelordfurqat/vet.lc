<?php

use yii\widgets\Breadcrumbs; ?>
<section class="wf100 p100 inner-header">
    <div class="container">
        <h1><?=$this->title?></h1>

            <?= Breadcrumbs::widget([
                    'options'=>[
                            'class'=>'',
                    ],
                'itemTemplate'=>' <li>{link}</li>',
                'activeItemTemplate'=>' <li><a href="#">{link}</a></li>',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

    </div>
</section>
