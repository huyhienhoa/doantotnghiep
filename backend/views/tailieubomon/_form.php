<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use common\models\Bomon;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Tailieubomon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tailieubomon-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bomon_id')->dropDownList(
        ArrayHelper::map(Bomon::find()->all(),'id','tenbomon'),['prompt'=>'Chọn...']
    ) ?>

    <?= $form->field($model, 'filedinhkem')->fileInput() ?>

    <?php if(!$model->isNewRecord): ?>
        <p><?=$model->filedinhkem;?></p>
        <?php if($model->filedinhkem!='nofile.jpg'):?>
            <?=Html::a('<i class="glyphicon glyphicon-trash"></i>', Url::toRoute(['tailieubomon/xoafile','id'=>$model->id]),['class'=>'text-danger']) ?>
        <?php endif;?>

    <?php endif;?>



    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
