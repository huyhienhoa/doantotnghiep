<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Authitem */

$this->title = 'Thiết lập quyền';
$this->params['breadcrumbs'][] = ['label' => 'Phân quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authitem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
