<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DebaitaplonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Đề bài tập lớn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debaitaplon-index">

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
            'nhomhocphan',
//            'created_at',
//            'updated_at',
            [
                'attribute'=>'monhoc_id',
                'label'=>'Môn học',
                'value'=>function($data){
                    return $data->monhoc->tenmonhoc;
                },
            ],
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>function($data){
                    return $data->namhoc->name;
                },
            ],
            'filedinhkem',
            //'hocky_id',


            //'DBTL_DCOT_LT_PCCT_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
