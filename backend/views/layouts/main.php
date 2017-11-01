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

        $menuItems[] = ['label' => 'Đăng nhập', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Quy định-Quy chế', 'url' => ['quydinhquychedaotao/index']];
        $menuItems[] = ['label' => 'Thông báo-Quyết định', 'url' => ['thongbaoquyetdinh/index']];
        $menuItems[] = '<li style="margin-top: 10px;">'
        . Html::beginForm(['/site/search'],'get',['class'=>'input-group'])
        . Html::textInput('search',NULL,['class'=>'form-control','style'=>'border-radius:5px'])
        . Html::submitButton('<i class="glyphicon glyphicon-search"></i>',['class'=>'btn btn-default','style'=>'position: absolute;
    right: 0px;
    top:2px;
    z-index: 9999;
    background: transparent;
    border: none;
    '])
        . Html::endForm()
        . '</li>';
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Đăng xuất (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
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
