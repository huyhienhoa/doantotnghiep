<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DkthiduacanhanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Đăng ký thi đua cá nhân';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dkthiduacanhan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
        'toolbar'=> [
            ['content'=>
                '{export}'
            ],
        ],
        'responsive' => true,
        'hover' => true,
        'panel' => [
            'heading' => '<h3 class="panel-title">Đăng ký thi đua cá nhân</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'khoa_id',
//            'namhoc_id',
//            [
//                'attribute'=>'khoa_id',
//                'label'=>'Khoa',
//                'value'=>function($data){
//                    return $data->khoa->tenkhoa;
//                },
//                'filter'=>Html::activeDropDownList($searchModel,
//                    'khoa_id' ,
//                    \yii\helpers\ArrayHelper::map(\common\models\Khoa::find()->all(),
//                        'id','tenkhoa' ),
//                    ['prompt'=>'Tất cả','class'=>'form-control']
//                ),
//            ],
//            [
//                'attribute'=>'namhoc_id',
//                'label'=>'Năm học',
//                'value'=>function($data){
//                    return $data->namhoc->name;
//                },
//                'filter'=>Html::activeDropDownList($searchModel,
//                    'namhoc_id' ,
//                    \yii\helpers\ArrayHelper::map(\common\models\Namhoc::find()->all(),
//                        'id','name' ),
//                    ['prompt'=>'Tất cả','class'=>'form-control']
//                ),
//            ],

            [
                'attribute'=>'ngaydk',
                'label'=>'Ngày đăng ký',
                'value'=>function($data){
                    return $data->ngaydk = \common\models\myFuncs::yearMonthDaytoDayMonthYear($data->ngaydk);
                },
            ],
//            'ngaydk',
            //'created_at',
            //'updated_at',
            'hoten',
            'chucvu',
            //'ngaysinh',
            //'CTNA_GDLT',
            //'CTNA_HDTH',
            //'CTNA_HDTN',
            //'CTNA_CT',
            //'CTNA_KN',
            //'CTNB_NCKH',
            //'CTNB_VGT',
            //'CTNB_VCDKH',
            //'CTNB_CMNV',
            //'CTK_TGPT',
            //'CTK_CHPL',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{view}</p>',
                'header' => '<p class="text-center">Xem</p>',
//                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{update}</p>',
                'header' => '<p class="text-center">Sửa</p>',
//                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{delete}</p>',
                'header' => '<p class="text-center">Xóa</p>',
//                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
