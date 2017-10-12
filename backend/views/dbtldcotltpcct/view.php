<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DbtlDcotLtPcct */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ĐỀ BÀI TẬP LỚN, ĐỀ CƯƠNG ÔN TẬP, LỊCH THI, PHÂN CÔNG COI THI', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dbtl-dcot-lt-pcct-view">

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
                'attribute'=>'loaitailieu_id',
                'label'=>'Loại tài liệu',
                'value'=>$model->loaitailieu->name
            ]
        ],
    ]) ?>

</div>
