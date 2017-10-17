<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Giangvien;
use common\models\Namhoc;

/* @var $this yii\web\View */
/* @var $model common\models\Kiluat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kiluat-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'giangvien_id')->dropDownList(
                ArrayHelper::map(Giangvien::find()->all(),'id','tengiangvien'),['prompt'=>'Chọn...']
            ) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'namhoc_id')->dropDownList(
                ArrayHelper::map(Namhoc::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>
    </div>

    <?= $form->field($model, 'filedinhkem')->fileInput() ?>

    <?php if(!$model->isNewRecord): ?>
        <p><?=$model->filedinhkem;?></p>
        <?php if($model->filedinhkem!='nofile.jpg'):?>
            <?=Html::a('<i class="glyphicon glyphicon-trash"></i>', Url::toRoute(['kiluat/xoafile','id'=>$model->id]),['class'=>'text-danger']) ?>
        <?php endif;?>

    <?php endif;?>





    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
