<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Lichgiangday */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'LỊCH GIẢNG DẠY', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichgiangday-view">

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
            'nhomhocphan',
            'filedinhkem',
            'created_at',
            'updated_at',
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
                'attribute'=>'giangvien_id',
                'label'=>'Giảng viên',
                'value'=>$model->giangvien->tengiangvien
            ],
            [
                'attribute'=>'loaitailieu_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->loaitailieu->name
            ],
        ],
    ]) ?>

</div>
