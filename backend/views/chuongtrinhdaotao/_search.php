<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\ChuongtrinhdaotaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chuongtrinhdaotao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'ngaybanhanh') ?>

    <?= $form->field($model, 'cosodaotao') ?>

    <?= $form->field($model, 'quyetdinhso') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'filedinhkem') ?>

    <?php // echo $form->field($model, 'trinhdo_id') ?>

    <?php // echo $form->field($model, 'hinhthucdaotao_id') ?>

    <?php // echo $form->field($model, 'khoa_id') ?>

    <?php // echo $form->field($model, 'chuyennganh_id') ?>

    <?php // echo $form->field($model, 'CTDT_DCHP_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
