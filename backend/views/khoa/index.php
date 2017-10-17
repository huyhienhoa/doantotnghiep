<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\KhoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khoa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoa-index">

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
            'makhoa',
            'tenkhoa',



            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{download}',
//                'header' => 'Download',
                'visible' => false
            ],
//            ['class' => 'yii\grid\ActionColumn'],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '<p class="text-center">{download}</p>',
            'header' => 'Download',
                'visible' => false
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
            'visible' => in_array(Yii::$app->user->identity->role, ['admin'])
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '<p class="text-center">{delete}</p>',
            'header' => '<p class="text-center">Xóa</p>',
            'visible' => in_array(Yii::$app->user->identity->role, ['admin'])
        ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
