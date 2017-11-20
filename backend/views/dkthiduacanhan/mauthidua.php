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
</head>
<body>
<div class="container">
    <div>
        <table style="border: none;">
            <tr>
                <td class="text-center">
                    <div class="col-sm-12">
                        <h5 style="font-size: 11pt; font-family: 'Times New Roman'">TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</h5>
                        <h5 style="font-size: 11pt; font-family: 'Times New Roman'"><strong>ĐƠN VỊ:<?=$model->khoa->tenkhoa?></strong></h5>
                    </div>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td class="text-center">
                    <div>
                        <h5 style="font-size: 11pt;font-family: 'Times New Roman'"><strong>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</strong></h5>
                        <h5 style="font-size: 11pt;font-family: 'Times New Roman'"><strong>Độc lập - Tự do - Hạnh phúc</strong></h5>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="text-right">
            <h3 style="font-family: 'Times New Roman'; font-size: 10pt; float: right; padding-right: 33px; font-style: italic"> Hải Phòng, ngày <?= myFuncs::tachNgay(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)); ?> tháng <?= myFuncs::tachThang(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)); ?> năm <?= myFuncs::tachNam(myFuncs::yearMonthDaytoDayMonthYear($model->ngaydk)); ?> </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4><strong>ĐƠN ĐĂNG KÝ THI ĐUA CÁ NHÂN</strong></h4>
            <p style="font-size: 11pt;font-family: 'Times New Roman'">Năm học <?=$model->namhoc->name?></p>
            <p style="font-size: 11pt;font-family: 'Times New Roman'">(Khối giảng dạy)</p>
            <p style="font-size: 11pt;font-family: 'Times New Roman'">Kính gửi: Hội đồng thi đua, Khen thưởng Trường ĐH Hàng hải Việt Nam </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 11pt; line-height: 1.25em">
            <p>Họ tên: <?= $model->hoten; ?></p>
            <p>Ngày sinh: <?= myFuncs::yearMonthDaytoDayMonthYear($model->ngaysinh) ?>
            <p>Chức danh/Chức vụ: <?= $model->chucvu; ?>
            <p>Thuộc đơn vị: <?= $model->khoa->tenkhoa; ?>
            <p>Căn cứ tiêu chuẩn danh hiệu Thi đua: <b>Cá nhân</b> và chương trình công tác của Trường, nhiệm vụ được giao trong năm học, tôi xin đăng ký phấn đấu để đạt được danh hiệu: ……………………………………………………………</p>
            <p>Dưới đây là nội dung, chỉ tiêu chính:</p>
            <p><b>I. Khối lượng công tác nhóm A:</b></p>
            <p>1. Giảng dạy lý thuyết: Hệ chính quy ĐH, CĐ: <?= $model->CTNA_GDLT; ?></p>
            <p>2. Hướng dẫn thực hành, thí nghiệm: <?= $model->CTNA_HDTH; ?></p>
            <p>3. Hướng dẫn tốt nghiệp: <?= $model->CTNA_HDTN; ?></p>
            <p>4. Chấm thi, hỏi thi : <?= $model->CTNA_CT; ?></p>
            <p>5. Công tác kiêm nhiệm: <?= $model->CTNA_KN; ?></p>
            <p>.................................................................................................................................................... </p>
            <p>.................................................................................................................................................... </p>
            <p><b>II. Khối lượng công tác nhóm B:</b></p>
            <p>1.  Nghiên cứu khoa học: <?= $model->CTNB_NCKH; ?></p>
            <p>2. Viết giáo trình, bài giảng: <?= $model->CTNB_VGT; ?></p>
            <p>3. Viết chuyên đề Khoa học: <?= $model->CTNB_VCDKH; ?></p>
            <p>4.  Học tập chuyên môn, nghiệp vụ: <?= $model->CTNB_CMNV; ?></p>
            <p>..................................................................................................................................................... </p>

            <p><b>III. Các mặt công tác khác:</b></p>
            <p>1. Tham gia các phong trào, các hoạt động của Nhà trường: <?= $model->CTK_TGPT; ?></p>
            <p>2. Chấp hành tốt pháp luật của Nhà nước, các quy định của ngành, Trường: <?= $model->CTK_CHPL; ?></p>
            <p>3. .................................................................................................................................................. </p>
            <p>4. .................................................................................................................................................. </p>
        </div>
    </div>
    <div class="row">
        <table>
            <tr>
                <td>&nbsp;&nbsp;</td>
                <td>
                    <h3 style="font-family: 'Times New Roman'; font-size: 13pt; font-weight: bold">THỦ TRƯỞNG ĐƠN VỊ XÁC NHẬN</h3>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <h3 style="font-family: 'Times New Roman'; font-size: 13pt; font-weight: bold;">NGƯỜI VIẾT ĐƠN</h3>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>