<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\LichgiangdaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'LỊCH GIẢNG DẠY';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichgiangday-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $btn_them; ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'nhomhocphan',
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
            'filedinhkem',
//            'created_at',
            //'updated_at',
            //'monhoc_id',
            //'hocky_id',


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
