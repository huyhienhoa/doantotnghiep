<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hinhthucdaotao */

$this->title = 'Cập nhật bản ghi'.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hình thức đào tạo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="hinhthucdaotao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
