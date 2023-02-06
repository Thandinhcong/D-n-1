-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2022 lúc 02:29 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `image`, `fullname`, `password`, `email`, `address`, `tel`, `role`) VALUES
(3, 'Logo 2.png', 'Nguyễn Văn Thành', '123456           ', 'thanhnvph22301@fpt.edu.vn', '  Hà Nội - Cầu Giấy        ', 387509923, 1),
(7, 'BAOCAO1-ERD db.jpg', 'nguyễn viết trọng', '1234   ', 'trongnvph22086@fpt.edu.vn', '   ', 398832356, 1),
(8, NULL, 'Nguyễn Thị Hoa', '123456 ', 'hoantph22258@fpt.edu.vn', ' ', 0, 0),
(10, NULL, 'Thanh Nguyen Van', 'nvt108203 ', 'vanthanhbg7x.2003@gmail.com', ' ', 387509923, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `total_price` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Vừa đặt\r\n1: Đang thuê\r\n2: Đã trả phòng\r\n3: Đã hủy',
  `date_time` datetime NOT NULL,
  `check_in_date` datetime NOT NULL,
  `check_out_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id_book`, `id_user`, `fullname`, `tel`, `email`, `adults`, `children`, `total_price`, `status`, `date_time`, `check_in_date`, `check_out_date`) VALUES
