<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Chuyennganh */

$this->title = 'Update Chuyennganh: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Chuyennganhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chuyennganh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
