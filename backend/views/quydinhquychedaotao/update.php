<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\QuydinhQuychedaotao */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'QUY ĐỊNH, QUY CHẾ ĐÀO TẠO', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="quydinh-quychedaotao-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->ngaybanhanh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaybanhanh) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
