<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\ChuongtrinhdaotaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chương trình đào tạo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuongtrinhdaotao-index">

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
                'attribute'=>'ngaybanhanh',
                'label'=>'Ngày ban hành',
                'value'=>function($data){
                    return $data->ngaybanhanh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($data->ngaybanhanh);
                },
            ],
            'cosodaotao',
            'quyetdinhso',
            //'created_at',
            //'updated_at',
            'filedinhkem',
            //'trinhdo_id',
            //'hinhthucdaotao_id',
            //'khoa_id',
            //'chuyennganh_id',
            //'CTDT_DCHP_id',

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
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
