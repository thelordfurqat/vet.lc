<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MenuItem */

$this->title = 'Update Menu Item: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Menu Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wrapper border-bottom white-bg mptop">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
