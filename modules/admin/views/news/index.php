<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper border-bottom white-bg mptop">



    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
            <p>
                <?= Html::a('<i class="fa fa-plus"></i> Qo\'shish', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
            </p>
        </div>

    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'code'б
            'name',
//            'image',
//            'cat.name',
            [
                'attribute'=>'cat_id',
                'value'=>'cat.name',
                'filter'=>\app\components\ArrayMaps::categoryCustom()
            ],
            // 'preview:ntext',
            // 'detail:ntext',
            // 'sort',
//             'show_counter',
            // 'slider',
            // 'vote',
            // 'tags',
//             'author_id',
            [
                'attribute'=>'author_id',
                'value'=>'author.name',
                'filter'=>\app\components\ArrayMaps::Authors()
            ],
            // 'modify_by',
            // 'updated',

            // 'status',
//            'created',
            [
                'attribute'=>'status',
                'value'=>function($d){
                    $ch = $d->status == 1 ? 'checked' : '';
                    return "
                        <div class='checkboxcustom'>
                            <input type='checkbox' {$ch}  onchange='statuschanger({$d->id})'>
                        </div>
                    ";
                },
                'format'=>'raw',
                'filter'=>[1=>'Aktiv',0=>'Deaktiv']
            ],

            // 'active',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {delete}'],
        ],
    ]); ?>
</div>




<?php

$url = Yii::$app->urlManager->createUrl(['admin/news/status']);
$this->registerJs("
    statuschanger = function(id){
        $.get('{$url}?id='+id).done(function(data){
            if(data==1){
                alert('Status aktivlashtirildi');
            }else if(data == 0){
                alert('Status Deaktivlashtirildi');
            }else{
                alert('Amalni bajarishdagi xatolik')
            }
        });
   }
")
?>