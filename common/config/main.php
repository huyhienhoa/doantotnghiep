<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'modules'=>[
        'pdfjs' => [
            'class' => '\yii2assets\pdfjs\Module',
        ],
    ],

];
