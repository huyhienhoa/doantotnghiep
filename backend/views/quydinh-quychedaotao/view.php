<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\QuydinhQuychedaotao */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quydinh Quychedaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quydinh-quychedaotao-view">

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
            'ngaybanhanh',
            'soquyetdinh',
            'created_at',
            'updated_at',
            'filedinhkem',
            'namhoc_id',
            'loaitailieu_id',
        ],
    ]) ?>

</div>
