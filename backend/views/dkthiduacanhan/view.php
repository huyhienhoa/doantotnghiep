<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\myFuncs;

/* @var $this yii\web\View */
/* @var $model common\models\Dkthiduacanhan */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đăng ký thi đua cá nhân', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="dkthiduacanhan-view">-->
<!---->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>-->
<!--        --><?//= Html::a('<span class="glyphicon glyphicon-edit"></span> Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a('<span class="glyphicon glyphicon-trash"></span> Xóa', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Bạn có thực sự muốn xóa bản ghi này?',
//                'method' => 'post',
//            ],
//        ]) ?>
<!--    </p>-->
<!---->
<!--    --><?//= DetailView::widget([
//        'model' => $model,
//        'attributes' => [
//            'id',
//            'name',
////            'khoa_id',
//            [
//                'attribute'=>'khoa_id',
//                'label'=>'Khoa',
//                'value'=>$model->khoa->tenkhoa
//            ],
////            'namhoc_id',
//            [
//                'attribute'=>'namhoc_id',
//                'label'=>'Năm học',
//                'value'=>$model->namhoc->name
//            ],
////            'ngaydk',
//            [
//                'attribute'=>'ngaydk',
//                'label'=>'Ngày đăng ký',
//                'value'=>$model->ngaydk = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)
//            ],
//            'created_at',
//            'updated_at',
//            'hoten',
////            'ngaysinh',
//            [
//                'attribute'=>'ngaysinh',
//                'label'=>'Ngày sinh',
//                'value'=>$model->ngaysinh = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaysinh)
//            ],
//            'CTNA_GDLT',
//            'CTNA_HDTH',
//            'CTNA_HDTN',
//            'CTNA_CT',
//            'CTNA_KN',
//            'CTNB_NCKH',
//            'CTNB_VGT',
//            'CTNB_VCDKH',
//            'CTNB_CMNV',
//            'CTK_TGPT',
//            'CTK_CHPL',
//        ],
//    ]) ?>
<!---->
<!--</div>-->



<html>
<head>
    <title>Mẫu đăng ký thi đua</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-family: 'Times New Roman'; font-size: 14pt">TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</h3>
                <h3 style="font-family: 'Times New Roman'; font-size: 14pt; font-weight: bold; padding-left: 51px; margin-top: 0px;"><u>ĐƠN VỊ: <?= $model->khoa->tenkhoa ?></u></h3>
            </div>
            <div class="col-md-6" ">
            <h3 style="font-family: 'Times New Roman'; font-size: 14pt; float: right; font-weight: bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h3>
            <h3 style="float: right; display: block; padding-left: 0px; font-family: 'Times New Roman'; font-size: 14pt; font-weight: bold; margin-top: 0px; padding-right: 74px"><u>Độc lập - Tự do - Hạnh phúc</u></h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 style="font-family: 'Times New Roman'; font-size: 14pt; float: right; padding-right: 33px; font-style: italic"> Hải Phòng, ngày <?= myFuncs::tachNgay(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)); ?> tháng <?= myFuncs::tachThang(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)); ?> năm <?= myFuncs::tachNam(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)); ?> </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 style="font-family: 'Times New Roman'; font-size: 14pt; font-weight: bold; align: center; display: inline-block; margin-bottom: 0px">ĐƠN ĐĂNG KÝ THI ĐUA CÁ NHÂN</h3>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <p style="font-family: 'Times New Roman'; font-size: 13pt; display: inline-block; padding-left: 50px; margin-bottom: 0px">Năm học <?= $model->namhoc->name; ?></p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <p style="font-family: 'Times New Roman'; font-size: 13pt; display: inline-block; padding-left: 61px">(Khối giảng dạy)</p>


            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

<div id="body">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 13pt">
                <p style="display: inline-block; padding-left: 309px">Kính gửi: Hội đồng Thi đua, Khen thưởng Trường ĐH Hàng hải Việt Nam</p>
                <p>Họ tên: <?= $model->hoten; ?></p>
                <p>Ngày sinh: <?= $model->ngaysinh; ?></p>
                <p>Chức danh/Chức vụ: <?= $model->chucvu; ?></p>
                <p>Thuộc đơn vị: <?= $model->khoa->tenkhoa; ?></p>
                <p>Căn cứ vào tiêu chuẩn thi đua: <b>Cá nhân</b> và chương trình công tác của Trường, nhiệm vụ được giao trong năm học, tôi xin đăng ký phấn đấu để đạt được danh hiệu: <b>Cá nhân</b></p>
                <p>Dưới đây là nội dung, chỉ tiêu chính:</p>
                <p><b>I. Khối lượng công tác nhóm A:</b></p>
                <p>1. Giảng dạy lý thuyết: Hệ chính quy ĐH, CĐ: <?= $model->CTNA_GDLT; ?></p>
                <p>2. Hướng dẫn thực hành, thí nghiệm: <?= $model->CTNA_HDTH; ?></p>
                <p>3. Hướng dẫn tốt nghiệp: <?= $model->CTNA_HDTN; ?></p>
                <p>4. Chấm thi, hỏi thi : <?= $model->CTNA_CT; ?></p>
                <p>5. Công tác kiêm nhiệm: <?= $model->CTNA_KN; ?></p>
                <p>................................................................................................................................................</p>
                <p>................................................................................................................................................</p>
                <p><b>II. Khối lượng công tác nhóm B:</b></p>
                <p>1.  Nghiên cứu khoa học: <?= $model->CTNB_NCKH; ?></p>
                <p>2. Viết giáo trình, bài giảng: <?= $model->CTNB_VGT; ?></p>
                <p>2. Viết Viết chuyên đề Khoa học: <?= $model->CTNB_VCDKH; ?></p>
                <p>3.  Học tập chuyên môn, nghiệp vụ: <?= $model->CTNB_CMNV; ?></p>
                <p>4. ............................................................................................................................................</p>
                <p>III. Các mặt công tác khác:</p>
                <p>1. Tham gia các phong trào, các hoạt động của Nhà trường: <?= $model->CTK_TGPT; ?></p>
                <p>.................................................................................................................................................</p>
                <p>2. Chấp hành tốt pháp luật của Nhà nước, các quy định của ngành, Trường: <?= $model->CTK_CHPL; ?></p>
                <p>.................................................................................................................................................</p>
                <p>.................................................................................................................................................</p>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-family: 'Times New Roman'; font-size: 13pt; font-weight: bold; display: inline-block; padding-left: 30px">THỦ TRƯỞNG ĐƠN VỊ XÁC NHẬN</h3>
            </div>
            <div class="col-md-6">
                <h3 style="font-family: 'Times New Roman'; font-size: 13pt; font-weight: bold; padding-left: 300px">NGƯỜI VIẾT ĐƠN</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>
