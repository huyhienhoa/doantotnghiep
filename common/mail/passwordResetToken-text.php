<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Xin chào <?= $user->username ?>,

Bạn vui lòng truy cập link sau để thiết lập mật khẩu mới:

<?= $resetLink ?>
