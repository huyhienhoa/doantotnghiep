<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hinhthucdaotao */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Hình thức đào tạo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hinhthucdaotao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
