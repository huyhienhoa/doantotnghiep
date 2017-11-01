<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */

$this->title = $model->tengiangvien;
$this->params['breadcrumbs'][] = ['label' => 'GIẢNG VIÊN', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giangvien-view">

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
            'magiangvien',
            'tengiangvien',
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>$model->bomon->tenbomon
            ],
        ],
    ]) ?>

</div>
