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
            <div class="slideshow-container">
                <?php
                foreach ($slider as $item){
                    extract($item);
                    echo '
              
                <div class="mySlides fade">
                   
                    <img src="View/src/upload/'.$image.'" style="width:100%">
                </div>
';
                }
                ?>
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
            <h1 align="center">Cảm ơn quý khách đã đặt hàng, chúng tôi sẽ liên lạc với quý khách trong thời gian sớm nhất</h1>
            <h2>Thông tin phòng đặt</h2>
            <table>
                <thead>
                    <td>STT</td>
                    <td>Loại Phòng</td>
                    <td>Giá / Đêm</td>
                    <td>Ảnh phòng</td>
                    <td>Số lượng</td>
                    <td>Thành tiền</td>
                </thead>
                <?php
                require_once './Models/room.php';
                $tong = 0;
                foreach ($ctbill as $key => $value){
                    $listphong = loaiphong_loadone($value[0]);
                    $tong += $value[4];
                    ?>
                    <tr class="cart-row">
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $listphong['name']?></td>
                        <td><?php echo $listphong['price']?></td>
                        <td><img src="View/src/upload/<?php echo $listphong['image']?>" alt="Lỗi tải ảnh" width="300px"></td>
                        <td><?php echo $value[3]?></td>
                        <td class="price"><?php echo $value[4]?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="5">Tổng tiền</td>
                    <td ><?php echo $tong ?> VNĐ</td>
                </tr>
            </table>
        </div>
        <div class="main-bookphong">
            <h2>Thông tin khách hàng</h2>
            <?php if($bill_detail != ''){
                ?>
                <form action="index.php?url=bill-confirm" method="post">
                    <div class="frm-boxphong">
                        <div class="boxphong-item">
                            <p>Ngày đến</p>
                            <input type="date" id="ngayden" name="checkin" value="<?php echo $bill_detail[0] ?>" disabled>
                        </div>
                        <div class="boxphong-item">
                            <p>Người lớn</p>
                            <select name="nguoilon" id="" disabled>
                                <option value="0" <?php echo $bill_detail[2] == 0 ? 'selected' : ''?>>Lựa chọn</option>
                                <option value="1" <?php echo $bill_detail[2] == 1 ? 'selected' : ''?>>1</option>
                                <option value="2" <?php echo $bill_detail[2] == 2 ? 'selected' : ''?>>2</option>
                            </select>
                        </div>
                        <div class="boxphong-item">
                            <p>Ngày đi</p>
                            <input type="date" id="ngaydi" name="checkout" value="<?php echo $bill_detail[1] ?>" disabled>
                        </div>
                        <div class="boxphong-item">
                            <p>Trẻ em</p>
                            <select name="treem" id="" disabled>
                                <option value="0" <?php echo $bill_detail[3] == 0 ? 'selected' : ''?>>Lựa chọn</option>
                                <option value="1" <?php echo $bill_detail[3] == 1 ? 'selected' : ''?>>1</option>
                                <option value="2" <?php echo $bill_detail[3] == 2 ? 'selected' : ''?>>2</option>
                            </select>
                        </div>
                    </div>
                    <div class="frm-boxphong">
                        <div class="boxphong-item">
                            <p>Giới tính</p>
                            <select name="sex" id="" disabled>
                                <option value="0" <?php echo $bill_detail[4] == 0 ? 'selected' : ''?>>Lựa chọn</option>
                                <option value="1" <?php echo $bill_detail[4] == 1 ? 'selected' : ''?>>Nam</option>
                                <option value="2" <?php echo $bill_detail[4] == 2 ? 'selected' : ''?>>Nữ</option>
                            </select>
                        </div>
                        <div class="boxphong-item">
                            <p>Họ tên</p>
                            <input type="text" name="fullname" placeholder="Nhập họ tên" value="<?php echo $bill_detail[5] ?>" disabled>
                        </div>
                        <div class="boxphong-item">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="Email" value="<?php echo $bill_detail[6] ?>" disabled>
                        </div>
                        <div class="boxphong-item">
                            <p>Số điện thoại</p>
                            <input type="number" name="tel" placeholder="Số điện thoại" value="<?php echo $bill_detail[7] ?>" disabled>
                        </div>

<!--                        <div class="boxphong-item">-->
<!--                            <p>Thời gian đến</p>-->
<!--                            <input type="datetime-local" name="date_time" id="" value="--><?php //echo $bill_detail[8] ?><!--" disabled>-->
<!---->
<!--                        </div>-->
                        <div class="boxphong-item">
                            <p>Địa chỉ</p>
                            <input type="text" name="address" placeholder="Địa chỉ" value="<?php echo $bill_detail[9] ?>" disabled>
                        </div>
                        <div class="boxphong-item">
                            <p>Thành phố</p>
                            <input type="text" name="city" id="city" placeholder="Thành phố" value="<?php echo $bill_detail[10] ?>" disabled>
                        </div>
                        <div class="boxphong-item">
                            <p>Yêu cầu khác</p>
                            <input type="text" name="yeucau" value="<?php echo $bill_detail[11] ?>" disabled>
                        </div>
                    </div>
<!--                    <div class="checkbox-bp">-->
                        <!--                        <button type="submit">Gửi</button>-->
<!--                        <input type="submit" value="Xác nhận đặt phòng" name="gui">-->
                        <!--                    <button type="submit"></button>-->
<!--                    </div>-->
                </form>
            <?php } ?>
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

