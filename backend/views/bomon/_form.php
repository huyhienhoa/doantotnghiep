<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bomon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bomon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenbomon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mabomon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'khoa_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
