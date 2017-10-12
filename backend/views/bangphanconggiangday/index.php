<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\BangphanconggiangdaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bảng phân công giảng dạy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangphanconggiangday-index">

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
//            'created_at',
//            'updated_at',
            [
                'attribute'=>'ngayky',
                'label'=>'Ngày ký',
                'value'=>function($data){
                    return $data->ngayky = \common\models\myFuncs::yearMonthDaytoDayMonthYear($data->ngayky);
                },
            ],
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>function($data){
                    return $data->bomon->tenbomon;
                },
            ],
            'filedinhkem',

            //'hocky_id',
            //'namhoc_id',
            //'HDGD_TKB_BPCGD__id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
