<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Bangtheodoiketquahoctap */

$this->title = 'Create Bangtheodoiketquahoctap';
$this->params['breadcrumbs'][] = ['label' => 'Bangtheodoiketquahoctaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangtheodoiketquahoctap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
