<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\QuydinhQuychedaotao */

$this->title = 'Update Quydinh Quychedaotao: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Quydinh Quychedaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quydinh-quychedaotao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
