<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\BangtheodoiketquahoctapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bangtheodoiketquahoctaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangtheodoiketquahoctap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bangtheodoiketquahoctap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'created_at',
            'updated_at',
            'nhomhocphan',
            //'filedinhkem',
            //'giangvien_id',
            //'hinhthucdaotao_id',
            //'trinhdo_id',
            //'monhoc_id',
            //'hocky_id',
            //'namhoc_id',
            //'loaitailieu_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
