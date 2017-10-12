<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\ThoikhoabieuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thời khóa biểu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thoikhoabieu-index">

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
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>function($data){
                    return $data->namhoc->name;
                },
            ],
            [
                'attribute'=>'hocky_id',
                'label'=>'Học kỳ',
                'value'=>function($data){
                    return $data->hocky->name;
                },
            ],
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>function($data){
                    return $data->bomon->tenbomon;
                },
            ],
            //'created_at',
            //'updated_at',
            'filedinhkem',
            //'HDGD_TKB_BPCGD__id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
