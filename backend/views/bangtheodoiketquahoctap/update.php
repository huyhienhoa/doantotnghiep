<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bangtheodoiketquahoctap */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'BẢNG THEO DÕI KÉT QUẢ HỌC TẬP', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="bangtheodoiketquahoctap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
