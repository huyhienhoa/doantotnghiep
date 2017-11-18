<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Authitem */

$this->title = 'Cập nhật quyền';
$this->params['breadcrumbs'][] = ['label' => 'Phân quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="authitem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
