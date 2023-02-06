<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <header>
        <div class="menu">
            <div class="logo">
                <a href="index.php?url=trang-chu"><img src="View/src/upload/<?php echo $giaoDien[0]['logo']?>"></a>
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
    <main>
        <div class="main-gioithieu">
            <div class="boxgt">
                <h1>Chào mừng đến với khách sạn CHAN MAY </h1>
                <div class="icon-box-gt">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <p><span>CHAN MAY</span> là thương hiệu khách sạn và dịch vụ căn hộ cho thuê được quản lý và phát triển bởi Tập
                    đoàn Tuta một trong những tập đoàn Bất động sản uy tín và phát triển nhanh nhất thủ đô HÀ NỘI.
                    Với giá trị cốt lõi Tận Tâm, Tử Tế trong dịch vụ, trong từng bước xây dựng sản phẩm, tạo ra
                    những giá trị và trải nghiệm tốt nhất cho khách hàng trong mọi lĩnh vực của Tập đoàn. <br>
                    <span>CHAN MAY HOTEL</span> nằm ở vị trí lý tưởng trung tâm sầm uất của Thành phố Bắc Giang
                    thuận tiện cho cả việc di chuyển đến các khu công nghiệp, trung tâm hành chính hay khám phá trải
                    nghiệm du lịch thành phố, Ravatel Hotels & Apartments có đa dạng lựa chọn từ Khách sạn & Căn Hộ
                    Ravatel Home tiêu chuẩn 3 sao, Ravatel Luxury Hotel với kiến trúc xanh độc đáo tiêu chuẩn 4 sao
                    và Ravatel Style khách sạn Boutique cao cấp đầu tiên và duy nhất tại thành phố Bắc Giang, đáp
                    ứng mọi nhu cầu từ nghỉ tiếng, qua đêm đến ở dài hạn phù hợp với mọi ngân sách của khách hàng.
                    <br>
                    Đến với <span>CHAN MAY HOTEL </span> khách hàng tận hưởng đầy đủ trải nghiệm và tiện ích phục vụ
                    mọi nhu cầu ăn uống, giải trí & tiếp khách tất cả chỉ trong một bước chân: <br>
                    -Hệ thống phòng họp đa dạng, phòng hội thảo phục vụ lên đến 350 khách <br>
                    -Bể bơi bốn mùa và phòng tập Fitness hiện đại <br>
                    -Top Hit, hệ thống phòng hát Karaoke và massage sang trọng đẳng cấp <br>
                    -Chuỗi nhà hàng món ăn Trung Hoa do chính đầu bếp người Trung Quốc lên thực đơn ra món, nhà hàng
                    Rùa Vàng với những món ăn đặc sản, truyền thống Việt Nam và nhà hàng Hải Sản Ghẹ Xanh lớn nhất
                    thành phố Bắc Giang <br>
                    Cùng không gian khuôn viên xanh mát, nội thất sang trọng, chất lượng dịch vụ 5 sao, đội ngũ nhân
                    viên chuyên nghiệp sử dụng thành thạo tiếng Trung, tiếng Hàn và tiếng Anh, Ravatel Hotels &
                    Apartments là lựa chọn hoàn hảo nhất tại thành Phố Bắc Giang. <br>

                    <span>Khách sạn CHAN MAY </span> <br>
                    Là khách sạn Boutque cao cấp đầu tiên tại Bắc Giang, với kiến trúc cá tính, nội thất phong cách
                    trẻ trung, tinh tế nhẹ nhàng, không gian phòng tràn gập ánh sáng tự nhiên bao quoanh bởi ban
                    công cây xanh mướt, Ravatel Style như một ốc đảo nhiệt đới bình yên giữa ồn ào của nhịp sống đô
                    thị, với hàng trăm góc sống ảo và là điểm đến trải nghiệm không thể bỏ qua của các tín đồ sành
                    điệu yêu thích selfi. <br>
                    Ravatel Style Bắc Giang khách sạn duy nhất ở Bắc Giang cứ nhấc máy chụp là có góc ảnh đẹp. <br>
                    <span>Phòng nghỉ</span> <br>
                    Ravatel Style sở hữu hai hạng phòng Studio và Deluxe Studio sang trọng và quyến rũ với đầy đủ
                    tiện nghi hiện đại như bàn làm việc, máy giặt, tủ lạnh và khu bếp với đầy đủ trang thiết bị phù
                    hợp cho cả khách đi làm việc kết hợp nghỉ ngơi ngắn ngày, khách làm việc tại Bắc Giang lưu trú
                    dài hạn hay đơn giản là một ngày trọn vẹn cho cặp đôi đổi gió thư giãn bên nhau tự nấu ăn và
                    thưởng thức những món mình ưa thích mà không phải ra ngoài ở ngay trung tâm thành phố.
                </p>
                <img src="View/src/image/1 Overview_1 1920-min (1).jpg" alt="">
                <p><span>Nhà nghỉ</span><br>
                    Ravatel Style sở hữu hai hạng phòng Studio và Deluxe Studio sang trọng và quyến rũ với đầy đủ
                    tiện nghi hiện đại như bàn làm việc, máy giặt, tủ lạnh và khu bếp với đầy đủ trang thiết bị phù
                    hợp cho cả khách đi làm việc kết hợp nghỉ ngơi ngắn ngày, khách làm việc tại Bắc Giang lưu trú
                    dài hạn hay đơn giản là một ngày trọn vẹn cho cặp đôi đổi gió thư giãn bên nhau tự nấu ăn và
                    thưởng thức những món mình ưa thích mà không phải ra ngoài ở ngay trung tâm thành phố.
                </p>
                <div class="boxgt-ct">
                    <div class="boxgt-ct-img">
                        <img src="../image/4 STUDIO 801_1 1920-min.jpg" alt="">
                    </div>
                    <div class="boxgt-ct-item">
                        Studio <br>
                        Diện tích: 24m2 <br>
                        Loại giường: 2 giường đơn <br>
                        Nhà tắm đứng <br>
                        Vị trí: Từ tầng 2 – 7 <br>
                        Số lượng phòng: 18 phòng <br>
                    </div>
                </div>
                <div class="boxgt-ct">
                    <div class="boxgt-ct-img">
                        <img src="View/src/image/5 DELUXE STUDIO_P704_1 1920-min.jpg" alt="">
                    </div>
                    <div class="boxgt-ct-item">
                        Studio <br>
                        Diện tích: 25m2 <br>
                        Loại giường: 1 giường đơn <br>
                        Nhà tắm đứng <br>
                        Vị trí: Từ tầng 5 – 7 <br>
                        Số lượng phòng: 18 phòng <br>
                    </div>
                </div>

                <div class="boxgt-ct">
                    <div class="boxgt-ct-img">
                        <p>
                            Trang thiết bị trong phòng: <br>
                            Két an toàn <br>
                            Mini bar <br>
                            Điều hoà 2 chiều <br>
                            Bàn làm việc <br>
                            Khu bàn nghế rồi thư giãn <br>
                            Tủ quần áo <br>
                            Táp đầu giường <br>
                            Đèn đọc sách <br>
                            Cầu là bàn là <br>
                            Ấm điện siêu tốc <br>
                            Máy sấy tóc <br>
                            Điện thoại bàn <br>
                        </p>
                    </div>
                    <div class="boxgt-ct-item">
                        <p>
                            Smart TV <br>
                            Cân sức khoẻ <br>
                            Dép đi trong phòng <br>
                            Giường phụ kê thêm <br>
                            Nước suối miễn phí <br>
                            Đồ mời trà/cafe <br>
                            Đồ dùng vệ sinh cá nhân <br>
                            (dầu gội/sữa tắm/bàn chải/mũ chụp đầu/dao cạo râu…) <br>
                            Khăn tắm <br>
                            Áo choàng tắm <br>
                            Gương cạo râu <br>
                            Kệ để hành lý <br>
                        </p>
                    </div>
                </div>
                <p>
                    Đôi Nét Bắc Giang <br>
                    Nằm cách trung tâm Hà Nội khoảng 50km, Bắc Giang có địa hình trung du, nằm kẹp giữa cánh cung
                    <br>
                    Đông Triều và cánh cung Bắc Sơn. Nơi đây là một miền quê yên bình, những quả đồi hình “bát úp”
                    <br>
                    thoai thoải với các loại cây trồng đẹp mắt; những di tích lịch sử; những làng nghề cổ cùng nhiều
                    <br>
                    nét đẹp văn hóa dân gian.
                    Đến với Bắc Giang, du khách còn được hòa mình vào thiên nhiên nguyên sơ với nhiều cảnh đẹp nổi
                    <br>
                    tiếng. Thiên nhiên ưu ái ban tặng cho mảnh đất này nhiều thắng cảnh kỳ thú với những cánh rừng
                    nguyên sinh cùng hệ động - thực vật phong phú, những hồ nước mênh mông… tất cả đã đem lại tiềm
                    năng to lớn về du lịch sinh thái ở Bắc Giang. <br>
                    (Nguồn: Vietnam Business Forum)
                </p>
            </div>
            <div class="box-dm">
                <h2>Bài viết nổi bật</h2>
                <a href="">
                    <h4><i class="fa-sharp fa-solid fa-forward"></i> TUTA FISNESS & FOLL</h4>
                </a>
                <a href="">
                    <h4><i class="fa-sharp fa-solid fa-forward"></i> MASSAGE TOP HIT</h4>
                </a>
                <a href="">
                    <h4><i class="fa-sharp fa-solid fa-forward"></i> KARAAOKE</h4>
                </a>
                <div class="icon-box-gt1">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-instagram"></i>
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

</html>
