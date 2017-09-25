<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\MonhocSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monhoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tenmonhoc') ?>

    <?= $form->field($model, 'mamonhoc') ?>

    <?= $form->field($model, 'sotinchi') ?>

    <?= $form->field($model, 'bomon_id') ?>

    <?php // echo $form->field($model, 'thuchanh') ?>

    <?php // echo $form->field($model, 'baitaplon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
