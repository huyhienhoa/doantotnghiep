<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HdgdTkbBpcgd */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'HỢP ĐỒNG GIẢNG DẠY, THỜI KHÓA BIỂU, BẢNG PHÂN CÔNG GIẢNG DẠY', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="hdgd-tkb-bpcgd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
