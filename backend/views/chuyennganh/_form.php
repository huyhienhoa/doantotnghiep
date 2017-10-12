<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Khoa;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Chuyennganh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chuyennganh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'khoa_id')->dropDownList(
        ArrayHelper::map(Khoa::find()->all(),'id','tenkhoa'),['prompt'=>'Chọn...']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
