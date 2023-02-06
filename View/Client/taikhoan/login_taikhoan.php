<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="dn-box">
            <div class="info-dn">
                <div class="logo-dn">
                    <a href="index.php?url=trang-chu"> <img src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png" alt=""></a>
                </div>
                <!--form đăng nhập-->
                <form action="index.php?url=dang-nhap" method="post" name="frmdangki" onsubmit="return validatefrom()">
                    <h2>Chào mừng đến với đăng nhập</h2>
                    <div class="box-dn">
                        <p>Email</p>
                        <input type="text" placeholder="abcxyz@gmail.com" name="email" id="email">
                        <p id="idemail" style="color: red;"></p>
                    </div>
                    <div class="box-dn">
                        <p>Mật khẩu</p>
                        <input type="password" placeholder="**********" name="password" id="password"> <br>
                        <p id="idpassword" style="color:red;"></p>
                    </div>
                    <div class="box-dn1">
                        <div class="box-dn1-cb">
                            <input type="checkbox"><label>Ghi nhớ tài khoản</label>
                        </div>
                        <a href="index.php?url=quen-mat-khau">Quên mật khẩu</a> <br>
                    </div>
                    <!--                <button type="submit"> Đăng nhập</button>-->
                    <input type="submit" value="Đăng nhập" name="dangnhap" class="info-dn-ip">
                    <button type="button"><i class="fa-brands fa-google"></i> Đăng nhập bằng tài khoản Google</button>
                    <?php if (isset($thongbao) && ($thongbao != '')) { ?>
                        <h1 style="color: red; text-align: center;"><?php echo $thongbao ?></h1>
                    <?php   } ?>
                </form>
                <p class="dki">Bạn chưa có tài khoản? <a href="index.php?url=dang-ky">Tạo tài khoản miễn phí</a></p>
            </div>
            <div class="info-dn-img">
                <img src="View/src/image/image 1.png" alt="">
            </div>
        </div>
    </div>
    <script>
        function validatefrom() {
            var ok=true;
            var email = document.frmdangki.email.value;
            var password = document.frmdangki.password.value;
            var regemail = /\w+([\.-]?\w+)*@\w+(\.\w{2,3})+$/;
            if (email == "") {
                document.getElementById("idemail").innerHTML = "Vui lòng nhập email !";
                return false;
            } else if (!email.match(regemail)) {
                document.getElementById("idemail").innerHTML = "Email không đúng định dạng !";
                return false;
            } else {
                document.getElementById("idemail").innerHTML = '';
            }
            //  maatj khaaur
            if (password == '') {
                document.getElementById("idpassword").innerHTML = "Hãy nhập mật khẩu !";
                return false;
            }  else {
                document.getElementById("idpassword").innerHTML = '';
            }
            // if(ok){
            //     alert("Đăng nhập thành công")
            //     return true;
            // }else{
            //     return false;
            // }
        }
    </script>
    
</body>

</html>