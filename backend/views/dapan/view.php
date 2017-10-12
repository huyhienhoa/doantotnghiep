<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Dapan */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đáp án', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapan-view">

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
            'filedinhkem',
            'created_at',
            'updated_at',
            [
                'attribute'=>'nganhangdethi_id',
                'label'=>'Ngân hàng đề thi',
                'value'=>$model->nganhangdethi->name
            ],
            [
                'attribute'=>'NHDT_DA_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->nHDTDA->name
            ]
        ],
    ]) ?>

</div>
