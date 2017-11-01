<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bomon */

$this->title = 'Cập nhật bản ghi: '.$model->tenbomon;
$this->params['breadcrumbs'][] = ['label' => 'BỘ MÔN', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tenbomon, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="bomon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
