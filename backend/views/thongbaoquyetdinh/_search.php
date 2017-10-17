<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\ThongbaoQuyetdinhSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thongbao-quyetdinh-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'ngaycohieuluc') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'filedinhkem') ?>

    <?php // echo $form->field($model, 'hinhthucdaotao_id') ?>

    <?php // echo $form->field($model, 'trinhdo_id') ?>

    <?php // echo $form->field($model, 'loaitailieu_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
