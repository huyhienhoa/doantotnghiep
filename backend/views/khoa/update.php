<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Khoa */

$this->title = 'Cập nhật bản ghi: '.$model->tenkhoa;
$this->params['breadcrumbs'][] = ['label' => 'Khoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tenkhoa, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
