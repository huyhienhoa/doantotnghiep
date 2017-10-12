<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Chuongtrinhdaotao */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Chương trình đào tạo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuongtrinhdaotao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
