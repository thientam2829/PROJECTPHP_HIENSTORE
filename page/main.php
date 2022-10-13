
<div class="main">
    <div>

        <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam=='danhmuc'){
            include('page/main/danhmuc.php');
        }elseif($tam=='dangky'){
            include('page/main/dangky.php');
        }elseif($tam=='giohang'){
            include('page/main/giohang.php');
        }elseif($tam=='dangnhap'){
            include('page/main/dangnhap.php');
        }elseif($tam=='thanhtoan'){
            include('./page/main/thanhtoan.php');
        }elseif($tam=='ketqua'){
            include('./page/main/ketquathanhtoan.php');
        }elseif($tam=='timkiem'){
            include('page/main/timkiem.php');
        }elseif($tam=='ketqua'){
            include('page/main/ketquathanhtoan.php');
        }elseif($tam=='shopall'){
            include('page/main/all.php');
        }elseif($tam=='sale'){
            include('page/main/sales.php');
        }elseif($tam=='chitiet'){
            include('page/main/chitietsp.php');
        }elseif($tam=='thongtintaikhoann'){
            include('page/main/thongtintaikhoan.php');
        }elseif($tam=='suathongtintaikhoann'){
            include('page/main/suataikhoan.php');
        }else{
            include('page/main/index.php');
        }
        ?>
        <?php
        include('page/footer/footer.php');
        ?>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    <?php
    include('page/footer/modals.php');
    ?>
    <div class="modal">
    </div><?php
