<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\LichthiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'LỊCH THI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lichthi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= $btn_them; ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'created_at',
//            'updated_at',
            [
                'attribute'=>'hinhthucdaotao_id',
                'label'=>'Hình thức đào tạo',
                'value'=>function($data){
                    return $data->hinhthucdaotao->name;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'hinhthucdaotao_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Hinhthucdaotao::find()->all(),
                        'id','name' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            [
                'attribute'=>'hocky_id',
                'label'=>'Học kỳ',
                'value'=>function($data){
                    return $data->hocky->name;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'hocky_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Hocky::find()->all(),
                        'id','name' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            [
                'attribute'=>'namhoc_id',
                'label'=>'Năm học',
                'value'=>function($data){
                    return $data->namhoc->name;
                },
                'filter'=>Html::activeDropDownList($searchModel,
                    'namhoc_id' ,
                    \yii\helpers\ArrayHelper::map(\common\models\Namhoc::find()->all(),
                        'id','name' ),
                    ['prompt'=>'Tất cả','class'=>'form-control']
                ),
            ],
            'filedinhkem',
            //
            //'DBTL_DCOT_LT_PCCT_id',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '<p class="text-center">{download}</p>',
                'header' => '<p class="text-center">Tải về</p>',
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
