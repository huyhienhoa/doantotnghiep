<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ThongbaoQuyetdinh */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'THÔNG BÁO,QUYẾT ĐỊNH', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thongbao-quyetdinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
