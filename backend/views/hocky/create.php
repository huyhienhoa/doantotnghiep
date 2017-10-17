<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hocky */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Học kỳ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hocky-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
