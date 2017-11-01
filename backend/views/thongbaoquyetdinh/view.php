<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ThongbaoQuyetdinh */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'THÔNG BÁO,QUYẾT ĐỊNH', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thongbao-quyetdinh-view">

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
            [
                'attribute'=>'ngaycohieuluc',
                'label'=>'Ngày có hiệu lực',
                'value'=>$model->ngaycohieuluc = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaycohieuluc)
            ],
            'created_at',
            'updated_at',
            'filedinhkem',
            [
                'attribute'=>'hinhthucdaotao_id',
                'label'=>'Hình thức đào tạo',
                'value'=>$model->hinhthucdaotao->name
            ],
            [
                'attribute'=>'trinhdo_id',
                'label'=>'Trình độ',
                'value'=>$model->trinhdo->name
            ],
            [
                'attribute'=>'loaitailieu_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->loaitailieu->name
            ],
        ],
    ]) ?>

</div>
