<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\QuydinhQuychedaotao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quydinh-quychedaotao-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaybanhanh')->widget(\kartik\date\DatePicker::className(),
        [
            'pluginOptions' => [
                'autoclose'=>'true',
                'format'=>'dd/mm/yyyy',
            ],
            'options' => [
                'class' => 'form-controller'
            ]
        ]) ?>


    <?= $form->field($model, 'soquyetdinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filedinhkem')->fileInput() ?>
    <?php if(!$model->isNewRecord): ?>
        <p><?=$model->filedinhkem;?></p>
        <?php if($model->filedinhkem!='nofile.jpg'):?>
            <?=Html::a('<i class="glyphicon glyphicon-trash"></i>',\yii\helpers\Url::toRoute(['quydinh-quychedaotao/xoafile','id'=>$model->id]),['class'=>'text-danger']) ?>
        <?php endif;?>

    <?php endif;?>

    <?= $form->field($model, 'namhoc_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\common\models\Namhoc::find()->all(),'id','namhoc'),['prompt'=>'Chọn...']
    ) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-floppy-saved"></i> Lưu lại' : '<i class="glyphicon glyphicon-edit"></i> Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>