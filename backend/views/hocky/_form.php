<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Hocky */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hocky-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->dropDownList([ 'hocky1a' => 'Hocky1a', 'hocky1b' => 'Hocky1b', 'hocky2' => 'Hocky2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'namhoc_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
