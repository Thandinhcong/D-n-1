<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="mk-box">
            <div class="info-mk">
                <div class="logo-dn">
                    <a href="index.php?url=trang-chu"> <img src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png" alt=""></a>
                </div>
                <h2>Quên mật khẩu</h2>
                <form action="index.php?url=quen-mat-khau" method="post" class="frm-mk" name="frmquenmk" onsubmit="return validate()">
                    <div class="box-mk">
                        <p>Email</p>
                        <input type="email" placeholder="abcxyz@gmail.com" name="email" id="email">
                        <p id="tbemail" style="color:red ;"></p>
                    </div>
                    <!--<button type="submit">Kiểm tra tài khoản</button>-->
                    <input type="submit" value="Gửi mật khẩu về email" name="quenmatkhau" class="info-mk-ip">
                    <?php if (isset($thongbao) && ($thongbao != '')) { ?>
                        <h1 style="color: red;"><?php echo $thongbao ?></h1>
                    <?php   } ?>
                </form>
                <div class="info-mk-a">
                    <a href="index.php?url=dang-nhap">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validate() {
            var email=document.frmquenmk.email.value;
            if(email==""){
                document.getElementById("tbemail").innerHTML="Vui lòng nhập email !";
                return false;
            }else{
                document.getElementById("tbemail").innerHTML="";
                
            }
        }
    </script>
</body>

</html>