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

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mẫu đăng ký thi đua</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 900px;background-color: white">
    <div class="row">
               <div class="col-md-6 text-center">
                   <h4>TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</h4>
                   <h4><strong>ĐƠN VỊ:<?=$model->khoa->tenkhoa?></strong></h4>
               </div>
               <div class="col-md-6 text-center">
                   <h4><strong>CỘNG HÒA XÃ HỘI  CHỦ NGHĨA VIỆT NAM</strong></h4>
                   <h4><strong>Độc lập - Tự do - Hạnh phúc</strong></h4>
                   <p><em>Hải phòng, ngày <?=myFuncs::tachNgay(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk))?>, tháng <?=myFuncs::tachThang(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk))?>, năm <?=myFuncs::tachNam(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk))?></em></p>
               </div>
           </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4><strong>ĐƠN ĐĂNG KÝ THI ĐUA TẬP THỂ</strong></h4>
            <p style="font-size: 13pt;font-family: 'Times New Roman'">Năm học <?=$model->namhoc->name?></p>
            <p style="font-size: 13pt;font-family: 'Times New Roman'">(Khối giảng dạy)</p>
            <p style="font-size: 13pt;font-family: 'Times New Roman'">Kính gửi: Hội đồng thi đua, Khen thưởng Trường ĐH Hàng hải Việt Nam </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 13pt">
            <p>Tên Đơn vị: <?= $model->khoa->tenkhoa; ?></p>
            <p>Tổng số CC, VC và NLĐ: <?= $model->sogiangvien; ?>. Số CC, VC và NLĐ có mặt: <?= $model->sogiangviencomat; ?></p>
            <p>Căn cứ tiêu chuẩn danh hiệu Thi đua: <b>Tập thể</b> .......................................................................................................... và chương trình công tác của Trường, nhiệm vụ thường xuyên của đơn vị trong năm học; toàn thể CC, VC và NLĐ trong đơn vị nhất trí quyết tâm phấn đấu để đạt được danh hiệu <b>Tập thể</b> ................................................................................................................</p>
            <p>Dưới đây chúng tôi xin đăng ký các chỉ tiêu công tác cơ bản để phấn đấu đạt được:</p>
            <p><b>I. Khối lượng công tác nhóm A:</b></p>
            <p>1. Giảng dạy lý thuyết: Hệ chính quy ĐH, CĐ: <?= $model->CTNA_GDLT; ?></p>
            <p>2. Hướng dẫn thực hành, thí nghiệm: <?= $model->CTNA_HDTH; ?></p>
            <p>3. Hướng dẫn tốt nghiệp: <?= $model->CTNA_HDTN; ?></p>
            <p>4. Chấm thi, hỏi thi : <?= $model->CTNA_CT; ?></p>
            <p>5. Công tác kiêm nhiệm: <?= $model->CTNA_KN; ?></p>
            <p>6. .................................................................................................................................................................................. </p>
            <p><b>II. Khối lượng công tác nhóm B:</b></p>
            <p>1. Viết giáo trình, bài giảng: <?= $model->CTNB_VGT; ?></p>
            <p>2.  Nghiên cứu khoa học: <?= $model->CTNB_NCKH; ?></p>
            <p>3.  Học tập chuyên môn, nghiệp vụ: <?= $model->CTNB_CMNV; ?></p>
            <p>4. .................................................................................................................................................................................. </p>
            <p>5. .................................................................................................................................................................................. </p>

            <p><b>III. Các mặt công tác khác:</b></p>
            <p>1. Tham gia các phong trào, các hoạt động của Nhà trường: <?= $model->CTNB_TGPT; ?></p>
            <p>2. Chấp hành tốt pháp luật của Nhà nước, các quy định của ngành, Trường: <?= $model->CTNB_CHPL; ?></p>
            <p>3. .................................................................................................................................................................................. </p>
            <p>4. .................................................................................................................................................................................. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
           <H4><strong>CHỦ TỊCH CĐ ĐƠN VỊ</strong></H4>
        </div>
        <div class="col-md-6">
            <H4><strong>THỦ TRƯỞNG ĐƠN VỊ</strong></H4>
        </div>
    </div>
    <br><br><br>
    <br>
</div>
<br>
<div class="container" style="width: 900px">
    <div class="row">
        <div class="text-right">
            <?php
            echo Html::a('<i class="glyphicon glyphicon-export"></i> Xuất file PDF', ['/dkthiduatapthe/exportpdf','id'=>$model->id], [
                'id' =>$model->id,
                'class'=>'btn btn-danger',
                'target'=>'_blank',
                'data-toggle'=>'tooltip',
                'title'=>'Will open the generated PDF file in a new window'
            ]);
            ?>
        </div>
        <br>
    </div>

</div>
</body>
</html>
