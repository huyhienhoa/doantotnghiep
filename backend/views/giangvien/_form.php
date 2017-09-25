<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giangvien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'magiangvien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tengiangvien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bomon_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
