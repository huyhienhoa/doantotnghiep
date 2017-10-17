<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng nhập';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Tài khoản') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Mật khẩu') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Nhớ mật khẩu của tôi') ?>

                <div style="color:#999;margin:1em 0">
                    <?= Html::a('Bạn quên mật khẩu?', ['site/request-password-reset']) ?>.
                </div>
            
                <div class="form-group">
                    <?= Html::submitButton('<i class="glyphicon glyphicon-user"></i> Đăng nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
