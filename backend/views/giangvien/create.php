<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Giảng viên', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giangvien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
