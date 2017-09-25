<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Loaitailieu */

$this->title = 'Update Loaitailieu: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Loaitailieus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaitailieu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
