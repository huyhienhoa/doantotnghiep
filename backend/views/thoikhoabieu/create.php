<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Thoikhoabieu */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Thời khóa biểu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thoikhoabieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
