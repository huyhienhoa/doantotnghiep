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
        <?= $btn_them; ?>
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

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{download}</p>',
                'header' => '<p class="text-center">Download</p>',
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
