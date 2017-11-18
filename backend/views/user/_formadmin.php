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
                <?php if ($model->isNewRecord): ?>
                    <?= $form->field($model, 'username') ?>
                <?php endif; ?>
                
                <?= $form->field($model, 'email') ?>
                
                <?php if ($model->isNewRecord): ?>
                    <?= $form->field($model, 'password_hash')->textInput(['type' => 'password']) ?>
                <?php endif; ?>


        <div class="form-group">
            <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
