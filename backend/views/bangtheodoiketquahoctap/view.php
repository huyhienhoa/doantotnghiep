<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Bangtheodoiketquahoctap */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bangtheodoiketquahoctaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangtheodoiketquahoctap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'nhomhocphan',
            'filedinhkem',
            'giangvien_id',
            'hinhthucdaotao_id',
            'trinhdo_id',
            'monhoc_id',
            'hocky_id',
            'namhoc_id',
            'loaitailieu_id',
        ],
    ]) ?>

</div>
