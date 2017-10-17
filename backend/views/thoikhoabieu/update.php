<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Thoikhoabieu */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Thời khóa biểu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="thoikhoabieu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
