<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DbtlDcotLtPcct */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'ĐỀ BÀI TẬP LỚN, ĐỀ CƯƠNG ÔN TẬP, LỊCH THI, PHÂN CÔNG COI THI', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dbtl-dcot-lt-pcct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
