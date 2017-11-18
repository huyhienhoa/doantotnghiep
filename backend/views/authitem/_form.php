<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Auth;
$danhsachquyen = Auth::find()->where('parent_id is null')->all();
/* @var $this yii\web\View */
/* @var $model common\models\Authitem */
/* @var $form yii\widgets\ActiveForm */
?>
 <?= Yii::$app->session->getFlash('success') ?>
<div class="authitem-form">

    <?php $form = ActiveForm::begin(); ?>
	
   <?= $form->field($model, 'roles_id')->dropDownList(
            \yii\helpers\ArrayHelper::map(\common\models\Roles::find()->where(['>=','id',Yii::$app->user->identity->roles->id])->all(),'id','name'),['prompt'=>'Chọn vai trò']
        ) ?>
    <?= $form->field($model, 'khoa_id')->dropDownList(
            \yii\helpers\ArrayHelper::map(\common\models\Khoa::find()->all(),'id','tenkhoa'),['prompt'=>'Không thuộc khoa nào']
        ) ?>

	<label for="">Phân quyền chi tiết </label><br><br>
	<label for="">Full quyền</label>
	<input type="checkbox" id="fullquyen">
	<br><br>
	<?php if (count($danhsachquyen)): ?>
		<?php foreach($danhsachquyen as $key=>$quyen): ?>
			<label for=""><?= $quyen->name ?>:  </label>
				<div class="form-group">
					<div class="quyenhan">
					<?php foreach($quyen->auths as $item): ?>
						
							<label><input type="checkbox" name="Authitem[auth_id][]" value="<?= $item->id ?>" <?= (in_array($item->id,$model->auth_id))?'checked':''  ?>> <?= $item->name ?></label>
					<?php endforeach; ?>
					</div>
				</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<div class="help-block"></div>
    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> Lưu lại', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/js/role.js',[ 'depends' => ['backend\assets\AppAsset'], 'position' => \yii\web\View::POS_END ]); ?>