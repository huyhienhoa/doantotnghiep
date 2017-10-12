<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\KetquadanhgiahocphanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketquadanhgiahocphan-index">

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
//            [
//            'attribute'=>'ngaythi',
//            'label'=>'Ngày thi',
//            'value'=>function($data){
//                return $data->ngaythi = \common\models\myFuncs::yearMonthDaytoDayMonthYear($data->ngaythi);
//            },
//        ],
            //'canbocoithi',
            //'canbochamthi',
            [
                'attribute'=>'monhoc_id',
                'label'=>'Môn học',
                'value'=>function($data){
                    return $data->monhoc->tenmonhoc;
                },
            ],
            'nhomhocphan',
            'filedinhkem',
            //'hocky_id',
            //'namhoc_id',

            //'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
