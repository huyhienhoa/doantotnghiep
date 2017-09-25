<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bangtheodoiketquahoctap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bangtheodoiketquahoctap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'nhomhocphan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filedinhkem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'giangvien_id')->textInput() ?>

    <?= $form->field($model, 'hinhthucdaotao_id')->textInput() ?>

    <?= $form->field($model, 'trinhdo_id')->textInput() ?>

    <?= $form->field($model, 'monhoc_id')->textInput() ?>

    <?= $form->field($model, 'hocky_id')->textInput() ?>

    <?= $form->field($model, 'namhoc_id')->textInput() ?>

    <?= $form->field($model, 'loaitailieu_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
