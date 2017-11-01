<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hopdonggiangday */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'HỢP ĐỒNG GIẢNG DẠY', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hopdonggiangday-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
