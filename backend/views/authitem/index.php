<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\AuthitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phân quyền';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authitem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Thiết lập quyền', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
        'toolbar'=> [
            ['content'=>
                '{export}'
            ],
        ],
        'responsive' => true,
        'hover' => true,
        'panel' => [
            'heading' => '<h3 class="panel-title">Phân quyền</h3>',
            'type' => 'primary',
            'showFooter' => false
        ],

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'vaitro',
            [
                'attribute'=>'khoa',
                'value'=>function($data)
                {
                    return (!is_null($data->khoa))?$data->khoa:'';
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'header' => '',
                'buttons'=>[
                    'view'=>function ($url, $model) {
                        $t = 'index.php?r=authitem/view&idkhoa='.$model->idkhoa.'&idvaitro='.$model->idvaitro;
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',Url::to($t));
                    },
                    'update'=>function ($url, $model) {
                        $t = 'index.php?r=authitem/update&idkhoa='.$model->idkhoa.'&idvaitro='.$model->idvaitro;
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',Url::to($t));
                    },
                    'delete' => function ($url, $model) {
                        $t = 'index.php?r=authitem/delete&idkhoa='.$model->idkhoa.'&idvaitro='.$model->idvaitro;
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>',Url::to($t), [
                                    'title' => Yii::t('app', 'lead-delete'),'data-pjax'=>0,'data-confirm'=>'Bạn có chắc là sẽ xóa mục này không?','data-method'=>'post'
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
