<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Phancongcoithi */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Phân công coi thi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phancongcoithi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
