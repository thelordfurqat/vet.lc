<?php

use yii\widgets\Breadcrumbs; ?>
<nav aria-label="breadcrumb">
    <?= Breadcrumbs::widget([
        'options'=>[
            'class'=>'breadcrumb',
        ],
        'tag'=>'ol',
        'itemTemplate'=>' <li class="breadcrumb-item">{link}</li>',
        'activeItemTemplate'=>' <li  class="breadcrumb-item active" aria-current="page" >{link}</li>',
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
</nav>

