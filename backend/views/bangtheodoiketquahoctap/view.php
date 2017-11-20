<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Bangtheodoiketquahoctap */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'BẢNG THEO DÕI KẾT QUẢ HỌC TẬP', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangtheodoiketquahoctap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-edit"></span> Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-trash"></span> Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có thực sự muốn xóa bản ghi này không?',
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
            'nhomhocphan',
            'filedinhkem',
            [
                'attribute'=>'giangvien_id',
                'label'=>'Giảng viên',
                'value'=>$model->giangvien->tengiangvien
            ],
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
                'attribute'=>'monhoc_id',
                'label'=>'Môn học',
                'value'=>$model->monhoc->tenmonhoc
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
                'attribute'=>'loaitailieu_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->loaitailieu->name
            ],
        ],
    ]) ?>

</div>
