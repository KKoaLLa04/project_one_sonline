<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/login.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/course.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style.css?ver=<?php echo rand() ?>">
</head>

<body>
    <header>
        <div class="row">
            <div class="col-1">
                <div class="header__logo">
                    <h4 style="padding: 0;">SONLINE</h4>
                </div>
            </div>

            <div class="col-4">
                <div class="header__search">
                    <input type="search" placeholder="Tìm kiếm..." class="header__input">
                </div>
            </div>

            <div class="col-3">
                <div class="header__hotline">
                    <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/phone.svg" alt="">
                    <span class="hotline__span">Hotline: 0985 123 654 - 0123456789</span>
                </div>
            </div>

            <div class="col-1">
                <div class="header__cart">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>

            <div class="col-3">
                <?php if (empty($_SESSION["login"]) && empty($_SESSION['login_teacher'])) : ?>
                <div class="header__button">
                    <a href="?module=member&action=login"><button class="header__login">Đăng nhập</button></a>
                    <a href="?module=member&action=register"><button class="header__register">Đăng ký</button></a>
                </div>
                <?php elseif (!empty($_SESSION['login_teacher'])) : ?>
                <p class="d-flex justify-content-end"><a href="<?php echo _WEB_HOST_ROOT_ADMIN ?>" target="_blank"
                        class="mx-3"><button class="btn btn-primary btn-sm">Trang quản trị</button></a> <a
                        href="?module=member&action=logout"><button class="btn btn-warning btn-sm">Đăng
                            xuất</button></a></p>
                <?php else :  ?>
                <p class="d-flex justify-content-end"><a href="?module=member&action=logout"><button
                            class="btn btn-warning btn-sm">Đăng
                            xuất</button></a></p>
                <?php endif ?>
            </div>
        </div>
    </header>

    <div class="line"></div>

    <nav class="menu">
        <ul>
            <li><a href="?module=home&action=home"><i class="fa fa-home"></i>Trang Chủ</a></li>
            <li><a href="?module=course&action=lists"><i class="fa fa-file"></i>Khóa học</a></li>
            <li><a href="?module=book&action=lists"><i class="fa fa-book"></i>Sách</a></li>
            <li><a href="?module=exam_online&action=lists"><i class="fa fa-file"></i>Thi online</a></li>
            <li><a href="?module=exercise&action=lists"><i class="fa fa-copy"></i>Giải bài tập & soạn bài tập</a></li>
            <li><a href="?module=document&action=lists"><i class="fa fa-folder"></i>Tài liệu miễn phí</a></li>
            <li><a href="?module=ranking&action=lists"><i class="fa fa-university"></i>Xếp hạng</a></li>
            <li><a href="?module=news&action=lists"><i class="fa fa-newspaper"></i>Tin tức</a></li>
            <li><a href="?module=aboutus&action=introduce"><i class="fa fa-file-alt"></i>Giới thiệu</a></li>
            <li><a href="?module=contacts&action=contact"><i class="fa fa-envelope"></i>Liên hệ</a></li>
        </ul>
    </nav>

    <main>
        <div class="main">