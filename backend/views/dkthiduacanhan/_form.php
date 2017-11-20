<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use common\models\Khoa;
use common\models\Namhoc;

/* @var $this yii\web\View */
/* @var $model common\models\Dkthiduacanhan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dkthiduacanhan-form">

    <?php $form = ActiveForm::begin(); ?>

    <h4 style="font-weight: bold">I. Thông tin chung</h4>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'ngaydk')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'autoclose'=>'true',
                    'format'=>'dd/mm/yyyy',
                ],
                'options' => [
                    'class' => 'form-controller'
                ]
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'hoten')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'ngaysinh')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'autoclose'=>'true',
                    'format'=>'dd/mm/yyyy',
                ],
                'options' => [
                    'class' => 'form-controller'
                ]
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'chucvu')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <h4 style="font-weight: bold">II. Khối lượng công tác nhóm A</h4>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'CTNA_GDLT')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNA_HDTH')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNA_HDTN')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNA_CT')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNA_KN')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <h4 style="font-weight: bold">III. Khối lượng công tác nhóm B</h4>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'CTNB_NCKH')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNB_VGT')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNB_VCDKH')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTNB_CMNV')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <h4 style="font-weight: bold">IV. Các mặt công tác khác</h4>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'CTK_TGPT')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'CTK_CHPL')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
