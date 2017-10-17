<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Bangphanconggiangday */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bảng phân công giảng dạy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangphanconggiangday-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-edit"></span> Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-trash"></span> Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có thực sự muốn xóa bản ghi này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'created_at',
            'updated_at',
            [
                'attribute'=>'ngayky',
                'label'=>'Ngày ký',
                'value'=>$model->ngayky = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngayky)
            ],
            'filedinhkem',
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>$model->bomon->tenbomon
            ],
            [
                'attribute'=>'hocky_id',
                'label'=>'Học kỳ',
                'value'=>$model->hocky->name
            ],
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>$model->namhoc->name
            ],
            [
                'attribute'=>'HDGD_TKB_BPCGD__id',
                'label'=>'Loại tài liệu',
                'value'=>$model->hDGDTKBBPCGD->name
            ],
        ],
    ]) ?>

</div>
