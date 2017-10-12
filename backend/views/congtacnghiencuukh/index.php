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

//            'loaitailieu_id',
            [
                'attribute'=>'giangvien_id',
                'label'=>'Giảng viên',
                'value'=>function($data){
                    return $data->giangvien->tengiangvien;
                },
            ],
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>function($data){
                    return $data->namhoc->name;
                },
            ],
            [
                'attribute'=>'khoa_id',
                'label'=>'Khoa',
                'value'=>function($data){
                    return $data->khoa->tenkhoa;
                },
            ],
            'filedinhkem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