(1, 9, 'Nguyễn Viết Trọng', 387509923, 'thanhnvph22301@fpt.edu.vn', 1, 1, 9639, 2, '2022-12-23 17:26:00', '2022-12-09 00:00:00', '2022-12-10 00:00:00'),
(2, 10, 'Thanh Nguyen Van', 387509923, 'vanthanhbg7x.2003@gmail.com', 1, 1, 664, 3, '2022-12-18 20:03:00', '2022-12-10 00:00:00', '2022-12-18 00:00:00'),
(3, 10, 'Thanh Nguyen Van', 387509923, 'thanhnvph22301@fpt.edu.vn', 1, 1, 996, 3, '2022-12-23 20:05:00', '2022-12-25 00:00:00', '2022-12-10 00:00:00'),
(4, 10, 'Thanh Nguyen Van', 387509923, 'thanhnvph22301@fpt.edu.vn', 1, 1, 0, 3, '2022-12-23 20:05:00', '2022-12-25 00:00:00', '2022-12-10 00:00:00'),
(5, 10, 'Thanh Nguyen Van', 387509923, 'vanthanhbg7x.2003@gmail.com', 2, 2, 264, 3, '2022-12-15 20:10:00', '2022-12-23 00:00:00', '2022-12-10 00:00:00'),
(6, 10, 'Thanh Nguyen Van', 387509923, 'vanthanhbg7x.2003@gmail.com', 1, 1, 996, 3, '2022-12-08 20:23:00', '2022-12-16 00:00:00', '2022-12-11 00:00:00'),
(7, 0, 'Nguyen Van Thanh', 113, 'vanthanhbg7x.2003@gmail.com', 1, 1, 132, 0, '2022-12-15 20:32:00', '2022-12-10 00:00:00', '2022-12-11 00:00:00'),
(8, 10, 'Thanh Nguyen Van', 387509923, 'vanthanhbg7x.2003@gmail.com', 2, 2, 996, 3, '2022-12-14 20:35:00', '2022-12-16 00:00:00', '2022-12-25 00:00:00'),
(9, 3, 'Nguyen Van Thanh', 387509923, 'thanhnvph22301@fpt.edu.vn', 1, 2, 664, 0, '2022-12-17 22:17:00', '2022-12-15 00:00:00', '2022-12-17 00:00:00'),
(10, 3, 'Nguyễn Văn Thành', 387509923, 'thanhnvph22301@fpt.edu.vn', 1, 1, 44, 0, '2022-12-14 22:18:00', '2022-12-09 00:00:00', '2022-12-25 00:00:00'),
(11, 3, 'Nguyễn Văn Thành', 387509923, 'atus310.1108@gmail.com', 1, 1, 664, 0, '2022-12-23 22:21:00', '2022-12-22 00:00:00', '2022-12-10 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_detail`
--

CREATE TABLE `book_detail` (
  `id_room` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `init_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_room`
--

CREATE TABLE `categories_room` (
  `id_cate` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL DEFAULT 0,
  `number` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `bed` varchar(255) DEFAULT NULL,
  `views` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories_room`
--

INSERT INTO `categories_room` (`id_cate`, `name`, `image`, `description`, `price`, `quantity`, `number`, `area`, `bed`, `views`) VALUES
(6, 'Phòng thường', 'chup-khach-san-dep-tphcm.jpg', 'sinh vien 04hh', 332, 11, 3, 100, '1 giường size King', 'Hướng ra biẻn'),
(7, 'Phòng Vip', 'GRAND_DLXK_01.jpg', 'grgerge5yttt', 44, 0, 2, 100, '2 giường đơn', 'Không có view'),
(8, 'Phòng Luxury', 'chup-anh-khach-san.jpg', 'fwef', 44, 2, 2, 90, '2 giường đơn', 'Hướng ra hồ bơi'),
(9, 'Phòng Pesidan', 'GRAND_PDLK_02.jpg', 'reg', 3213, 0, 1, 50, '1 Giường size queen', 'Hướng ra hồ bơi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_room` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL COMMENT 'Giới tính',
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(20) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(3) DEFAULT 0 COMMENT '0 : Chưa trả lời\r\n1: Đã trả lời'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `sex`, `fullname`, `email`, `tel`, `content`, `status`) VALUES
(1, '1', 'trọng nguyễn', 'trongnvph22086@fpt.edu.vn', 398832356, 'sdbvd', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_hotel`
--

CREATE TABLE `image_hotel` (
  `id_img` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_hotel`
--

INSERT INTO `image_hotel` (`id_img`, `image`, `url`, `description`) VALUES
(2, 'maria-guardiola-17042484 (1).jpg', 'thanhnvph22301.tk', 'eyery');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_room`
--

CREATE TABLE `image_room` (
  `id_img` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_room`
--

INSERT INTO `image_room` (`id_img`, `image`, `id_room`) VALUES
(1, 'Banner-AP.png', 0),
(2, 'Banner-AP.png', 0),
(3, 'ho-ke-go-bi-xuong-cap-6-23245239.png', 0),
(4, '263433985_420050076451408_1230280677824856888_n.jpg', 0),
(5, '263433985_420050076451408_1230280677824856888_n.jpg', 0),
(6, 'Banner-AP.png', 0),
(7, 'quang-hai0345-19055459.jpg', 2),
(8, 'Screenshot 2022-11-10 145243.png', 2),
(9, 'maria-guardiola-17042484.jpg', 3),
(10, 'mau-don-1.jpg', 3),
(13, 'maria-guardiola-17042484 (1).jpg', 2),
(18, 'SUPER-DELUXE2.jpg', 3),
(20, 'cac-goi-dich-vu-spa-1 1.png', 7),
(23, '5 DELUXE STUDIO_P704_1 1920-min.jpg', 6),
(24, 'cac-goi-dich-vu-spa-1 1.png', 6),
(25, 'chup-hinh-khach-san-nha-hang-mimosa-06-1 1.png', 7),
(26, 'Rectangle 20.png', 8),
(27, 'Rectangle 26.png', 8),
(28, 'Rectangle 64.png', 9),
(30, 'hotel-photography-chup-anh-khach-san-resortNovotel-phu-quoc-resort-02.jpg', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id_sv` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id_sv`, `name`, `price`, `image`, `description`, `id_room`) VALUES
(1, 'Dọn Phòng', 230, 'cleaning-cart.png', 'Dọn phòng khách sạn', 0),
(2, 'Hỗ trợ 24 Giờ', 44, 'customer-service.png', 'Hỗ trợ', 0),
(3, 'Đỗ xe', 332, 'parking.png', 'Đỗ xe', 0),
(4, 'Vòi tắm', 332, 'shower.png', 'Vòi tắm', 0),
(5, 'Điều hòa', 332, 'air-conditioner.png', 'Điều hòa', 0),
(6, 'Giường êm', 44, 'beds.png', 'sinh vien 04hh', 0),
(7, 'Phòng tập gym', 44, 'dumbbell.png', 'Phòng tập gym', 0),
(8, 'Đánh giày', 230, 'shoeshine.png', 'Đánh giày', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id_st` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `copyright` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id_st`, `logo`, `address`, `tel`, `email`, `copyright`) VALUES
(1, 'Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png', 'Tây Hồ, Hà Nội  ', 387509923, 'bookinght@chanmay.com', 'Nguyen Van Thanh 2022  ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id_slider`, `image`, `url`, `title`, `description`) VALUES
(5, '1533966485504_8785368-1.jpg', 'thanhnvph22301.tk    ', 'BT1_ASSIGNMENT  ', 'grgerge5yttt   gdrdrg '),
(6, 'full_1510821532_1433_ed69c769d55fdbd676c7af2ca88ebd9f.jpg', 'butterflyshop.vnn.mnds', 'quầy lễ tân ', 'quầy lễ tân '),
(7, 'KHACH-SAN.jpg', 'sfvbsd.rtr', 'khách sạn', 'khách sạn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Chỉ mục cho bảng `categories_room`
--
ALTER TABLE `categories_room`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `image_hotel`
--
ALTER TABLE `image_hotel`
  ADD PRIMARY KEY (`id_img`);

--
-- Chỉ mục cho bảng `image_room`
--
ALTER TABLE `image_room`
  ADD PRIMARY KEY (`id_img`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_sv`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_st`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `categories_room`
--
ALTER TABLE `categories_room`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `image_hotel`
--
ALTER TABLE `image_hotel`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `image_room`
--
ALTER TABLE `image_room`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
