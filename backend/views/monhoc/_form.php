<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Monhoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monhoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenmonhoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mamonhoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sotinchi')->textInput() ?>

    <?= $form->field($model, 'bomon_id')->textInput() ?>

    <?= $form->field($model, 'thuchanh')->dropDownList([ 'co' => 'Co', 'khong' => 'Khong', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'baitaplon')->dropDownList([ 'co' => 'Co', 'khong' => 'Khong', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
