<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Loaitailieu */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Loại tài liệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaitailieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
