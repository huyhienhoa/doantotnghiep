<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Bomon */

$this->title = 'Create Bomon';
$this->params['breadcrumbs'][] = ['label' => 'Bomons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bomon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
