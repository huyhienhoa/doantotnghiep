<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TdKtKl */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'THI ĐUA, KHEN THƯỞNG, KỈ LUẬT', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="td-kt-kl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
