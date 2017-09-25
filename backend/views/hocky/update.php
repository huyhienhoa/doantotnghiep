<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hocky */

$this->title = 'Update Hocky: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Hockies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hocky-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
