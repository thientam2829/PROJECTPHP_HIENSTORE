<?php
$mysqli = new mysqli("localhost", "root", "01286579839", "hienstore");
if ($mysqli->connect_errno) {
    echo "Kết nối không thành công " . $mysqli->connect_error;
    exit();
}
?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
}
?>
    <div class="header ">
    <div class="logo-header pd-28">HIÊN STORE</div>
    <div class="account-links pd-28">
        <?php
        if(isset($_SESSION['dangky'])){
            ?>
            <a href="./index.php?quanly=thongtintaikhoann&id=<?php echo $_SESSION['id_khachhang'] ?>" id="login"><?php  echo $_SESSION['dangky']; ?></a>
            /
            <a href="index.php?dangxuat=1" id="regist">Đăng xuất</a>
            <?php
        }else{
            ?>

            <a href="./index.php?quanly=dangnhap" id="login">Đăng nhập</a>
            /
            <a href="./index.php?quanly=dangky" id="regist">Đăng ký</a>
            <?php
        }
        ?>

    </div>
    <label for="check-timkiem"><div  class="ti-search icon-header "></div>
    </label>
    <a   href="index.php?quanly=giohang" class="cart-shopping pd-28">Giỏ Hàng
        <i class="ti-shopping-cart">
            <?php
            if(isset($_SESSION['cart'])){
                $soluongsanpham=0;
                foreach($_SESSION['cart'] as $cart_item){
                    $soluongsanpham+=$cart_item['soluong'];}
                ?>(<?php echo $soluongsanpham?>)
            <?php }
            ?>
        </i>

    </a>
    </div>
