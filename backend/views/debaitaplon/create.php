<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Debaitaplon */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đề bài tập lớn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debaitaplon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
