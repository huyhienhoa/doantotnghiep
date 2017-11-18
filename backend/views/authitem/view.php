<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Authitem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Phân quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authitem-view">

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
//            'roles_id',
            [
                'attribute'=>'roles_id',
                'label'=>'Vai trò',
                'value'=>$model->roles->name
            ],
//            'khoa_id',
            [
                'attribute'=>'khoa_id',
                'label'=>'Khoa',
                'value'=>$model->khoa->tenkhoa
            ],
            [
                'attribute'=>'auth_id',
                'value'=>$model->showQuyen($model->roles_id,$model->khoa_id),
                'format'=>'raw'
            ]
        ],
    ]) ?>

</div>
