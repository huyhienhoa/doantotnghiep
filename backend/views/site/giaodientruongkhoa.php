<meta charset="utf-8">
<?php
try{
    $dbh = new PDO("mysql:host=localhost;dbname=doantotnghiep;charset=utf8",'root','');

    $data1 = $dbh->query("SELECT COUNT(*) FROM iso_loaitailieu")->execute();
    $data2 = $dbh->query("SELECT COUNT(*) FROM iso_bangphanconggiangday")->execute();
    $data3 = $dbh->query("SELECT COUNT(*) FROM iso_bangtheodoiketquahoctap")->execute();
    $data4 = $dbh->query("SELECT COUNT(*) FROM iso_chuongtrinhdaotao")->execute();
    $data5 = $dbh->query("SELECT COUNT(*) FROM iso_congtacnghiencuukh")->execute();
    $data6 = $dbh->query("SELECT COUNT(*) FROM iso_dapan")->execute();
    $data7 = $dbh->query("SELECT COUNT(*) FROM iso_debaitaplon")->execute();
    $data8 = $dbh->query("SELECT COUNT(*) FROM iso_decuonghocphan")->execute();
    $data9 = $dbh->query("SELECT COUNT(*) FROM iso_decuongontap")->execute();
    $data10 = $dbh->query("SELECT COUNT(*) FROM iso_hopdonggiangday")->execute();
    $data11 = $dbh->query("SELECT COUNT(*) FROM iso_ketquadanhgiahocphan")->execute();
    $data12 = $dbh->query("SELECT COUNT(*) FROM iso_khenthuong")->execute();
    $data13 = $dbh->query("SELECT COUNT(*) FROM iso_kiluat")->execute();
    $data14 = $dbh->query("SELECT COUNT(*) FROM iso_lichgiangday")->execute();
    $data15 = $dbh->query("SELECT COUNT(*) FROM iso_lichthi")->execute();
    $data16 = $dbh->query("SELECT COUNT(*) FROM iso_nganhangdethi")->execute();
    $data17 = $dbh->query("SELECT COUNT(*) FROM iso_phancongcoithi")->execute();
    $data18 = $dbh->query("SELECT COUNT(*) FROM iso_quydinh_quychedaotao")->execute();
    $data19 = $dbh->query("SELECT COUNT(*) FROM iso_tailieubomon")->execute();
    $data20 = $dbh->query("SELECT COUNT(*) FROM iso_thidua")->execute();
    $data21 = $dbh->query("SELECT COUNT(*) FROM iso_thoikhoabieu")->execute();
    $data22 = $dbh->query("SELECT COUNT(*) FROM iso_thongbao_quyetdinh")->execute();

    $data23 = $dbh->query("SELECT COUNT(*) FROM iso_bomon")->execute();
    $data24 = $dbh->query("SELECT COUNT(*) FROM iso_chuyennganh")->execute();
    $data25 = $dbh->query("SELECT COUNT(*) FROM iso_giangvien")->execute();
    $data26 = $dbh->query("SELECT COUNT(*) FROM iso_hinhthucdaotao")->execute();
    $data27 = $dbh->query("SELECT COUNT(*) FROM iso_hocky")->execute();
    $data28 = $dbh->query("SELECT COUNT(*) FROM iso_khoa")->execute();
    $data29 = $dbh->query("SELECT COUNT(*) FROM iso_monhoc")->execute();
    $data30 = $dbh->query("SELECT COUNT(*) FROM iso_namhoc")->execute();
    $data31 = $dbh->query("SELECT COUNT(*) FROM iso_user")->execute();

}
catch(PDOException $e){
    echo $e->getMessage();
    $data = [];
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>BÁO CÁO THỐNG KÊ</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">BÁO CÁO, THỐNG KÊ</h1>
                    <br>
                    <h2>Danh mục tài liệu</h2>
                    <table class="table table-bordered table-responsive table-striped">
                        <tr>
                            <th>STT</th>
                            <th>Tên tài liệu</th>
                            <th>Số bản ghi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> LOẠI TÀI LIỆU </td>
                            <td><?= $data1 ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td> BẢNG PHÂN CÔNG GIẢNG DẠY </td>
                            <td><?= $data2 ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> BẢNG THEO DÕI KẾT QUẢ HỌC TẬP </td>
                            <td><?= $data3 ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> CHƯƠNG TRÌNH ĐÀO TẠO </td>
                            <td><?= $data4 ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td> CÔNG TÁC NGHIÊN CỨU KHOA HỌC </td>
                            <td><?= $data5 ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> ĐÁP ÁN </td>
                            <td><?= $data6 ?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td> ĐỀ BÀI TẬP LỚN </td>
                            <td><?= $data7 ?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td> ĐỀ CƯƠNG HỌC PHẦN </td>
                            <td><?= $data8 ?></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td> ĐỀ CƯƠNG ÔN TẬP </td>
                            <td><?= $data9 ?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td> HỢP ĐỒNG GIẢNG DẠY </td>
                            <td><?= $data10 ?></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td> KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN </td>
                            <td><?= $data11 ?></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td> KHEN THƯỞNG </td>
                            <td><?= $data12 ?></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td> KỈ LUẬT </td>
                            <td><?= $data13 ?></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td> LỊCH GIẢNG DẠY </td>
                            <td><?= $data14 ?></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td> LỊCH THI </td>
                            <td><?= $data15 ?></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td> NGÂN HÀNG ĐỀ THI </td>
                            <td><?= $data16 ?></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td> PHÂN CÔNG COI THI </td>
                            <td><?= $data17 ?></td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td> QUY ĐỊNH, QUY CHẾ ĐÀO TẠO </td>
                            <td><?= $data18 ?></td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td> TÀI LIỆU BỘ MÔN </td>
                            <td><?= 19 ?></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td> THI ĐUA </td>
                            <td><?= $data20 ?></td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td> THỜI KHÓA BIỂU </td>
                            <td><?= $data21 ?></td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td> THÔNG BÁO, QUYẾT ĐỊNH </td>
                            <td><?= $data22 ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <h2>Danh mục khác</h2>
                    <table class="table table-bordered table-responsive table-striped">
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Số bản ghi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Tài khoản </td>
                            <td><?= $data30 ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td> BẢNG PHÂN CÔNG GIẢNG DẠY </td>
                            <td><?= $data2 ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> BẢNG THEO DÕI KẾT QUẢ HỌC TẬP </td>
                            <td><?= $data3 ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> CHƯƠNG TRÌNH ĐÀO TẠO </td>
                            <td><?= $data4 ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td> CÔNG TÁC NGHIÊN CỨU KHOA HỌC </td>
                            <td><?= $data5 ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> ĐÁP ÁN </td>
                            <td><?= $data6 ?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td> ĐỀ BÀI TẬP LỚN </td>
                            <td><?= $data7 ?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td> ĐỀ CƯƠNG HỌC PHẦN </td>
                            <td><?= $data8 ?></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td> ĐỀ CƯƠNG ÔN TẬP </td>
                            <td><?= $data9 ?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td> HỢP ĐỒNG GIẢNG DẠY </td>
                            <td><?= $data10 ?></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td> KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN </td>
                            <td><?= $data11 ?></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td> KHEN THƯỞNG </td>
                            <td><?= $data12 ?></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td> KỈ LUẬT </td>
                            <td><?= $data13 ?></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td> LỊCH GIẢNG DẠY </td>
                            <td><?= $data14 ?></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td> LỊCH THI </td>
                            <td><?= $data15 ?></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td> NGÂN HÀNG ĐỀ THI </td>
                            <td><?= $data16 ?></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td> PHÂN CÔNG COI THI </td>
                            <td><?= $data17 ?></td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td> QUY ĐỊNH, QUY CHẾ ĐÀO TẠO </td>
                            <td><?= $data18 ?></td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td> TÀI LIỆU BỘ MÔN </td>
                            <td><?= 19 ?></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td> THI ĐUA </td>
                            <td><?= $data20 ?></td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td> THỜI KHÓA BIỂU </td>
                            <td><?= $data21 ?></td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td> THÔNG BÁO, QUYẾT ĐỊNH </td>
                            <td><?= $data22 ?></td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
</body>
</html>
