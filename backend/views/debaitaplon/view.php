<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Debaitaplon */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đề bài tập lớn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debaitaplon-view">

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
            'nhomhocphan',
            'created_at',
            'updated_at',
            'filedinhkem',
            'hocky_id',
            'namhoc_id',
            'monhoc_id',
            'DBTL_DCOT_LT_PCCT_id',
        ],
    ]) ?>

</div>
