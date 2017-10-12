<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\NhdtDa */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'NGÂN HÀNG ĐỀ THI, ĐÁP ÁN', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhdt-da-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
