<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\MonhocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Môn học';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monhoc-index">

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

            'id',
            'mamonhoc',
            'tenmonhoc',
            'sotinchi',
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>function($data){
                    return $data->bomon->tenbomon;
                },
            ],
            //'thuchanh',
            //'baitaplon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
