<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Hinhthucdaotao;
use common\models\Trinhdo;

/* @var $this yii\web\View */
/* @var $model common\models\ThongbaoQuyetdinh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thongbao-quyetdinh-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'ngaycohieuluc')->widget(DatePicker::className(),
                [
                    'pluginOptions' => [
                        'autoclose'=>'true',
                        'format'=>'dd/mm/yyyy',
                    ],
                    'options' => [
                        'class' => 'form-controller'
                    ]
                ]) ?></div>
        <div class="col-md-4">
            <?= $form->field($model, 'hinhthucdaotao_id')->dropDownList(
                ArrayHelper::map(Hinhthucdaotao::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'trinhdo_id')->dropDownList(
                ArrayHelper::map(Trinhdo::find()->all(),'id','name'),['prompt'=>'Chọn...']
            ) ?>
        </div>
    </div>



    <?= $form->field($model, 'filedinhkem')->fileInput() ?>

    <?php if(!$model->isNewRecord): ?>
    <p><?=$model->filedinhkem;?></p>
    <?php if($model->filedinhkem!='nofile.jpg'):?>
        <?=Html::a('<i class="glyphicon glyphicon-trash"></i>', Url::toRoute(['thongbaoquyetdinh/xoafile','id'=>$model->id]),['class'=>'text-danger']) ?>
    <?php endif;?>
    <?php endif; ?>





    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
