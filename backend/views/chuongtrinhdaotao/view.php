<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Chuongtrinhdaotao */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Chương trình đào tạo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuongtrinhdaotao-view">

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
            [
                'attribute'=>'ngaybanhanh',
                'label'=>'Ngày ban hành',
                'value'=>$model->ngaybanhanh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaybanhanh)
            ],
            'cosodaotao',
            'quyetdinhso',
            'created_at',
            'updated_at',
            'filedinhkem',
            [
                'attribute'=>'trinhdo_id',
                'label'=>'Trình độ',
                'value'=>$model->trinhdo->name
            ],
            [
                'attribute'=>'hinhthucdaotao_id',
                'label'=>'Hình thức đào tạo',
                'value'=>$model->hinhthucdaotao->name
            ],
            [
                'attribute'=>'khoa_id',
                'label'=>'Khoa',
                'value'=>$model->khoa->tenkhoa
            ],
            [
                'attribute'=>'chuyennganh_id',
                'label'=>'Chuyên ngành',
                'value'=>$model->chuyennganh->name
            ],
            [
                'attribute'=>'CTDT_DCHP_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->cTDTDCHP->name
            ]
        ],
    ]) ?>

</div>
