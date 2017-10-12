<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\LichthiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lịch thi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichthi-index">

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
            [
                'attribute'=>'hinhthucdaotao_id',
                'label'=>'Hình thức đào tạo',
                'value'=>function($data){
                    return $data->hinhthucdaotao->name;
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
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>function($data){
                    return $data->namhoc->name;
                },
            ],
            'filedinhkem',
            //
            //'DBTL_DCOT_LT_PCCT_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
