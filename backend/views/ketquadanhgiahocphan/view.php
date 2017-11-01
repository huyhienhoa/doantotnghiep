<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ketquadanhgiahocphan */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketquadanhgiahocphan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-edit"></span> Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
                'attribute'=>'ngaythi',
                'label'=>'Ngày thi',
                'value'=>$model->ngaythi = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaythi)
            ],
            'canbocoithi',
            'canbochamthi',
            'nhomhocphan',
            'filedinhkem',
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
                'attribute'=>'monhoc_id',
                'label'=>'Môn học',
                'value'=>$model->monhoc->tenmonhoc
            ],
            [
                'attribute'=>'loaitailieu_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->loaitailieu->name
            ],
        ],
    ]) ?>

</div>
