<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Trinhdo */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Trình độ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trinhdo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
