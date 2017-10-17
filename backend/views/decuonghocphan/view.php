<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Decuonghocphan */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đề cương học phần', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decuonghocphan-view">

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
                'attribute'=>'monhoc_id',
                'label'=>'Môn học',
                'value'=>$model->monhoc->tenmonhoc
            ],
            [
                'attribute'=>'CTDT_DCHP_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->cTDTDCHP->name
            ],
        ],
    ]) ?>

</div>
