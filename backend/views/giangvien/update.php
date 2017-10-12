<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */

$this->title = 'Cập nhật bản ghi: '.$model->tengiangvien;
$this->params['breadcrumbs'][] = ['label' => 'Giảng viên', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tengiangvien, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="giangvien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
