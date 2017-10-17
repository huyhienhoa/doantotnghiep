<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lichgiangday */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'LỊCH GIẢNG DẠY', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichgiangday-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
