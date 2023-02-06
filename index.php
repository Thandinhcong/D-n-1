<?php
session_start();
require_once './Controller/clientController.php';
require_once './Controller/adminController.php';

if (!isset($_SESSION['mycard'])) $_SESSION['mycard'] = [];
if (!isset($_SESSION['bill'])) $_SESSION['bill'] = [];

$url = isset($_GET['url']) ? $_GET['url'] : 'trang-chu';
//var_dump($url);
if (isset($url) && ($url != '')) {
    switch ($url) {
        //Client
        case 'trang-chu':
            echo indexRoom();
            break;
        case 'gioi-thieu':
            echo gioiThieu();
            break;
        case 'loai-phong':
            echo loaiPhong();
            break;
        case 'chi-tiet-phong':
            echo chitietphong();
            break;
        case 'dich-vu':
            echo dichVu();
            break;
        case 'lien-he':
            echo lienHe();
            break;
        case 'book-phong':
            echo datPhong();
            break;
        case 'booking-cua-toi':
            echo booking();
            break;
        case 'huy-booking':
            echo huyBooking();
            break;
        case 'dang-nhap':
            echo dangNhap();
            break;
        case 'dang-ky':
            echo dangKy();
            break;
        case 'quen-mat-khau':
            echo quenMatKhau();
            break;
        case 'sua-tai-khoan':
            echo capNhatTaiKhoan();
            break;
        case 'dang-xuat':
            session_unset();
            header('location: index.php');
            break;
        case 'them-moi-gio-hang':
//        var_dump($_SESSION['mycard']);
            echo themMoiGioHang();
            break;
        case 'xoa-phong':
            echo xoaPhong();
            break;
        case 'bill':
            echo bill();
            break;
        case 'bill-confirm':
            echo billConfirm();
            break;

        //Admin
//    if (isset($_SESSION['account'])){
        case 'admin':
            if (isset($_SESSION['account']) && ($_SESSION['account']['role'] == 1)) {
                echo indexAdmin();
            } else {
                echo 'Bạn không phải Admin. Vui lòng quay trở lại!<br><a href="index.php">Trở về trang chủ</a>';
            }
            break;
        case 'chi-tiet-don-hang':
            echo chiTietDonHang();
            break;
        case 'quan-ly-loai-phong':
            echo listLoaiPhong();
            break;
        case 'quan-ly-khach-hang':
            echo listKhachHang();
            break;
        case 'quan-ly-binh-luan':
            echo listBinhluan();
            break;
        case 'quan-ly-don-hang':
            echo listDonHang();
            break;
        case 'quan-ly-thong-ke':
            echo listThongKe();
            break;
        case 'chart-thong-ke':
            echo chartThongKe();
            break;
        case 'quan-ly-uu-dai':
            echo listUuDai();
            break;
        case 'quan-ly-lien-he':
            echo listLienHe();
            break;
        case 'quan-ly-dich-vu':
            echo listDichVu();
            break;
        case 'chi-tiet-anh-phong':
            echo listImageRoom();
            break;
//        them-moi
        case 'them-moi-loai-phong':
            echo themLoaiPhong();
            break;
        case 'them-moi-tai-khoan':
            echo themTaiKhoan();
            break;
        case 'them-moi-dich-vu':
            echo themDichVu();
            break;
        case 'them-moi-slider':
            echo themMoiAnhSlider();
            break;
        case 'them-moi-anh-phong':
            echo themMoiAnhPhong();
            break;
        case 'them-moi-anh-khach-san':
            echo themMoiAnhKhachSan();
            break;


//        //edit
//    case 'sua-giao-dien':
//        echo
//        break;
        case 'sua-trang-chu':
            echo suaTrangChu();
            break;
        case 'cap-nhat-trang-chu':
            echo capNhatTrangChu();
            break;
        case 'sua-loai-phong':
            echo edit_LoaiPhong();
            break;
        case 'cap-nhat-loai-phong':
            echo capNhatLoaiPhong();
            break;
        case 'sua-khach-hang':
            echo listone_Account();
            break;
        case 'cap-nhat-khach-hang':
            echo capNhatKhachHang();
            break;
        case 'sua-don-hang':
            echo edit_DonHang();
            break;;
        case 'cap-nhat-don-hang':
            echo capNhatDonHang();
            break;
        case 'sua-anh-khach-san':
            echo editAnhKhachSan();
            break;
        case 'cap-nhat-anh-khach-san':
            echo capNhatKhachSan();
            break;
        case 'cap-nhat-lien-he':
            echo capnhatLienhe();
            break;


        case 'sua-lien-he':
            echo edit_Lienhe();
            break;
        case 'sua-dich-vu':
            echo edit_DichVu();
            break;
        case 'cap-nhat-dich-vu':
            echo capNhatDichVu();
            break;
        case 'sua-slider':
            echo listOneSlider();
            break;
        case 'cap-nhat-slider':
            echo capNhatAnhSlider();
            break;
//
//
//
//        //delete
        case 'xoa-loai-phong':
            echo deleteLoaiPhong();
            break;
        case 'xoa-khach-hang':
            echo deleteKhachHang();
            break;
        case 'xoa-slider':
            echo deleteSlider();
            break;
        case 'xoa-anh-phong':
            echo xoaAnhPhong();
            break;
        case 'xoa-anh-khach-san':
            echo xoaAnhKhachSan();
            break;
//    case 'xoa-binh-luan':
//        echo
//        break;
        case 'xoa-binh-luan':
            echo deleBinhluan();
            break;
        case 'xoa-don-hang':
            echo deleteDonHang();
            break;
        case 'xoa-dich-vu':
            echo deleteDichVu();
            break;
        case 'xoa-lien-he':
            echo deletelienhe();
            break;

        default:
            echo 'Đường dẫn không tồn tại !<br><a href="index.php">Quay trở lại trang chủ</a>';
            break;
    }
}else{
    header('location: index.php');
}