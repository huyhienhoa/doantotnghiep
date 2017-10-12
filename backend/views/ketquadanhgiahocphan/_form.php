<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use common\models\Hocky;
use common\models\Namhoc;
use common\models\Monhoc;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Ketquadanhgiahocphan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ketquadanhgiahocphan-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nhomhocphan')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'canbocoithi')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'canbochamthi')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'ngaythi')->widget(\kartik\date\DatePicker::className(),
                [
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
            <?= $form->field($model, 'hocky_id')->dropDownList(
                ArrayHelper::map(Hocky::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'namhoc_id')->dropDownList(
                ArrayHelper::map(Namhoc::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'monhoc_id')->dropDownList(
                ArrayHelper::map(Monhoc::find()->all(),'id','tenmonhoc'),['prompt'=>'Chọn...']
            ) ?>
        </div>

    </div>











    <?= $form->field($model, 'filedinhkem')->fileInput() ?>

    <?php if(!$model->isNewRecord): ?>
        <p><?=$model->filedinhkem;?></p>
        <?php if($model->filedinhkem!='nofile.jpg'):?>
            <?=Html::a('<i class="glyphicon glyphicon-trash"></i>', Url::toRoute(['ketquadanhgiahocphan/xoafile','id'=>$model->id]),['class'=>'text-danger']) ?>
        <?php endif;?>

    <?php endif;?>







    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
