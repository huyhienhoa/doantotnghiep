<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\HdgdTkbBpcgdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'HỢP ĐỒNG GIẢNG DẠY, THỜI KHÓA BIỂU, BẢNG PHÂN CÔNG GIẢNG DẠY';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hdgd-tkb-bpcgd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'loaitailieu_id',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
