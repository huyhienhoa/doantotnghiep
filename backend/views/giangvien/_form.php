<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Bomon;
/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giangvien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'magiangvien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tengiangvien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bomon_id')->dropDownList(
        ArrayHelper::map(Bomon::find()->all(),'id','tenbomon'),['prompt'=>'Chọn...']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
