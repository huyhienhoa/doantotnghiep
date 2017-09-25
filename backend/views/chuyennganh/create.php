<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Chuyennganh */

$this->title = 'Create Chuyennganh';
$this->params['breadcrumbs'][] = ['label' => 'Chuyennganhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuyennganh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
