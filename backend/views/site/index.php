<?php

/* @var $this yii\web\View */

$this->title = 'Quản lý tài liệu';
?>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<div class="container-fluid full">
    <div class="row">
        <div class="col-md-5">
            <h3>DANH SÁCH TÀI LIỆU</h3>
            <div class="vertical-menu">
                <a href="<?=\yii\helpers\Url::toRoute(['chuongtrinhdaotao/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> chương trình đào tạo</a>
                <a href="<?=\yii\helpers\Url::toRoute(['decuonghocphan/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> đề cương học phần</a>
                <a href="<?=\yii\helpers\Url::toRoute(['bangtheodoiketquahoctap/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> bảng theo dõi kết quả học tập</a>
                <a href="<?=\yii\helpers\Url::toRoute(['congtacnghiencuukh/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> công tác nghiên cứu khoa học</a>
                <a href="<?=\yii\helpers\Url::toRoute(['hopdonggiangday/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Hợp đồng giảng dạy</a>
                <a href="<?=\yii\helpers\Url::toRoute(['thoikhoabieu/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Thời khóa biểu</a>
                <a href="<?=\yii\helpers\Url::toRoute(['bangphanconggiangday/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Bảng phân công giảng dạy</a>
                <a href="<?=\yii\helpers\Url::toRoute(['debaitaplon/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Đề bài tập lớn</a>
                <a href="<?=\yii\helpers\Url::toRoute(['decuongontap/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Đề cương ôn tập</a>
                <a href="<?=\yii\helpers\Url::toRoute(['ketquadanhgiahocphan/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> kết quả đánh giá học phần</a>
                <a href="<?=\yii\helpers\Url::toRoute(['thidua/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> thi đua</a>
                <a href="<?=\yii\helpers\Url::toRoute(['khenthuong/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Khen thưởng</a>
                <a href="<?=\yii\helpers\Url::toRoute(['kiluat/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Kỷ luật</a>
                <a href="<?=\yii\helpers\Url::toRoute(['lichgiangday/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Lịch giảng dạy</a>
                <a href="<?=\yii\helpers\Url::toRoute(['lichthi/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Lịch thi</a>
                <a href="<?=\yii\helpers\Url::toRoute(['phancongcoithi/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Phân công coi thi</a>
                <a href="<?=\yii\helpers\Url::toRoute(['thoikhoabieu/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Thời khóa biểu</a>
                <a href="<?=\yii\helpers\Url::toRoute(['tailieubomon/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Tài liệu bộ môn</a>
                <a href="<?=\yii\helpers\Url::toRoute(['nganhangdethi/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> Ngân hàng đề thi</a>
                <a href="<?=\yii\helpers\Url::toRoute(['dapan/index'])?>"><span class="glyphicon glyphicon-chevron-right"></span> đáp án</a>
            </div>
        </div>
        <div class="col-md-7 text-center">
            <br><br><br>
            <div>
                <img src="logovimaru.png" width="200px">
            </div>
            <div>
                <br><br>
                <h3 class="font-lobster">
                   CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN LÝ TÀI LIỆU THEO CHUẨN ISO CỦA TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM
                </h3>
            </div>
            <br>

        </div>
    </div>
</div>

