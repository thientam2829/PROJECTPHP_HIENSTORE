<?php
$mysqli = new mysqli("localhost", "root", "01286579839", "hienstore");
if ($mysqli->connect_errno) {
    echo "Kết nối không thành công " . $mysqli->connect_error;
    exit();
}
?>
<?php
if(isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $dienthoai = $_POST['dienthoai'];
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $id_role = $_POST['role_id'];
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_khackhang(tenkhachhang,diachi,dienthoai,email,matkhau,role_id) VALUE('".$tenkhachhang."','".$diachi."','".$dienthoai."','".$email."','".$matkhau."',4)");
    if($sql_dangky){
        echo '<h3>Bạn đã đăng ký thành công</h3>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header('Location:index.php?quanly=giohang');
    }
}
?>
    <form action="#" method="POST" >
        <div class="login-dkdn">
            <h2> Đăng kí  </h2>
            <input type="text" placeholder="Họ tên " name="hoten" >
            <br>
            <input type="text" placeholder="Địa chỉ nhận hàng " name="diachi" >
            <br>
            <input type="text" placeholder="Số điện thoại " name="dienthoai">
            <br>
            <input type="text" placeholder="Email" name="email">
            <br>
            <input type="password" placeholder="Mật Khẩu" name="matkhau">
            <br>
            <button name="dangky" >Đăng kí </button>
            <div><a href="index.php"><p> ← Quay lại</p> </a>
            </div>
        </div>
    </form>
 <!--<script>
    function checkInput() {
        var mail = document.getElementByname('email').value;
        var checkEmail = mail.includes("@gmail.com");
        var isEmail = false;
        var isCheckEmail = false;
        if (checkEmail == true) {
            isEmail = true;
        } else {
            isEmail = false;
        }
        if (mail == "" || isEmail == false) {
            document.getElementById('p-email').style.visibility = "inherit";
            document.getElementById('p-email').style.color = "red";

            setTimeout(function() {
                document.getElementById('p-email').style.visibility = "hidden";
            }, 10000);
        } else {
            isCheckEmail = true;
        }
        var phone = document.getElementByname('dienthoai').value;
        var isCheckPhone = false;

        for (var i = 0; i <= phone.length - 1; i++) {
            if (phone[i].charCodeAt() < 48 || phone[i].charCodeAt() > 57) {
                isCheckPhone = true;
            }
        }

        if (isCheckPhone == true || phone == "") {
            document.getElementById('p-phone').style.visibility = "inherit";
            document.getElementById('p-phone').style.color = "red";

            setTimeout(function() {
                document.getElementById('p-phone').style.visibility = "hidden";
            }, 10000);
        }
        if ((isCheckPhone == false)  && (isCheckEmail == true)) {
            window.location.href ="/index.php";
            localStorage.setItem("infor-user", JSON.stringify(infoUser));
        }
    }
</script> -->