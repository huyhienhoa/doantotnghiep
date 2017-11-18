<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formadmin', [
        'model' => $model,
    ]) ?>

</div>
