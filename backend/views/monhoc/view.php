<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Monhoc */

$this->title = $model->tenmonhoc;
$this->params['breadcrumbs'][] = ['label' => 'MÔN HỌC', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monhoc-view">

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
            'mamonhoc',
            'tenmonhoc',
            'sotinchi',
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>$model->bomon->tenbomon
            ],
            [
                'attribute'=>'thuchanh',
                'label'=>'Thực hành',
                'value'=>\common\models\myFuncs::getThuchanh($model->thuchanh)
            ],
            [
                'attribute'=>'baitaplon',
                'label'=>'Bài tập lớn',
                'value'=>\common\models\myFuncs::getBTL($model->baitaplon)
            ],
        ],
    ]) ?>

</div>
