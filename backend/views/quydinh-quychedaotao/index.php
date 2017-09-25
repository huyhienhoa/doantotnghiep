<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\QuydinhQuychedaotaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quydinh Quychedaotaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quydinh-quychedaotao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Quydinh Quychedaotao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'ngaybanhanh',
            'soquyetdinh',
            'created_at',
            //'updated_at',
            //'filedinhkem',
            //'namhoc_id',
            //'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
