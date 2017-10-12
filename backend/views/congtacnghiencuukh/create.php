<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Congtacnghiencuukh */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'CÔNG TÁC NGHIÊN CỨU KHOA HỌC', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congtacnghiencuukh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
