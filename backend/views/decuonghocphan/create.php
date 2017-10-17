<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Decuonghocphan */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đề cương học phần', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decuonghocphan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
