<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ketquadanhgiahocphan */

$this->title = 'Cập nhật bản ghi: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="ketquadanhgiahocphan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
