<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\CongtacnghiencuukhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CÔNG TÁC NGHIÊN CỨU KHOA HỌC';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congtacnghiencuukh-index">

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
        'toolbar'=> [
                ['content'=>
                    '{export}'
                ],
            ], 
        'panel' => [
            'heading' => '<h3 class="panel-title">Công tác nghiên cứu khoa học</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'created_at',
//            'updated_at',

//            'loaitailieu_id',
            [
                'attribute'=>'giangvien_id',
                'label'=>'Giảng viên',
                'value'=>function($data){
                    return $data->giangvien->tengiangvien;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'giangvien_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Giangvien::find()->all(),
                        'id','tengiangvien' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>function($data){
                    return $data->namhoc->name;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'namhoc_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Namhoc::find()->all(),
                        'id','name' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            [
                'attribute'=>'khoa_id',
                'label'=>'Khoa',
                'value'=>function($data){
                    return $data->khoa->tenkhoa;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'khoa_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Khoa::find()->all(),
                        'id','tenkhoa' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            'filedinhkem',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{download}</p>',
                'header' => '<p class="text-center">Tải về</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{view}</p>',
                'header' => '<p class="text-center">Xem</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{update}</p>',
                'header' => '<p class="text-center">Sửa</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{delete}</p>',
                'header' => '<p class="text-center">Xóa</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
