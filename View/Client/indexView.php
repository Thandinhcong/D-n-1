<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

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
            <div class="banner-header">
                <div class="tilte">
                    <h1>Sự hài lòng là phương châm của chúng tôi</h1>
                    <p> Đặt phòng ngay để có những trải nhiệm tốt nhất</p>
                </div>
                <div class="image">
                    <img src="View/src/image/khachsan.jfif" alt="">
                </div>
            </div>
            <div class="book-date">
                <form action="">
                    <label for="">Arival date</label>
                    <input type="date" class="input-date" id="arival-date">
                    <label for="">Deprture date</label>
                    <input type="date" name="" class="input-date" id="deprture-date">
                    <label for="">Number of people</label>
                    <input type="number" name="" id="number">
                    <a href="index.php?url=loai-phong"><input type="button" name="" id="book" value="BOOK A STAY"></a>
                </form>
            </div>
            <div class="header-conten">
                <hr>
                <div class="conten">
                    <h2>Tại đây, các tài năng địa phương hội tụ với nhau.</h2>
                    <p>Chúng tôi rất hân hạnh được giúp phục vụ các bạn. Chúng tôi luôn đón chào các bạn là đưa đến cho
                        các bạn trải nghiệm thật tuyệt vời nhất. Và lời cuối cùng chúc các bạn có một kỳ nghỉ thật là
                        tốt và ý nghĩa ! xin trân thành cảm ơn
                    </p>
                </div>
                <hr>
            </div>
        </div>
        <!--main-->
        <main>
            <div class="box-index">
                <div class="introduction">
                    <img src="View/src/image/grace-hotel-santorini-wedding-02-1626594852-1626702555 1.png" alt="">
                    <p>Cách cổng tốt nhất mà bạn có thể mơ ước. Văn hóa, bãi biển nhân tạo và ẩm thực. Tận hưởng kỳ
                        nghỉ
                        của bạn với gia đình hoặc đối tác của bạn tại một quang cảnh bãi tắm trên cao .</p>
                    <button><a href="index.php?url=loai-phong">Xem chi tiết</a></button>
                </div>
                <div class="main-loaiphongs">

                    <h1>PHÒNG</h1>
                    <div class="rooms">
                        <?php
//                        var_dump($listPhong);
                        foreach($listPhong as $key => $value){ ?>
                        <div class="room">
                            <img src="View/src/upload/<?php echo $value['image']?>" alt="">
                            <div class="information">
                                <div class="icon">
                                    <p><i class='bx bxs-user'></i> Số người: <?php echo $value['number']?></p><br>
                                    <p> <i class='bx bxs-area'></i> Diện tích : <?php echo $value['area']?></p> <br>
                                    <p> <i class='bx bxs-bed'></i> Loại giường: <?php echo $value['bed']?></p><br>
                                    <p><i class='bx bxs-bullseye'></i> Hướng nhìn: <?php echo $value['views']?></p> </i>
                                </div>
                                <button><a href="index.php?url=chi-tiet-phong&id=<?php echo $value['id_cate']?>">Xem chi tiết</a></button>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="main-service">
                    <h1>DỊCH VỤ </h1>
                    <div class="service">
                        <img src="View/src/image/Rectangle 20.png" alt="">
                        <div class="tillet">
                            <p>Chúng tôi là khách sạn tốt nhất đã có kinh nghiệm trong 30 năm, đừng lo lắng về dịch vụ
                                của
                                chúng tôi
                            </p>
                            <button><a href="index.php?url=dich-vu">Xem chi tiết</a></button>
                        </div>
                    </div>
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
    </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="View/src/js/main.js"></script>

</html>