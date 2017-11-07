<?php

use yii\helpers\Html;

//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\Url;

$this->title = 'Sao lưu & phục hồi dữ liệu';

?>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <?php
        echo
        kartik\grid\GridView::widget([
            'id' => 'install-grid',
            'export' => false,
            'summary'=>'Trang {page}/{pageCount}. Số lượng bản ghi: {totalCount}',
            'dataProvider' => $dataProvider,
            'resizableColumns' => false,
            'showPageSummary' => false,
            'headerRowOptions' => ['class' => 'kartik-sheet-style'],
            'filterRowOptions' => ['class' => 'kartik-sheet-style'],
            'responsive' => true,
            'hover' => true,
            'panel' => [
                'heading' => '<h3 class="panel-title"> Sao lưu và phục hồi dữ liệu</h3>',
                'type' => 'primary',
                'showFooter' => false
            ],
            // set your toolbar
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>  Tạo bản sao lưu mới ', ['create'], ['class' => 'btn btn-success create-backup margin-right5'])
                ],
            ],
            'columns' => array(

                [
                    'attribute' => 'name',
                    'label' => 'Tên bản sao lưu'
                ],
                'size:size',
                [
                    'attribute' => 'create_time',
                    'label' => 'Ngày tạo'
                ],
                [
                    'class' => 'kartik\grid\ActionColumn',
                    'template' => '{restore_action}',
                    'header' => 'Phục hồi',
                    'buttons' => [
                        'restore_action' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-import"></span>', $url, [
                                'title' => 'Phục hồi','class'=>'restore'
                            ]);
                        }
                    ],
                    'urlCreator' => function ($action, $model, $key, $index) {
                        if ($action === 'restore_action') {
							$url = Url::to(['backuprestore/restore', 'filename' => $model['name']]);
                            return $url;
                        }
                    }
                ],
                [
                    'class' => 'kartik\grid\ActionColumn',
                    'template' => '{delete_action}',
                    'header' => 'Xóa',
                    'buttons' => [
                        'delete_action' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('app', 'Xóa database'),'class'=>'delete',
                            ]);
                        }
                    ],
                    'urlCreator' => function ($action, $model, $key, $index) {
                        if ($action === 'delete_action') {
                            $url = Url::to(['backuprestore/delete', 'filename' => $model['name']]);
                            return $url;
                        }
                    }
                ],
            ),
        ]);
        ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
