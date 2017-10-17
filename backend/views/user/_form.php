<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<!--<div class="container">-->
    <div class="user-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'username') ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'email') ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'password_hash')->textInput(['type' => 'password']) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'role')->dropDownList([
                    'admin' => 'admin',
                    'trưởng khoa' => 'Trưởng khoa',
                    'trưởng bộ môn' => 'Trưởng bộ môn',
                    'giảng viên' => 'Giảng viên'
                ]) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<!--</div>-->

