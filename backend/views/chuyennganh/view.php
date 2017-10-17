<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Chuyennganh */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Chuyên ngành', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuyennganh-view">

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
            'ma',
            'name',
            [
                'attribute'=>'khoa_id',
                'label'=>'Khoa',
                'value'=>$model->khoa->tenkhoa
            ],
        ],
    ]) ?>

</div>
