<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\myFuncs;

/* @var $this yii\web\View */
/* @var $model common\models\Dkthiduatapthe */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đăng ký thi đua tập thể', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="dkthiduatapthe-view">-->
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
////            'namhoc_id',
//            [
//                'attribute'=>'namhoc_id',
//                'label'=>'Năm học',
//                'value'=>$model->namhoc->name
//            ],
////            'khoa_id',
//            [
//                'attribute'=>'khoa_id',
//                'label'=>'Khoa',
//                'value'=>$model->khoa->tenkhoa
//            ],
//            'ngaydk',
//            [
//                'attribute'=>'ngaydk',
//                'label'=>'Ngày đăng ký',
//                'value'=>$model->ngaydk = \common\models\myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)
//            ],
//            'created_at',
//            'updated_at',
//            'sogiangvien',
//            'sogiangviencomat',
//            'CTNA_GDLT',
//            'CTNA_HDTH',
//            'CTNA_HDTN',
//            'CTNA_CT',
//            'CTNA_KN',
//            'CTNB_VGT',
//            'CTNB_NCKH',
//            'CTNB_CMNV',
//            'CTNB_TGPT',
//            'CTNB_CHPL',
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
                <h3 style="font-family: 'Times New Roman'; font-size: 14pt; font-weight: bold; align: center; display: inline-block; margin-bottom: 0px">ĐƠN ĐĂNG KÝ THI ĐUA TẬP THỂ</h3>
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
                <p>Tên Đơn vị: <?= $model->khoa->tenkhoa; ?></p>
                <p>Tổng số CC, VC và NLĐ: <?= $model->sogiangvien; ?>. Số CC, VC và NLĐ có mặt: <?= $model->sogiangviencomat; ?></p>
                <p>Căn cứ tiêu chuẩn danh hiệu Thi đua: <b>Tập thể</b> và chương trình công tác của Trường, nhiệm vụ thường xuyên của đơn vị trong năm học; toàn thể CC, VC và NLĐ trong đơn vị nhất trí quyết tâm phấn đấu để đạt được danh hiệu <b>Tập thể</b></p>
                <p>Dưới đây chúng tôi xin đăng ký các chỉ tiêu công tác cơ bản để phấn đấu đạt được:</p>
                <p><b>I. Khối lượng công tác nhóm A:</b></p>
                <p>1. Giảng dạy lý thuyết: Hệ chính quy ĐH, CĐ: <?= $model->CTNA_GDLT; ?></p>
                <p>2. Hướng dẫn thực hành, thí nghiệm: <?= $model->CTNA_HDTH; ?></p>
                <p>3. Hướng dẫn tốt nghiệp: <?= $model->CTNA_HDTN; ?></p>
                <p>4. Chấm thi, hỏi thi : <?= $model->CTNA_CT; ?></p>
                <p>5. Công tác kiêm nhiệm: <?= $model->CTNA_KN; ?></p>
                <p>6. ............................................................................................................................................ </p>
                <p><b>II. Khối lượng công tác nhóm B:</b></p>
                <p>1. Viết giáo trình, bài giảng: <?= $model->CTNB_VGT; ?></p>
                <p>2.  Nghiên cứu khoa học: <?= $model->CTNB_NCKH; ?></p>
                <p>3.  Học tập chuyên môn, nghiệp vụ: <?= $model->CTNB_CMNV; ?></p>
                <p>4. ............................................................................................................................................</p>
                <p>5. ............................................................................................................................................</p>
                <p>III. Các mặt công tác khác:</p>
                <p>1. Tham gia các phong trào, các hoạt động của Nhà trường: <?= $model->CTNB_TGPT; ?></p>
                <p>2. Chấp hành tốt pháp luật của Nhà nước, các quy định của ngành, Trường: <?= $model->CTNB_CHPL; ?></p>
                <p>3. ............................................................................................................................................</p>
                <p>4. ............................................................................................................................................</p>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-family: 'Times New Roman'; font-size: 13pt; font-weight: bold; display: inline-block; padding-left: 30px">CHỦ TỊCH CĐ ĐƠN VỊ</h3>
            </div>
            <div class="col-md-6">
                <h3 style="font-family: 'Times New Roman'; font-size: 13pt; font-weight: bold; padding-left: 300px">THỦ TRƯỞNG ĐƠN VỊ</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>
