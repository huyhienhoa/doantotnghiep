<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\QuydinhQuychedaotao */

$this->title = 'Create Quydinh Quychedaotao';
$this->params['breadcrumbs'][] = ['label' => 'Quydinh Quychedaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quydinh-quychedaotao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
