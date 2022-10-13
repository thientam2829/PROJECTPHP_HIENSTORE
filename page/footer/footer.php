<?php
$mysqli = new mysqli("localhost", "root", "01286579839", "hienstore");
if ($mysqli->connect_errno) {
    echo "Kết nối không thành công " . $mysqli->connect_error;
    exit();
}
?>
<div class="main-footer">

    <div class="one">
        <div class="one-1">
            <h4>HỆ THỐNG CỬA HÀNG HIÊN </h4><br>
            <div class="one12">
                <?php
                $sql_chinhanh = "SELECT * FROM tbl_chinhanh ORDER BY id_chinhanh ASC";
                $query_chinhanh = mysqli_query($mysqli,$sql_chinhanh);
                while($row_chinhanh= mysqli_fetch_array($query_chinhanh)){
                    ?>
                    <p>
                        <?php echo $row_chinhanh['chinhanh']?> <br>

                    </p>
                <?php } ?>
            </div>
        </div>
        <div class="one-1">
            <H4>THÔNG TIN LIÊN HỆ </H4><br><br>
            <div>
                <?php
                $sql_lienhe = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe ASC";
                $query_lienhe = mysqli_query($mysqli,$sql_lienhe);
                while($row_lienhe= mysqli_fetch_array($query_lienhe)){
                    ?>
                    <ul class="one12">
                        <li><?php echo $row_lienhe['lienhe']?></li>

                    </ul>
                <?php } ?>
            </div>
        </div>
        <div class="one-1">
            <div class="one-footer">
                <H4>FOLLOW US ON SOCIAL MEDIA</H4>
                <br>
                <br>
                <a href="https://www.facebook.com/" >
                    <img src="/assets/img/facebook.png">
                </a>
                <a href="https://www.instagram.com/accounts/login/">
                    <img src="/assets/img/instagram%20(1).png">
                </a>
                <div class="one-footer1">
                    <a href="http://online.gov.vn/Home/WebDetails/78935?AspxAutoDetectCookieSupport=1">
                        <img src="http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
