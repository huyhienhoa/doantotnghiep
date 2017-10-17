<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\CongtacnghiencuukhSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congtacnghiencuukh-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'filedinhkem') ?>

    <?php // echo $form->field($model, 'loaitailieu_id') ?>

    <?php // echo $form->field($model, 'giangvien_id') ?>

    <?php // echo $form->field($model, 'namhoc_id') ?>

    <?php // echo $form->field($model, 'khoa_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
