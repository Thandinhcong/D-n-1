<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill thanh toán</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <header>
        <div class="menu">
            <div class="logo">
                <a href="index.php?url=trang-chu"> <img src="View/src/upload/<?php echo $giaoDien[0]['logo']?>"></a>
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
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="View/src/image/chup-hinh-khach-san-nha-hang-mimosa-06-1 1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="View/src/image/4 STUDIO 801_1 1920-min.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="View/src/image/5 DELUXE STUDIO_P704_1 1920-min.jpg" style="width:100%">
            </div>

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
    <!--Main-->
    <main>
        <div class="main-bookphong">
            <h2>Thông tin phòng đặt</h2>
            <table>
                <tr>
                    <td>STT</td>
                    <td>Họ và tên</td>
                    <td>Số điện thoại</td>
                    <td>Email</td>
                    <td>Tổng tiền</td>
                    <td>Check in</td>
                    <td>Check out</td>
                    <td>Trạng thái</td>
                    <td>Thao tác</td>
                </tr>
                <?php
                if (isset($listdh) && ($listdh != '')){
                foreach ($listdh as $key => $value){
                    if ($value['status'] == 0){
                        $tt = 'Vừa đặt';
                    }elseif ($value['status'] == 1){
                        $tt = 'Đang thuê';
                    }elseif ($value['status'] == 2){
                        $tt = 'Trả phòng';
                    }elseif ($value['status'] == 3){
                        $tt = 'Đã hủy';
                    }
                    ?>
                    <tr class="cart-row">
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value['fullname']?></td>
                        <td><?php echo $value['tel']?></td>
                        <td><?php echo $value['email']?></td>
                        <td><?php echo $value['total_price']?></td>
                        <td><?php echo $value['check_in_date']?></td>
                        <td><?php echo $value['check_out_date']?></td>
                        <td><?php echo $tt?></td>
                        <?php if ($value['status'] == 0){ ?>
                        <td>
                            <a href="index.php?url=huy-booking&id=<?php echo $value['id_book']?>" onclick = "return confirm(`Bạn muốn hủy booking này?`)"; id = "delete"><button>Hủy booking</button></a>
                        </td>
                        <?php } ?>
                    </tr>
                <?php }
                }else{ ?>
                    <h1 style="color: red">Chưa có thông tin phòng đặt</h1>
                <?php } ?>
            </table>
        </div>

    </main>
    <!--footer-->
    <footer>
        <div class="footer-box1">
            <div class="footer-box">
                <h2>Khách sạn CHAN MAY VN</h2>
                <p><i class="fa-sharp fa-solid fa-location-dot"></i> <?php echo $giaoDien[0]['address']?></p>
                <p><i class="fa-sharp fa-solid fa-phone"></i> <?php echo $giaoDien[0]['tel']?></p>
                <p><i class="fa-sharp fa-solid fa-envelope"></i> <?php echo $giaoDien[0]['email']?></p>
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
                <a href="index.php?url=trang-chu"> <img src="View/src/upload/<?php echo $giaoDien[0]['logo']?>" alt=""></a>
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
            setTimeout(showSlides, 2000);
        }
    </script>
</div>
</body>

</html>

