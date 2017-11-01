<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Monhoc */

$this->title = 'Cập nhật bản ghi: '.$model->tenmonhoc;
$this->params['breadcrumbs'][] = ['label' => 'MÔN HỌC', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tenmonhoc, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="monhoc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
