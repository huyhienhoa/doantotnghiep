<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Khoa */

$this->title = 'Create Khoa';
$this->params['breadcrumbs'][] = ['label' => 'Khoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
