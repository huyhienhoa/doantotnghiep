<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kiluat */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kỉ luật', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kiluat-view">

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
            'filedinhkem',
            [
                'attribute'=>'giangvien_id',
                'label'=>'Giảng viên',
                'value'=>$model->giangvien->tengiangvien
            ],
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>$model->namhoc->name
            ],
            [
                'attribute'=>'TD_KT_KL_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->tDKTKL->name
            ],
        ],
    ]) ?>

</div>
