<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\DkthiduataptheSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dkthiduatapthe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'namhoc_id') ?>

    <?= $form->field($model, 'khoa_id') ?>

    <?= $form->field($model, 'ngaydk') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'sogiangvien') ?>

    <?php // echo $form->field($model, 'sogiangviencomat') ?>

    <?php // echo $form->field($model, 'CTNA_GDLT') ?>

    <?php // echo $form->field($model, 'CTNA_HDTH') ?>

    <?php // echo $form->field($model, 'CTNA_HDTN') ?>

    <?php // echo $form->field($model, 'CTNA_CT') ?>

    <?php // echo $form->field($model, 'CTNA_KN') ?>

    <?php // echo $form->field($model, 'CTNB_VGT') ?>

    <?php // echo $form->field($model, 'CTNB_NCKH') ?>

    <?php // echo $form->field($model, 'CTNB_CMNV') ?>

    <?php // echo $form->field($model, 'CTNB_TGPT') ?>

    <?php // echo $form->field($model, 'CTNB_CHPL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
