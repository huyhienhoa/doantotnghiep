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
            'nhomhocphan',
            [
                'attribute'=>'monhoc_id',
                'label'=>'Môn học',
                'value'=>function($data){
                    return $data->monhoc->tenmonhoc;
                },
            ],
            'filedinhkem',
            //'giangvien_id',
            //'hinhthucdaotao_id',
            //'trinhdo_id',

            //'hocky_id',
            //'namhoc_id',
            //'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
