<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dkthiduacanhan */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đăng ký thi đua cá nhân', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dkthiduacanhan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
