<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "Пользователы";
$this->params['breadcrumbs'][] = ['label'=>'Admin','url'=>'/admin'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper border-bottom white-bg mptop">

    <script>
        var statuschanger = function(){
            return 1;
        }
        var resetform = function(){
            return 1;
        }
    </script>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
            <p>
                <button type="button" onclick="resetform()" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Foydalanuvchi qo'shish</button>
                <?php if(Yii::$app->session->hasFlash('error')){?>
                    <br>
                    <span class="text-warning" style="font-size:18px;"> <?php $a = Yii::$app->session->getFlash('error'); echo $a['username'] ?> </span>
                <?php }?>
                <?php if(Yii::$app->session->hasFlash('success')){?>
                    <br>
                    <span class="text-success" style="font-size:18px;"> <?php $a = Yii::$app->session->getFlash('success'); echo $a;?> </span>
                <?php }?>
            </p>
        </div>

    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'role_id',
            [
                'attribute'=>'role_id',
                'value'=>'role.role',
                'filter'=>\app\components\ArrayMaps::role()
            ],
            'name',
            'username:email',
//            'password',
//             'email:email',
            // 'phone',
            // 'country',
            // 'region',
            // 'district',
            // 'address',
            // 'created',
            // 'updated',
            // 'status',
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


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Foydalanuvchi qo'shish</h4>
            </div>
            <div class="modal-body">
                <?= $this->render('_reg',['model'=>new \app\models\User()])?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
            </div>
        </div>

    </div>
</div>


<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-search"></i> Qidiruv</h4>
            </div>
            <div class="modal-body">

                <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
            </div>
        </div>

    </div>
</div>


<?php

$url = Yii::$app->urlManager->createUrl(['admin/user/status']);
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
   resetform = function(){
        $('#w1')[0].reset();
   }
")
?>
