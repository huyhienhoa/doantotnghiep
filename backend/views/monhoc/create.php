<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Monhoc */

$this->title = 'Create Monhoc';
$this->params['breadcrumbs'][] = ['label' => 'Monhocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monhoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
