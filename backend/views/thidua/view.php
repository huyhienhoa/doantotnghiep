<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Thidua */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Thi đua', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thidua-view">

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
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>$model->namhoc->name
            ],
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>$model->bomon->tenbomon
            ],
            [
                'attribute'=>'TD_KT_KL_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->tDKTKL->name
            ],
        ],
    ]) ?>

</div>
