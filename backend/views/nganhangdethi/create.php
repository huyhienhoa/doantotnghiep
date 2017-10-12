<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Nganhangdethi */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Ngân hàng đề thi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nganhangdethi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
