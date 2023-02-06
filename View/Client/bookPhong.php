<?php //var_dump($_SESSION['mycard']); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book phòng</title>
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
            <?php if (is_array($_SESSION['mycard']) && (count($_SESSION['mycard']) > 0) ){ ?>
            <div class="main-bookphong">
                <h2>Thông tin phòng đặt</h2>
                <table>
                    <tr>
                        <td>STT</td>
                        <td>Loại Phòng</td>
                        <td>Giá / Đêm</td>
                        <td>Ảnh phòng</td>
                        <td>Số lượng</td>
                        <td>Thành tiền</td>
                        <td>Thao tác</td>
                    </tr>
                    <?php
                    //                    var_dump($_SESSION['mycard']);
                    $tong = 0;
                    foreach ($_SESSION['mycard'] as $key => $value) {
                        $tong += $value[5];
                    ?>
                        <tr class="cart-row">
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $value[1] ?></td>
                            <td><?php echo $value[3] ?></td>
                            <td><img src="View/src/upload/<?php echo $value[2] ?>" alt="Lỗi tải ảnh" width="300px"></td>
                            <td><?php echo $value[4] ?></td>
                            <td class="price"><?php echo $value[5] ?></td>
                            <td>
                                <a href="index.php?url=xoa-phong&id=<?php echo $key ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5">Tổng tiền</td>
                        <td><?php echo $tong ?> VNĐ</td>
                    </tr>
                </table>
            </div>
            <?php }else{ ?>
                <h2 align="center">Giỏ hàng chưa có phòng</h2>
         <?php } ?>


            <div class="main-bookphong">
                <h2>Thông tin khách hàng</h2>
                <form action="index.php?url=bill" method="post" onsubmit="return validateKiemTra()">
                    <div class="frm-boxphong">
                        <div class="boxphong-item">
                            <p>Ngày đến</p>
                            <input type="date" id="ngayden" name="checkin" value="" required>
                            <?php if (isset($thongbao['checkin'])) {?>
                                <span style="color: red"><?php echo $thongbao['checkin']?></span>
                            <?php } ?>
                        </div>
                        <div class="boxphong-item">
                            <p>Người lớn</p>
                            <select name="nguoilon" id="" required>
                                <option value="0">Lựa chọn</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="boxphong-item">
                            <p>Ngày đi</p>
                            <input type="date" id="ngaydi" name="checkout" value="" required>
                            <?php if (isset($thongbao['checkout'])) {?>
                                <span style="color: red"><?php echo $thongbao['checkout']?></span>
                            <?php } ?>
                        </div>
                        <div class="boxphong-item">
                            <p>Trẻ em</p>
                            <select name="treem" id="" required>
                                <option value="0">Lựa chọn</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="frm-boxphong">
                        <div class="boxphong-item">
                            <p>Giới tính</p>
                            <select name="sex" id="" required>
                                <option value="0">Lựa chọn</option>
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                        </div>
                        <div class="boxphong-item">
                            <p>Họ tên</p>
                            <input type="text" name="fullname" placeholder="Nhập họ tên" value="<?php echo $user != '' ? $user['fullname'] : '' ?>" required>
                        </div>
                        <div class="boxphong-item">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="Email" value="<?php echo $user != '' ? $user['email'] : '' ?>" required>
                        </div>
                        <div class="boxphong-item">
                            <p>Số điện thoại</p>
                            <input type="number" name="tel" placeholder="Số điện thoại" value="<?php echo $user != '' ? $user['tel'] : '' ?>" required>
                        </div>

<!--                        <div class="boxphong-item">-->
<!--                            <p>Thời gian đến</p>-->
<!--                            <input type="datetime-local" name="date_time" id="" required>-->
<!--                            --><?php //if (isset($thongbao['tgian'])) {?>
<!--                                <br><span style="color: red">--><?php //echo $thongbao['tgian']?><!--</span>-->
<!--                            --><?php //} ?>
<!---->
<!--                        </div>-->
                        <div class="boxphong-item">
                            <p>Địa chỉ</p>
                            <input type="text" name="address" placeholder="Địa chỉ" value="<?php echo $user != '' ? $user['address'] : '' ?>" required>
                        </div>
                        <div class="boxphong-item">
                            <p>Thành phố</p>
                            <input type="text" name="city" id="city" placeholder="Thành phố" required>
                        </div>
                        <div class="boxphong-item">
                            <p>Yêu cầu khác</p>
                            <textarea name="yeucau" id="" placeholder="Nhập yêu cầu của bạn..."></textarea>
                        </div>
                    </div>
                    <div class="checkbox-bp">
<!--                        <input type="checkbox" value=""><label>Tôi đồng ý và chấp nhận điều khoản của khách sạn</label>-->
<!--                        <br>-->
                        <?php if (is_array($_SESSION['mycard']) && (count($_SESSION['mycard']) > 0) ){ ?>
                        <input type="submit" value="Gửi" name="gui">
                        <?php } ?>
                    </div>
                </form>
            </div>
        </main>
        <!--footer-->
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
    <script>
        var today = new Date();
        var dateToday = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        // document.querySelector("#ngayden").value = dateToday;
        var dateNext = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + (today.getDate() + 1);
        // inputdateObject.value = YYYY-MM-DD;
        // document.querySelector("#ngaydi").value = dateNext;
        // var ngayden = document.querySelector("#ngayden").value = '2023-11-20';
        var ngayden = document.getElementById('ngayden').value;
        console.log(ngayden);
        // var ngaydi = document.querySelector("#ngaydi").value = '2022-11-20';
        var flag = true;
        // console.log(ngayden);
        //
        //
        // var ngayden = document.querySelector("#ngayden").value;
        var ngaydi = document.querySelector("#ngaydi").value;


        // function validateKiemTra(){
        //     // if (ngayden == '' || ngaydi == ''){
        //     //     alert('Bạn cần nhập ngày đến và đi');
        //     //     flag = false;
        //     // }
        //
        //     // var flag = true;
        //     if (ngayden < dateToday){
        //         console.log(ngayden);
        //         alert('Không nhập được ngày đến cũ hơn ngày ' +dateToday);
        //         flag = false;
        //     }
        //     if(ngayden > ngaydi){
        //         alert('Ngày đến không thể lớn hơn ngày đi');
        //         flag = false;
        //     }
        //     return flag;
        // }
        // console.log(ngayden > ngaydi);
    </script>
    <script>
        
    </script>
</body>

</html>