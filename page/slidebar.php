<?php
$mysqli = new mysqli("localhost", "root", "01286579839", "hienstore");
if ($mysqli->connect_errno) {
    echo "Kết nối không thành công " . $mysqli->connect_error;
    exit();
}
?>
<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

?>
    <div class="sidebar">
    <a href="./index.php" class="header-slb"><img src="./assets/img/logo.png" alt="logo" height = auto width = 60%></a>
    <ul>
        <li ><a href="index.php?quanly=shopall"><i class=""></i>Tất cả sp</a></li>
        <li ><a href="index.php?quanly=sale"><i class=""></i>Khuyến mãi</a></li>
        <?php
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <li><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>">
                    <i class=""></i><?php echo $row_danhmuc['tendanhmuc'] ?>
                </a>
            </li>
            <?php
        }
        ?>
        <div class="lienhe_tick">
            <li ><a href="#"><i class=""></i>Liên hệ</a></li>
            <ul class="lienhe">
                <li><a href="#"><i class=""></i>Facebook</a></li>
                <li><a href="#"><i class=""></i>Instagram</a></li>
                <li><a href="#"><i class=""></i>Email</a></li>
                <li><a href="#"><i class=""></i>Zalo</a></li>
            </ul>
        </div>
    </ul>
    </div><?php
