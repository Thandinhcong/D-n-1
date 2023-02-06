<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
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
                <!--form đăng kí-->
                <form action="index.php?url=dang-ky" method="post" name="frmdangki" onsubmit="return validate()">
                    <h2>Đăng kí thành viên</h2>
                    <div class="box-dk">
                        <p>Họ và Tên</p>
                        <input type="text" placeholder="Họ và tên" name="fullname" id="name">
                        <p id="tbname" style="color:red ;"></p>
                    </div>
                    <div class="box-dk">
                        <p>Email</p>
                        <input type="text" placeholder="abcxyz@gmail.com" name="email" id="email">
                        <p id="tbemail" style="color:red ;"></p>
                    </div>
                    <div class="box-dk">
                        <p>Số điện thoại</p>
                        <input type="text" placeholder="0900000000" name="tel" id="number">
                        <p id="tbnumber" style="color:red ;"></p>
                    </div>
                    <div class="box-dk">
                        <p>Mật khẩu</p>
                        <input type="password" placeholder="**********" name="password" id="password"> <br>
                        <p id="tbpassword" style="color:red ;"></p>
                    </div>
                    <div class="box-dk">
                        <p>Nhập lại mật khẩu</p>
                        <input type="password" placeholder="**********" name="repassword" id="respassword"> <br>
                        <p id="tbrespassword" style="color:red ;"></p>

                    </div>
                    <!--                <button type="submit"> Đăng kí</button>-->
                    <input type="submit" value="Đăng ký" name="dangky" class="info-dk-ip">
                    <?php if (isset($thongbao) && ($thongbao != '')) { ?>
                        <h1 style="color: red;"><?php echo $thongbao ?></h1>
                    <?php   } ?>
                </form>
            </div>
            <div class="info-dn-img">
                <img src="View/src/image/image 1.png" alt="">
            </div>
        </div>
    </div>
    <script>
        function validate() {
            var name = document.frmdangki.name.value;
            var email = document.frmdangki.email.value;
            var password = document.frmdangki.password.value;
            var number = document.frmdangki.number.value;
            var respassword = document.frmdangki.respassword.value;
            var ok = true;
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
                alert("Đăng kí thành công");
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>