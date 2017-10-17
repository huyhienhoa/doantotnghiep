<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dapan */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đáp án', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
