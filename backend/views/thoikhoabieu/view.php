<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Thoikhoabieu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'THỜI KHÓA BIỂU', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thoikhoabieu-view">

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
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>$model->namhoc->name
            ],
            [
                'attribute'=>'hocky_id',
                'label'=>'Học kỳ',
                'value'=>$model->hocky->name
            ],
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>$model->bomon->tenbomon
            ],
            'created_at',
            'updated_at',
            'filedinhkem',
            [
                'attribute'=>'HDGD_TKB_BPCGD__id',
                'label'=>'Loại tài liệu',
                'value'=>$model->hDGDTKBBPCGD->name
            ],
        ],
    ]) ?>

</div>
