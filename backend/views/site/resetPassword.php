<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đổi mật khẩu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Vui lòng điền mật khẩu mới:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true])->label('Mật khẩu mới') ?>
                <div class="form-group">
                    <label>Xác nhận lại mật khẩu</label>
                    <?=\yii\helpers\BaseHtml::input('password','password_check',NULL,['class' =>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?= Html::submitButton('<i class="glyphicon glyphicon-floppy-saved"></i> Lưu lại', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
