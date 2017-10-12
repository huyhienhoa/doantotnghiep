<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HdgdTkbBpcgd */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'HỢP ĐỒNG GIẢNG DẠY, THỜI KHÓA BIỂU, BẢNG PHÂN CÔNG GIẢNG DẠY', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hdgd-tkb-bpcgd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
