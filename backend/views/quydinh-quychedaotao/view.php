<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\QuydinhQuychedaotao */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quy định-Quy chế đào tạo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quydinh-quychedaotao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc chắn muốn xóa bản ghi này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $model->ngaybanhanh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaybanhanh)?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'ngaybanhanh',
            'soquyetdinh',
            'created_at',
            'updated_at',
            'filedinhkem',
            'namhoc_id',
            'loaitailieu_id',
        ],
    ]) ?>

</div>
