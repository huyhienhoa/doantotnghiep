<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DapanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Đáp án';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapan-index">

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
                'attribute'=>'nganhangdethi_id',
                'label'=>'Ngân hàng đề thi',
                'value'=>function($data){
                    return $data->nganhangdethi->name;
                },
            ],
            'filedinhkem',
//            'created_at',
//            'updated_at',

            //'NHDT_DA_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
