<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\TailieubomonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tailieubomon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $btn_them; ?>
    </p>


    <?= kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
        'toolbar'=> [
                ['content'=>
                    '{export}'
                ],
            ], 
        'panel' => [
            'heading' => '<h3 class="panel-title">Tài liệu bộ môn</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'created_at',
//            'updated_at',

            //'loaitailieu_id',
            [
                'attribute'=>'bomon_id',
                'label'=>'Bộ môn',
                'value'=>function($data){
                    return $data->bomon->tenbomon;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'bomon_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Bomon::find()->all(),
                        'id','tenbomon' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            'filedinhkem',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{download}</p>',
                'header' => '<p class="text-center">Tải về</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{view}</p>',
                'header' => '<p class="text-center">Xem</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{update}</p>',
                'header' => '<p class="text-center">Sửa</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{delete}</p>',
                'header' => '<p class="text-center">Xóa</p>',
                'visible' => in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))])
            
            ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
