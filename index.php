<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hiên Store</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/sanpham.css">
        <link rel="stylesheet" href="./assets/css/loginregister.css">
        <link rel="stylesheet" href="./assets/css/giohang.css">
        <link rel="stylesheet" href="./assets/css/chitietsp.css">
        <link rel="stylesheet" href="./assets/css/thongtin.css">
        <link rel="stylesheet" href="./assets/icon/themify-icons/themify-icons.css" >
    </head>
    <body>
        <div class="wappter">
        <?php
            session_start();
            include('admin/config/config.php');
            include('page/header.php');
            include('page/slidebar.php');
            include('page/main.php');
        ?>
        </div>

    </div>

    </body>
</html>

