<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hocky */

$this->title = 'Create Hocky';
$this->params['breadcrumbs'][] = ['label' => 'Hockies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hocky-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
