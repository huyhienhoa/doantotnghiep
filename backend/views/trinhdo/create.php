<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Trinhdo */

$this->title = 'Create Trinhdo';
$this->params['breadcrumbs'][] = ['label' => 'Trinhdos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trinhdo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
