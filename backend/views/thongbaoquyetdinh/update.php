<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ThongbaoQuyetdinh */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'THÔNG BÁO,QUYẾT ĐỊNH', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="thongbao-quyetdinh-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->ngaycohieuluc = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaycohieuluc) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
