<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1>
        <?php if ($this->title == 'Forbidden (#403)') ?>
            Truy cập bị từ chối
        <?php elseif ($this->title == 'Not Found (#404)'): ?>
            Không tìm thấy trang
        <?php else: ?>
            <?= $this->title ?>
        <?php endif; ?>
            
    </h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    

</div>
