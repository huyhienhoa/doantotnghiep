<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\ThongbaoQuyetdinhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'THÔNG BÁO, QUYẾT ĐỊNH';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thongbao-quyetdinh-index">

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
                'attribute'=>'ngaycohieuluc',
                'label'=>'Ngày có hiệu lực',
                'value'=>function($data){
                    return $data->ngaycohieuluc = \common\models\myFuncs::yearMonthDaytoDayMonthYear($data->ngaycohieuluc);
                },
            ],
//            'created_at',
//            'updated_at',

            [
                'attribute'=>'hinhthucdaotao_id',
                'label'=>'Hình thức đào tạo',
                'value'=>function($data){
                    return $data->hinhthucdaotao->name;
                },
            ],
            [
                'attribute'=>'trinhdo_id',
                'label'=>'Trình độ',
                'value'=>function($data){
                    return $data->trinhdo->name;
                },
            ],
            'filedinhkem',
//            'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
