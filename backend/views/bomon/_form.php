<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Khoa;

/* @var $this yii\web\View */
/* @var $model common\models\Bomon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bomon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenbomon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mabomon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'khoa_id')->dropDownList(
        ArrayHelper::map(Khoa::find()->all(),'id','tenkhoa'),['prompt'=>'Chọn...']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
