<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bangtheodoiketquahoctap */

$this->title = 'Update Bangtheodoiketquahoctap: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Bangtheodoiketquahoctaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bangtheodoiketquahoctap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
