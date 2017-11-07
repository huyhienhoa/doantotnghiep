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


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $btn_them; ?>
    </p>

    <?= kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
        'responsive' => true,
        'hover' => true,
        'panel' => [
            'heading' => '<h3 class="panel-title">Kết quả đánh giá học phần</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],
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
                'filter'=>Html::activeDropDownList($searchModel,
                    'monhoc_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Monhoc::find()->all(),
                        'id','tenmonhoc' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            'nhomhocphan',
            'filedinhkem',
            //'hocky_id',
            //'namhoc_id',

            //'loaitailieu_id',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{download}</p>',
                'header' => '<p class="text-center">Tải về</p>',
//                'visible' => false
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{view}</p>',
                'header' => '<p class="text-center">Xem</p>',
//                'visible' => false
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{update}</p>',
                'header' => '<p class="text-center">Sửa</p>',
                'visible' => in_array(Yii::$app->user->identity->role, ['admin', 'trưởng bộ môn'])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{delete}</p>',
                'header' => '<p class="text-center">Xóa</p>',
                'visible' => in_array(Yii::$app->user->identity->role, ['admin', 'trưởng bộ môn'])
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
