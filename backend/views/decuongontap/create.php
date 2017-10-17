<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Decuongontap */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đề cương ôn tập', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decuongontap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
