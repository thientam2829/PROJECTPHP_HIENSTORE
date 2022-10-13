<?php
$mysqli = new mysqli("localhost", "root", "01286579839", "hienstore");
if ($mysqli->connect_errno) {
    echo "Kết nối không thành công " . $mysqli->connect_error;
    exit();
}
?>
<style>
    * {box-sizing: border-box;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
        max-width: 1506px;
        position: relative;
        margin: auto;
    }

    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    .active {
        background-color: #717171;
    }

    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }
</style>
<div class="main-slider">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="/admin/modules/anhtrangbia/uploads/Center1.jpeg" style="width: 100%">
        </div>
        <div class="mySlides fade">
            <img src="/admin/modules/anhtrangbia/uploads/Center2.jpeg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="/admin/modules/anhtrangbia/uploads/Center3.jpeg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="/admin/modules/anhtrangbia/uploads/Center4.jpeg" style="width:100%">
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
</div>
<script>
    let slideIndex = 0;
    showSlides();
    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); //
    }
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 5000
        })
    });
</script>
<div class="main-content">
    <div class="content-section">
        <h2 class="thientamheader">New Arrivals</h2>
        <a href="index.php?quanly=shopall" class="section-sub-heading">Xem Thêm</a>
        <div class="maincontent">
            <?php
            $sql_pro = "SELECT * FROM tbl_sanpham WHERE tinhtrang=1 LIMIT 12 ";
            $query_pro = mysqli_query($mysqli,$sql_pro);
            $giaspkm=0;
            while($row_pro = mysqli_fetch_array($query_pro)){
                if ($row_pro['km']>0){$giaspkm=$row_pro['giasp']-($row_pro['giasp']*($row_pro['km']/100));};
                ?>

                <ul>
                    <div class="maincontent-item">
                        <div class="maincontent-top">

                            <?php
                            if($row_pro['km']==0){

                            }else{
                                ?>
                                <div class="khuyenmai"><?php echo number_format($row_pro['km']).'%' ?></div>
                                <?php
                            }
                            ?>
                            <div class="maiconten-top1">

                                <a href="index.php?quanly=chitiet&idsanpham=<?php echo $row_pro['id_sanpham'] ?>" class="maincontent-img">
                                    <img src="/admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                                </a>
                                <button type  ="submit" title = 'chi tiet' class="muangay"  name="chitiet"><a href="index.php?quanly=chitiet&idsanpham=<?php echo $row_pro['id_sanpham'] ?>">Chi tiết</a></button>
                                <form method="POST" action="./page/main/themgiohang.php?idsanpham=<?php echo $row_pro['id_sanpham'] ?>">
                                    <button type  = "submit" title = 'thêm vào giỏ' name="themgiohang" class="giohang"><a >Thêm vào giỏ</a></button>
                                </form>
                            </div>
                        </div>
                        <div class="maincontent-info">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="maincontent-name"><?php echo $row_pro['tensanpham'] ?></a>
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="maincontent-gia"><?php if($row_pro['km']>0){ echo number_format($giaspkm).'vnd'; }else {echo number_format($row_pro['giasp']).'vnd';} ?>
                                <span><?php if($row_pro['km']>0){
                                        echo number_format($row_pro['giasp']).'vnd';
                                    }else{

                                    }
                                    ?>
                                                        </span></a>
                        </div>
                    </div>
                </ul>

                <?php
            }
            ?>

        </div>

    </div>
</div>
