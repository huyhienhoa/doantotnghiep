<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\QuydinhQuychedaotaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quy định-Quy chế đào tạo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quydinh-quychedaotao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm tài liệu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}, Số lượng bản ghi : {totalCount}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','header'=>'STT'],
            'name',
            'soquyetdinh',
            'filedinhkem',
            'namhoc_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
