<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bangphanconggiangday */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bảng phân công giảng dạy', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="bangphanconggiangday-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->ngayky = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngayky) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
