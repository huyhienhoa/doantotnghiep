<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Chuongtrinhdaotao */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'CHƯƠNG TRÌNH ĐÀO TẠO', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="chuongtrinhdaotao-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->ngaybanhanh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaybanhanh) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
