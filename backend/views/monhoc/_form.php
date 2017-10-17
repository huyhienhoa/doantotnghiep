<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Bomon;
/* @var $this yii\web\View */
/* @var $model common\models\Monhoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monhoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'mamonhoc')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'tenmonhoc')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'sotinchi')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'bomon_id')->dropDownList(
                ArrayHelper::map(Bomon::find()->all(),'id','tenbomon' ),
                [
                    'prompt'=>'Chọn...'
                ]
            ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'thuchanh')->dropDownList([ 'co' => 'Có', 'khong' => 'Không', ], ['prompt' => 'Chọn...']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'baitaplon')->dropDownList([ 'co' => 'Có', 'khong' => 'Không', ], ['prompt' => 'Chọn...']) ?>
        </div>
    </div>













    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
