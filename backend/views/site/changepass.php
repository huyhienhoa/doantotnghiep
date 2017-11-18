<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = Yii::t('app', 'Đổi mật khẩu');
 ?>
<?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false, 'class' => 'login-form']); ?>
    <?= $form->field($model, 'old_password')->passwordInput(['placeholder'=>'Mật khẩu','value'=>''])->label('Mật khẩu cũ ') ?>

     <?= $form->field($model, 'password_hash')->passwordInput(['placeholder'=>'Mật khẩu','value'=>''])->label('Mật khẩu mới') ?>

    <?= $form->field($model, 'password_hash_confirm')->passwordInput(['placeholder'=>'Nhập lại mật khẩu','value'=>''])->label('Nhập lại mật khẩu mới') ?>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
    </div>
    <?php \yii\bootstrap\ActiveForm::end(); ?>
