<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bomon */

$this->title = 'Update Bomon: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Bomons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bomon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
