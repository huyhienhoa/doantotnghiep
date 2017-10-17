<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else{
        if (in_array(Yii::$app->user->identity->role, ['admin']))
            $menuItems[] = ['label' => 'Danh mục riêng', 'items' => [
                ['label' => 'Khoa', 'url' => \yii\helpers\Url::toRoute(['khoa/index'])],
                ['label' => 'Hình thức đào tạo', 'url' => \yii\helpers\Url::toRoute(['hinhthucdaotao/index'])],
                ['label' => 'Trình độ', 'url' => \yii\helpers\Url::toRoute(['trinhdo/index'])],
                ['label' => 'Năm học', 'url' => \yii\helpers\Url::toRoute(['namhoc/index'])],
                ['label' => 'Học kỳ', 'url' => \yii\helpers\Url::toRoute(['hocky/index'])],
        ]];

        if (in_array(Yii::$app->user->identity->role, ['trưởng khoa']))
            $menuItems[] = ['label' => 'Danh mục riêng', 'items' => [
                ['label' => 'Bộ môn', 'url' => \yii\helpers\Url::toRoute(['bomon/index'])],
                ['label' => 'Chuyên ngành', 'url' => \yii\helpers\Url::toRoute(['chuyennganh/index'])],
                ['label' => 'Giảng viên', 'url' => \yii\helpers\Url::toRoute(['giangvien/index'])],
                ['label' => 'Môn học', 'url' => \yii\helpers\Url::toRoute(['monhoc/index'])],
            ]];
        if (in_array(Yii::$app->user->identity->role, ['admin', 'trưởng khoa', 'trưởng bộ môn']))
            $menuItems[] = ['label' => 'Danh mục tài liệu', 'items' => [
                ['label' => 'Loại tài liệu', 'url' => \yii\helpers\Url::toRoute(['loaitailieu/index'])],
                ['label' => 'Quy định, quy chế đào tạo', 'url' => \yii\helpers\Url::toRoute(['quydinhquychedaotao/index'])],
                ['label' => 'Chương trình đào tạo', 'url' => \yii\helpers\Url::toRoute(['chuongtrinhdaotao/index'])],
                ['label' => 'Đề cương học phần', 'url' => \yii\helpers\Url::toRoute(['decuonghocphan/index'])],
                ['label' => 'Hợp đồng giảng dạy', 'url' => \yii\helpers\Url::toRoute(['hopdonggiangday/index'])],
                ['label' => 'Thời khóa biểu', 'url' => \yii\helpers\Url::toRoute(['thoikhoabieu/index'])],
                ['label' => 'Bảng phân công giảng dạy', 'url' => \yii\helpers\Url::toRoute(['bangphanconggiangday/index'])],
                ['label' => 'Lịch giảng dạy', 'url' => \yii\helpers\Url::toRoute(['lichgiangday/index'])],
                ['label' => 'Bảng theo dõi kết quả học tập', 'url' => \yii\helpers\Url::toRoute(['bangtheodoiketquahoctap/index'])],
                ['label' => 'Kết quả đánh giá học phần', 'url' => \yii\helpers\Url::toRoute(['ketquadanhgiahocphan/index'])],
                ['label' => 'Đề bài tập lớn', 'url' => \yii\helpers\Url::toRoute(['debaitaplon/index'])],
                ['label' => 'Đề cương ôn tập', 'url' => \yii\helpers\Url::toRoute(['decuongontap/index'])],
                ['label' => 'Lịch thi', 'url' => \yii\helpers\Url::toRoute(['lichthi/index'])],
                ['label' => 'Phân công coi thi', 'url' => \yii\helpers\Url::toRoute(['phancongcoithi/index'])],
                ['label' => 'Ngân hàng đề thi', 'url' => \yii\helpers\Url::toRoute(['nganhangdethi/index'])],
                ['label' => 'Đáp án', 'url' => \yii\helpers\Url::toRoute(['dapan/index'])],
                ['label' => 'Thi đua', 'url' => \yii\helpers\Url::toRoute(['thidua/index'])],
                ['label' => 'Khen thưởng', 'url' => \yii\helpers\Url::toRoute(['khenthuong/index'])],
                ['label' => 'Kỉ luật', 'url' => \yii\helpers\Url::toRoute(['kiluat/index'])],
                ['label' => 'Thông báo quyết định', 'url' => \yii\helpers\Url::toRoute(['thongbaoquyetdinh/index'])],
                ['label' => 'Công tác nghiên cứu khoa học', 'url' => \yii\helpers\Url::toRoute(['congtacnghiencuukh/index'])],
                ['label' => 'Tài liệu bộ môn', 'url' => \yii\helpers\Url::toRoute(['tailieubomon/index'])],
            ]];
        if (in_array(Yii::$app->user->identity->role, ['admin', 'trưởng khoa']))
            $menuItems[] = ['label' => 'Người dùng', 'url' => \yii\helpers\Url::toRoute(['user/index'])];
        if (in_array(Yii::$app->user->identity->role, ['giảng viên']))
            $menuItems[] = ['label' => 'Danh mục tài liệu', 'items' => [
                ['label' => 'Loại tài liệu', 'url' => \yii\helpers\Url::toRoute(['loaitailieu/index'])],
                ['label' => 'Quy định, quy chế đào tạo', 'url' => \yii\helpers\Url::toRoute(['quydinhquychedaotao/index'])],
                ['label' => 'Chương trình đào tạo', 'url' => \yii\helpers\Url::toRoute(['chuongtrinhdaotao/index'])],
                ['label' => 'Đề cương học phần', 'url' => \yii\helpers\Url::toRoute(['decuonghocphan/index'])],
                ['label' => 'Hợp đồng giảng dạy', 'url' => \yii\helpers\Url::toRoute(['hopdonggiangday/index'])],
                ['label' => 'Thời khóa biểu', 'url' => \yii\helpers\Url::toRoute(['thoikhoabieu/index'])],
                ['label' => 'Bảng phân công giảng dạy', 'url' => \yii\helpers\Url::toRoute(['bangphanconggiangday/index'])],
                ['label' => 'Lịch giảng dạy', 'url' => \yii\helpers\Url::toRoute(['lichgiangday/index'])],
                ['label' => 'Bảng theo dõi kết quả học tập', 'url' => \yii\helpers\Url::toRoute(['bangtheodoiketquahoctap/index'])],
                ['label' => 'Kết quả đánh giá học phần', 'url' => \yii\helpers\Url::toRoute(['ketquadanhgiahocphan/index'])],
                ['label' => 'Đề bài tập lớn', 'url' => \yii\helpers\Url::toRoute(['debaitaplon/index'])],
                ['label' => 'Đề cương ôn tập', 'url' => \yii\helpers\Url::toRoute(['decuongontap/index'])],
                ['label' => 'Lịch thi', 'url' => \yii\helpers\Url::toRoute(['lichthi/index'])],
                ['label' => 'Phân công coi thi', 'url' => \yii\helpers\Url::toRoute(['phancongcoithi/index'])],
                ['label' => 'Thi đua', 'url' => \yii\helpers\Url::toRoute(['thidua/index'])],
                ['label' => 'Khen thưởng', 'url' => \yii\helpers\Url::toRoute(['khenthuong/index'])],
                ['label' => 'Kỉ luật', 'url' => \yii\helpers\Url::toRoute(['kiluat/index'])],
                ['label' => 'Thông báo quyết định', 'url' => \yii\helpers\Url::toRoute(['thongbaoquyetdinh/index'])],
                ['label' => 'Công tác nghiên cứu khoa học', 'url' => \yii\helpers\Url::toRoute(['congtacnghiencuukh/index'])],
                ['label' => 'Tài liệu bộ môn', 'url' => \yii\helpers\Url::toRoute(['tailieubomon/index'])],
            ]];

        $menuItems = [
            ['label' => 'Trang chủ', 'url' => ['/site/index']],
        ];
        $menuItems[] = ['label' => 'Đăng nhập', 'url' => ['/site/login']];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Quản lý tài liệu theo tiêu chuẩn ISO <?= date('Y') ?></p>

        <p class="pull-right">Đại học Hàng Hải Việt Nam</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
