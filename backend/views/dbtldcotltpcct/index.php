<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DbtlDcotLtPcctSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ĐỀ BÀI TẬP LỚN, ĐỀ CƯƠNG ÔN TẬP, LỊCH THI, PHÂN CÔNG COI THI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dbtl-dcot-lt-pcct-index">

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
//            'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
