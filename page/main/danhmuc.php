<?php
$mysqli = new mysqli("localhost", "root", "01286579839", "hienstore");
if ($mysqli->connect_errno) {
    echo "Kết nối không thành công " . $mysqli->connect_error;
    exit();
}
?>
<div>
    <?php
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page =1;
    }if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*2)-2;
    }
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' AND tinhtrang=1 ORDER BY id_sanpham DESC LIMIT $begin,2"; //lấy tất cả sản phẩm dựa vào id
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //get ten danh muc
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

    ?>

    <div class="headline">
        <h3><?php echo $row_title['tendanhmuc'] ?></h3>
    </div>
    <div class="home-sort">
        <span class="filter-sort">Trang: <?php echo $page ?></span>
         <select class="list-sort-by">
                <option value="price-ascending">Giá: Tăng dần</option>
                <option value="price-descending" >Giá: Giảm dần</option>
                <option value="title-ascending">Tên: A-Z</option>
                <option value="title-descending" >Tên: Z-A</option>
                <option value="created-ascending" >Cũ nhất</option>
                <option value="created-descending">Mới nhất</option>
                <option value="best-selling" >Bán chạy nhất</option>
        </select>

    </div>
</div>
<div class="maincontent">

    <?php
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
                            <button type  = "submit" title = 'thêm vào giỏ' name="themgiohang" class="giohang"><a >thêm vào giỏ</a></button>
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
<div class="content-paging">
    <?php
    $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]'");
    $row_count = mysqli_num_rows($sql_trang);
    $trang = ceil($row_count/2);//chia cho 2 này là lấy ví dụ mỗi trang có 2 sản phẩm
    ?>
    <div class="filter-page">
         <a href="" class="filter-page-control fas ti-angle-left"></a>
        <?php
        for($i=1;$i<=$trang;$i++){
            ?>
            <a <?php if($i==$page){echo 'style="color: red;background-color: #ccc;"';}else{'';} ?> href="index.php?quanly=danhmuc&id=<?php echo $_GET['id']?>&trang=<?php echo $i ?>" class="filter-page-number"><?php echo $i ?></a>

            <?php
        }
        ?>
         <a href="" class="filter-page-control fas ti-angle-right"></a>
    </div>
</div>
