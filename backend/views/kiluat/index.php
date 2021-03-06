<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\KiluatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'KỈ LUẬT';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kiluat-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $btn_them; ?>
    </p>


    <?= kartik\grid\GridView::widget([
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
            'heading' => '<h3 class="panel-title">Kỉ luật</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'created_at',
//            'updated_at',
            [
                'attribute'=>'giangvien_id',
                'label'=>'Tên giảng viên',
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
            'filedinhkem',

            //'TD_KT_KL_id',

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
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
