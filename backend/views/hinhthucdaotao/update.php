<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hinhthucdaotao */

$this->title = 'Update Hinhthucdaotao: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Hinhthucdaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hinhthucdaotao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
