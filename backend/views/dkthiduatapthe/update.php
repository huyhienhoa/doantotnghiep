<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dkthiduatapthe */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đăng ký thi đua tập thể', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dkthiduatapthe-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->ngaydk = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
