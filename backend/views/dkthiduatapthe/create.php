<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dkthiduatapthe */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đăng ký thi đua tập thể', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dkthiduatapthe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
