<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DbtlDcotLtPcct */

$this->title = 'Cập nhật bản ghi';
$this->params['breadcrumbs'][] = ['label' => 'ĐỀ BÀI TẬP LỚN, ĐỀ CƯƠNG ÔN TẬP, LỊCH THI, PHÂN CÔNG COI THI', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="dbtl-dcot-lt-pcct-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
