<?php

if(is_array($list_onerooms)) {
    extract($list_onerooms);
//     var_dump($list_onerooms);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết phòng</title>
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
                <?php foreach ($img_room as $value ){
                    extract($value);
               echo '
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="View/src/upload/'.$image.'" style="width:100%">
                </div>
                ';
                 } ?>

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
            <div class="main-chitiet">
                <h1>CHAN MAY</h1>
                <div class="item-ct">
                    <h2><?php echo $name;?></h2>
                  <p><?php echo $description; ?></p>
                </div>
                <div class="chitietphong">
                    <div class="ct-info">
                        <h4>1. Tiện tích</h4>
                        <p>
                            -Buffet sáng <br>
                            Hệ thống điện chiếu sáng, nước sinh hoạt <br>
                            Trung tâm thể thao Fitness ( Bơi, xông hơi, phòng tập Gym) <br>
                            Dọn phòng theo ngày theo tiêu chuẩn khách sạn <br>
                            Bãi đậu xe công cộng <br>
                            Miễn phí vệ sinh tòa nhà <br>
                            Miễn phí thuê xe đạp <br>
                            02 chai nước suối 350ml, trà Dimah, cafe <br>
                            Sân bóng rổ mini ngoài trời <br>
                            Đăng ký tạm trú, tạm vắng cho người nước ngoài theo đúng thủ tục pháp lý. <br>
                        </p>
                    </div>
                    <div class="ct-info">
                        <h4>2. Dịch vụ tính phí</h4>
                        <p>
                            Bữu ăn theo yêu cầu ( Trưa, tối,...) <br>
                            Giặt là theo yêu cầu <br>
                            Karaoke <br>
                            Massage, xông hơi <br>
                            Ngoại trừ phòng đã quy định với số người là :  <?php echo $number;?> <br>
                            Thì trẻ 6-12 tuổi, phụ thu 100.000 VND bữa sáng <br>
                            Trẻ 12 tuổi trở lên, kê thêm giường Extrabeb: 200.000 VND <br>
                            06-12 tuổi phụ thu 100.000 VNĐ <br>
                            Ở ghép: 150.000/khách <br>
                        </p>

                    </div>
                    <div class="ct-info">
                        <h4>3. Thiết bị trong phòng</h4>
                        <p>
                            phòng có diện tích  <?php echo $area;?> m2 và <?php echo $bed;?> <br>
                            Bên cạnh đó còn có views  <?php echo $views;?> <br>
                            Máy giặt Aqua Nhật Bản (7kg), Giá phơi quần áo <br>
                            Truyền hình Internet, Smart TV với hệ thống kênh truyền hình Quốc tế <br>
                            Điện thoại có thể gọi Quốc tế <br>
                            Máy giặt, Cầu là, bàn là <br>
                            Máy sấy <br>
                            Két an toàn <br>
                            Phòng tắm có bồn tắm đứng, thiết bị vệ sinh hiện đại, gương cầu lồi. <br>
                            Phòng nghỉ với toàn bộ chăn ga gối đệm thương hiệu Hanvico <br>
                            Cân sức khỏe, đèn bàn làm việc, ấm siêu tốc, điều hòa,đèn bàn, tủ minibar <br>
                            Hệ thống nước nóng trung tâm Hip Bam <br>
                            Ghế thư giãn <br>
                            Đồ dùng phòng tắm <br>
                            Áo choàng tắm từ sợi bông <br>
                        </p>
                    </div>
                </div>
                <!--book phòng-->
                <?php if ($quantity > 0){ ?>
                <form action="index.php?url=them-moi-gio-hang" method="post" class="frm-ctp">
                    <input type="hidden" name="id" value="<?php echo $id_cate;?>">
                    <input type="hidden" name="name" value="<?php echo $name;?>">
                    <input type="hidden" name="image" value="<?php echo $image;?>">
                    <input type="hidden" name="price" value="<?php echo $price;?>">
                    <input type="number" name="quantity" min="1" max="<?php echo $quantity ?>" value="1" >
<!--                    <a href="index.php?url=themmoi"><input type="button" value="ĐẶT PHÒNG"></a>-->
                    <input type="submit" name="themmoi" value="Đặt Phòng">
                </form>
                <?php }else{ ?>
                <form action="#" method="post" class="frm-ctp">
                    <input type="button" name="themmoi" value="Hết Phòng" class="input-soldout">
                </form>
                <?php } ?>
                <!--frm binh luan-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("./View/Client/binhluan.php", {id_room:<?=$id_cate?>});
                    });
                </script>
                <div class="topproducts" id="binhluan">
                    
                </div>
                <div class="ct-phongkhac">
                    <?php
                    foreach ($list_roomss as $values){
                        extract($values);
                        echo '
         
                    <div class="ct-phongkhac1">
                        <div class="ct-phongkhac-img anh">
                            <a href="index.php?url=chi-tiet-phong&id='.$id_cate .'"><img src="./View/src/upload/'.$image.'" alt=""></a>
                        </div>
                        <div class="ctphongkhac-info">
                            <a href="index.php?url=chi-tiet-phong&id='.$id_cate .'">
                                <h4>'.$name.'</h4>
                            </a>
                            <span>Giá : '.$price.' VNĐ/ ngày </span>
                        </div>
                    </div>
                    ';
                     }
                    ?>

                </div>

            </div>
        </main>
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
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </div>
</body>

</html>