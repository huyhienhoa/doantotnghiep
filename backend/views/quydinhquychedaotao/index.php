<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\QuydinhQuychedaotaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'QUY ĐỊNH, QUY CHẾ ĐÀO TẠO';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quydinh-quychedaotao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            [
                'attribute'=>'ngaybanhanh',
                'label'=>'Ngày ban hành',
                'value'=>function($data){
                    return $data->ngaybanhanh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($data->ngaybanhanh);
                },
            ],
            'soquyetdinh',
//            'created_at',
            //'updated_at',
            'filedinhkem',
            //'namhoc_id',
            //'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
