<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ketquadanhgiahocphan */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketquadanhgiahocphan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
