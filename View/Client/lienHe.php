<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="menu">
                <div class="logo">
                    <a href="index.php?url=trang-chu"> <img src="View/src/upload/<?php echo $giaoDien[0]['logo'] ?>"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php?url=trang-chu">Trang chủ</a></li>
                        <li><a href="index.php?url=gioi-thieu">Giới thiệu</a></li>
                        <li><a href="index.php?url=loai-phong">Loại phòng</a></li>
                        <li><a href="index.php?url=dich-vu">Dịch vụ</a></li>
                        <li><a href="index.php?url=lien-he">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header_book">
                <a href="index.php?url=book-phong"><input type="button" value="ĐẶT PHÒNG"></a>
                <?php if (isset($_SESSION['account']) && ($_SESSION['account']['role'] > 0)) { ?>
                    <a href="index.php?url=admin"> <input type="button" value="Admin"></a>
                    <a href="index.php?url=dang-xuat"> <input type="button" value="Đăng xuất"></a>
                <?php } elseif (isset($_SESSION['account']) && ($_SESSION['account']['role'] == 0)) { ?>
                    <a href="index.php?url=sua-tai-khoan"> <input type="button" value="Account"></a>
                    <a href="index.php?url=dang-xuat"> <input type="button" value="Đăng xuất"></a>
                <?php } else { ?>
                    <a href="index.php?url=dang-nhap"> <input type="button" value="Đăng nhập"></a>
                <?php } ?>
            </div>
        </header>
        <div class="banner">
            <div class="slideshow-container">
                <?php
                foreach ($slider as $item) {
                    extract($item);
                    echo '
              
                <div class="mySlides fade">
                   
                    <img src="View/src/upload/' . $image . '" style="width:100%">
                </div>
';
                }
                ?>
                <!--                <div class="mySlides fade">-->
                <!--                    <div class="numbertext">2 / 3</div>-->
                <!--                    <img src="View/src/image/4 STUDIO 801_1 1920-min.jpg" style="width:100%">-->
                <!--                    <div class="text">Caption Two</div>-->
                <!--                </div>-->
                <!---->
                <!--                <div class="mySlides fade">-->
                <!--                    <div class="numbertext">3 / 3</div>-->
                <!--                    <img src="View/src/image/5 DELUXE STUDIO_P704_1 1920-min.jpg" style="width:100%">-->
                <!--                    <div class="text">Caption Three</div>-->
                <!--                </div>-->

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <main>
            <div class="main-lienhe">
                <div class="lh-box-left">
                    <h2>LIÊN HỆ</h2>
                    <p>Đội đặt phòng của chúng tôi luôn sẵn sàng để giúp bạn lập kế hoạch du lịch, từ đặt một đêm đơn lẻ
                        đến các hành trình đa điểm phức tạp.</p>
                    <p><i class="fa-solid fa-location-dot"></i> Số 1 Đường Trịnh Văn Bô-Nam Từ Niêm -Hà Nội</p>
                    <p><i class="fa-solid fa-phone"></i> 0999999999</p>
                    <p><i class="fa-regular fa-envelope"></i> Duan1nhom4@gmail.com</p>
                </div>
                <div class="lh-box-right">
                    <form action="index.php?url=lien-he" method="post" onsubmit="return validate()" name="frmlienhe">
                        <div class="frm-boxright">
                            <div>
                                <select name="sex" id="sex" >
                                    <option value="0">--Lựa chọn--</option>
                                    <option value="1">Ông </option>
                                    <option value="2">Bà</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" name="name" value="" placeholder="Họ tên" id="name">
                                <p style="color: red;" id="tbname"></p>
                            </div>
                            <div>
                                <input type="number" name="phone" value="" placeholder="Số điện thoại" min="0" id="sdt">
                                <p style="color: red;" id="tbsdt"></p>
                            </div>
                            <div>
                                <input type="text" name="email" placeholder="Email" id="email">
                                <p style="color: red;" id="tbemail"></p>
                            </div>
                        </div>
                        <textarea name="content" placeholder="Yêu cầu khác"></textarea> <br>
                        <input type="submit" id="submit" name="gui" value="Gửi">
                        <p style="color: red;" id="tblienhe"></p>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-box1">
                <div class="footer-box">
                    <h2>Khách sạn CHAN MAY VN</h2>
                    <p><i class="fa-sharp fa-solid fa-location-dot"></i> <?php echo $giaoDien[0]['address'] ?></p>
                    <p><i class="fa-sharp fa-solid fa-phone"></i> <?php echo $giaoDien[0]['tel'] ?></p>
                    <p><i class="fa-sharp fa-solid fa-envelope"></i> <?php echo $giaoDien[0]['email'] ?></p>
                </div>
                <div class="footer-box">
                    <h2>Về chúng tôi</h2>
                    <a href="index.php?url=lien-he">Liên hệ</a> <br>
                    <a href="index.php?url=vi-tri-va-chi-duong">Vị trí & chỉ đường</a> <br>
                    <a href="index.php?url=tien-ich">Tiện ích</a>
                </div>
                <div class="footer-box">
                    <h2>Những điều cần biết</h2> <br>
                    <a href="index.php?url=hoi-dap">Hỏi đáp</a> <br>
                    <a href="index.php?url=dieu-kien-va-dieu-khoan">Điều khoản & điều kiện</a>
                </div>
                <div class="footer-box2">
                    <a href="index.php?url=trang-chu"> <img src="View/src/upload/<?php echo $giaoDien[0]['logo'] ?>" alt=""></a>
                    <script lang="javascript">
                        var __vnp = {
                            code: 4505,
                            key: '',
                            secret: '2d9af8430e9f03871b8868f5ddb7797c'
                        };
                        (function() {
                            var ga = document.createElement('script');
                            ga.type = 'text/javascript';
                            ga.async = true;
                            ga.defer = true;
                            ga.src = '//core.vchat.vn/code/tracking.js';
                            var s = document.getElementsByTagName('script');
                            s[0].parentNode.insertBefore(ga, s[0]);
                        })();
                    </script>
                </div>
            </div>
        </footer>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        function validate() {
            var gioitinh = document.frmlienhe.sex.value;
            var name = document.frmlienhe.name.value;
            var sdt = document.frmlienhe.sdt.value;
            var email = document.frmlienhe.email.value;
            var ok = true;
            // name
            var regname=/^[a-zA-Z]/;
            if (name == '') {
                document.querySelector("#tbname").innerHTML = "Vui lòng nhập họ và tên!";
                return false;
            } else if(!name.match(regname)){
                document.querySelector("#tbname").innerHTML = "Nhập đúng họ và tên!";
                return false;
            }
            else {
                document.querySelector("#tbname").innerHTML = "";
            }
            // so dien thoai
            var regsdt = /^0[0-9]{9}$/;
            if (sdt == '') {
                document.querySelector("#tbsdt").innerHTML = "Vui lòng nhập số điện thoại!";
                return false;
            }else if(!sdt.match(regsdt)){
                document.querySelector("#tbsdt").innerHTML = "Số điện thoại không đúng định dạng !";
                return false;
            }
            else {
                document.querySelector("#tbsdt").innerHTML = "";
            }
            //email
            var regemail = /\w+([\.-]?\w+)*@\w+(\.\w{2,3})+$/;
            if (email == '') {
                document.querySelector("#tbemail").innerHTML = "Vui lòng nhập email!";
                return false;
            }else if(!email.match(regemail)){
                document.querySelector("#tbemail").innerHTML = "Email không đúng định dạng !";
                return false;
            }
            else {
                document.querySelector("#tbemail").innerHTML = "";
            }
            
        }
    </script>
</body>

</html>