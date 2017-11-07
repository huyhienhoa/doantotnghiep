<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\BangtheodoiketquahoctapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'BẢNG THEO DÕI KẾT QUẢ HỌC TẬP';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangtheodoiketquahoctap-index">

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
            'heading' => '<h3 class="panel-title"> Bảng theo dõi kết quả học tập</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'created_at',
//            'updated_at',
            'nhomhocphan',
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
            'filedinhkem',
            //'giangvien_id',
            //'hinhthucdaotao_id',
            //'trinhdo_id',

            //'hocky_id',
            //'namhoc_id',
            //'loaitailieu_id',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{download}</p>',
                'header' => 'Tải về',
//                'visible' => false
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{view}</p>',
                'header' => 'Xem',
//                'visible' => false
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{update}</p>',
                'header' => 'Sửa',
                'visible' => in_array(Yii::$app->user->identity->role, ['admin', 'trưởng bộ môn'])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{delete}</p>',
                'header' => 'Xóa',
                'visible' => in_array(Yii::$app->user->identity->role, ['admin', 'trưởng bộ môn'])
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
