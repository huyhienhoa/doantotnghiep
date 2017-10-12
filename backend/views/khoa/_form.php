<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Khoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'makhoa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tenkhoa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
