<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lichthi */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Lịch thi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichthi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
