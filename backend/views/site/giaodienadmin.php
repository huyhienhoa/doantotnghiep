<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03-Nov-17
 * Time: 3:28 PM
 */
$this->title = 'Quản lý tài liệu';
?>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="stylesheet" href="../../css/giaodienadmin.css" type="text/css">
<div class="container-fluid full">
    <div class="row">
        <div class="col-md-12">
            <h3>QUẢN LÝ HỆ THỐNG</h3>
            <div class="row">
                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['user/index'])?>" style="color: black; text-decoration: none; padding-left: 20px" ><span class="glyphicon glyphicon-user text-center"></span> Quản lý tài khoản</a>
                    </h1>
                </div>
                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['baocaothongke/index'])?>" style="color: black; text-decoration: none; padding-left: 20px" ><span class="glyphicon glyphicon-user text-center"></span> Báo cáo thống kê</a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3>DANH MỤC KHÁC</h3>
            <div class="row">
                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['khoa/index'])?>" style="color: black; text-decoration: none; padding-left: 40px" >Quản lý khoa</a>
                    </h1>
                </div>
                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['namhoc/index'])?>" style="color: black; text-decoration: none; padding-left: 40px" >Quản lý năm học</a>
                    </h1>
                </div>
                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['hocky/index'])?>" style="color: black; text-decoration: none; padding-left: 40px" >Quản lý học kỳ</a>
                    </h1>
                </div>

                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['hinhthucdaotao/index'])?>" style="color: black; text-decoration: none; padding-left: 40px">Quản lý HTĐT</a>
                    </h1>
                </div>

                <div class="col-md-4">
                    <h1 class="user" style="padding-top: 50px; padding-bottom: 50px; border:  1px solid black">
                        <a href="<?=\yii\helpers\Url::toRoute(['trinhdo/index'])?>" style="color: black; text-decoration: none; padding-left: 40px">Quản lý trình độ</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
