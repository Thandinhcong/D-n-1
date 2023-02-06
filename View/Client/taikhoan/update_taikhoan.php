<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="dk-box">
            <div class="info-dk">
                <div class="logo-dn">
                    <a href="index.php?url=trang-chu"> <img src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png" alt=""></a>
                </div>
                <?php
                if (isset($_SESSION['account']) && is_array($_SESSION['account'])) {
                    $account = $_SESSION['account'];
                ?>
                        <a href="index.php?url=booking-cua-toi&id=<?php echo $account['id_account']?>"><h2 style="font-size: 20px">Booking của tôi</h2></a>
                    <form action="index.php?url=sua-tai-khoan" method="post" name="frmupdate" onsubmit=" return validate()">
                        <h2>Cập nhật tài khoản</h2>
                        <div class="box-dk">
                            <p>Họ và tên</p>
                            <input type="text" value="<?php if (isset($account['fullname']) && ($account['fullname'])) echo $account['fullname'] ?>" name="fullname" id="name">
                            <p style="color: red; " id="tbname"></p>
                        </div>
                        <div class="box-dk">
                            <p>Số điện thoại</p>
                            <input type="tel" value="<?php if (isset($account['tel']) && ($account['tel'])) echo $account['tel'] ?>" name="tel" id="number">
                            <p style="color: red; " id="tbnumber"></p>
                        </div>
                        <div class="box-dk">
                            <p>Địa chỉ</p>
                            <input type="text" value="<?php if (isset($account['address']) && ($account['address'])) echo $account['address'] ?>" name="address" id="address">
                            <p style="color: red; " id="tbaddress"></p>
                        </div>
                        <div class="box-dk">
                            <p>Email</p>
                            <input type="email" value="<?php if (isset($account['email']) && ($account['email'])) echo $account['email'] ?>" name="email" id="email">
                            <p style="color: red; " id="tbemail"></p>
                        </div>
                        <div class="box-dk">
                            <p>Mật khẩu</p>
                            <input type="password" value="<?php if (isset($account['password']) && ($account['password'])) echo $account['password'] ?>" name="password" id="password"> <br>
                            <p style="color: red; " id="tbpassword"></p>
                        </div>
                        <div class="box-dk">
                            <p>Nhập lại mật khẩu</p>
                            <input type="password" name="repassword" id="respassword"><br>
                            <p style="color: red; " id="tbrespassword"></p>
                        </div>
                        <!--                <button type="submit">CẬP NHẬT</button>-->
                        <input type="hidden" value="<?php if (isset($account['id_account']) && ($account['id_account'])) echo $account['id_account'] ?>" name="id">
                        <input type="submit" value="CẬP NHẬT" name="capnhat" class="info-dk-ip">
                        <?php if (isset($thongbao) && ($thongbao != '')) { ?>
                            <h1 style="color: red; text-align: center;"><?php echo $thongbao ?></h1>
                        <?php   } ?>
                    </form>
                <?php } ?>
            </div>
            <div class="info-dn-img">
                <img src="View/src/image/image 1.png" alt="">
            </div>
        </div>
    </div>
    <script>
        function validate() {
            var ok=true;
            var name = document.frmupdate.name.value;
            var email = document.frmupdate.email.value;
            var password = document.frmupdate.password.value;
            var number = document.frmupdate.number.value;
            var respassword = document.frmupdate.respassword.value;
            var address = document.frmupdate.address.value;

            if (name == "") {
                document.querySelector("#tbname").innerHTML = "Vui lòng nhập tên đăng nhập !";
                return false;
            } else {
                document.querySelector("#tbname").innerHTML = "";
            }
            // email
            var regemail = /\w+([\.-]?\w+)*@\w+(\.\w{2,3})+$/;
            if (email == "") {
                document.querySelector("#tbemail").innerHTML = "Vui lòng nhập email !";
                return false;
            } else if (!email.match(regemail)) {
                document.querySelector("#tbemail").innerHTML = "Email không đúng định dạng!";
                return false;
            } else {
                document.querySelector("#tbemail").innerHTML = "";
            }
            //số điện thoai
            var regsdt = /^0[0-9]{9}$/;
            if (number == "") {
                document.querySelector("#tbnumber").innerHTML = "Vui lòng nhập số điện thoại !";
                return false;
            } else if (!number.match(regsdt)) {
                document.querySelector("#tbnumber").innerHTML = "Số điện thoại không đúng định dạng !";
                return false;
            } else {
                document.querySelector("#tbnumber").innerHTML = "";
            }
            // địa chỉ
            if (address == "") {
                document.querySelector("#tbaddress").innerHTML = "Vui lòng nhập địa chỉ !";
                return false;
            } else {
                document.querySelector("#tbaddress").innerHTML = "";

            }
            // ,mật khẩu
            if (password == "") {
                document.querySelector("#tbpassword").innerHTML = "Vui lòng nhập mật khẩu !";
                return false;
            } else if (password.length < 5) {
                document.querySelector("#tbpassword").innerHTML = "Mật khẩu quá ngắn!";
                return false;
            } else {
                document.querySelector("#tbpassword").innerHTML = "";
            }
            // nhập lại mật khẩu
            if (respassword == "") {
                document.querySelector("#tbrespassword").innerHTML = "Vui lòng nhập mật khẩu !";
                return false;
            } else if (respassword != password) {
                document.querySelector("#tbrespassword").innerHTML = "Mật khẩu không trùng khớp";
                return false;
            } else {
                document.querySelector("#tbrespassword").innerHTML = "";
            }
            // submit
            if (ok) {
                alert("Cập nhật thành công");
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>