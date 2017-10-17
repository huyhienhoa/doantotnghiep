<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\CtdtdchpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CHƯƠNG TRÌNH ĐÀO TẠO, ĐỀ CƯƠNG HỌC PHẦN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctdtdchp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}, Số lượng bản ghi : {totalCount}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
