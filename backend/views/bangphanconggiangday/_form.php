<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Bomon;
use common\models\Hocky;
use common\models\Namhoc;

/* @var $this yii\web\View */
/* @var $model common\models\Bangphanconggiangday */
/* @var $form yii\widgets\ActiveForm */
use kartik\date\DatePicker;
?>

<div class="bangphanconggiangday-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'ngayky')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'autoclose'=>'true',
                    'format'=>'dd/mm/yyyy',
                ],
                'options' => [
                    'class' => 'form-controller'
                ]
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'bomon_id')->dropDownList(
                ArrayHelper::map(Bomon::find()->all(),'id','tenbomon'),['prompt'=>'Chọn...']
            ) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'hocky_id')->dropDownList(
                ArrayHelper::map(Hocky::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'namhoc_id')->dropDownList(
                ArrayHelper::map(Namhoc::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>
    </div>

    <?= $form->field($model, 'filedinhkem')->fileInput() ?>

    <?php if(!$model->isNewRecord): ?>
        <p><?=$model->filedinhkem;?></p>
        <?php if($model->filedinhkem!='nofile.jpg'):?>
            <?=Html::a('<i class="glyphicon glyphicon-trash"></i>', Url::toRoute(['bangphanconggiangday/xoafile','id'=>$model->id]),['class'=>'text-danger']) ?>
        <?php endif;?>

    <?php endif;?>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
