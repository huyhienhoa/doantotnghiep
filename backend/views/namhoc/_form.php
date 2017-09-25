<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Namhoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="namhoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namhoc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
