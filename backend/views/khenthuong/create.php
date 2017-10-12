<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Khenthuong */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Khen thưởng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khenthuong-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
