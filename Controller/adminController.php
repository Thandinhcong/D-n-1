<?php
require_once "./Models/account.php";
require_once "./Models/home.php";
//List
require_once './Models/pdo.php';
require_once './Models/room.php';
require_once './Models/dichvu.php';
require_once "./Models/comment.php";
require_once './Models/uudai.php';
require_once './Models/book.php';
require_once './Models/contact.php';
require_once './Models/cart.php';
require_once './Models/thongke.php';

if (isset($_SESSION['account']) && ($_SESSION['account']['role'] == 1)) {
    function indexAdmin()
    {
        include_once './View/Admin/header.php';
        $giaoDienTrangChu = giaoDienTrangChu();
        $anhSlider = listAnhSlider();
        $anhHotel = listAnhKhachSan();
        include_once './View/Admin/home.php';
        include_once './View/Admin/footer.php';
    }

    function chiTietDonHang()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $listDonHang = listDonHangkh($id);
            $donhang = donhang_loadone($_GET['id']);
        }else{
            
        }
        include_once './View/Admin/donhang/chitiet_donhang.php';
        include_once './View/Admin/footer.php';
    }
    function listLoaiPhong()
    {
        include_once './View/Admin/header.php';
        $list_loaiphong = loaiphong_loadall();
        include_once './View/Admin/loaiphong/list_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

    function listKhachHang()
    {
        include_once './View/Admin/header.php';
        $list_account = loadall_account();
        include_once './View/Admin/taikhoan/list_taikhoan.php';
        include_once './View/Admin/footer.php';
    }

    function listone_Account()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $fixaccount = loadone_account($_GET['id']);
        }
        include_once './View/Admin/taikhoan/update_taikhoan.php';

        include_once './View/Admin/footer.php';
    }

    function listBinhluan()
    {
        include_once './View/Admin/header.php';
        $load_room = loaiphong_loadall();
        if(isset($_POST['id_room']) && ($_POST['id_room'])>0){
            $id_room = $_POST['id_room'];
        }else{
            $id_room=0;
        }
        $load_commnet = loadall_binhluan($id_room);
        include_once './View/Admin/binhluan/list_binhluan.php';
        include_once './View/Admin/footer.php';
    }

    function listDonHang()
    {
        include_once './View/Admin/header.php';
        $list_donhang = donhang_loadall();
        include_once './View/Admin/donhang/list_donhang.php';
        include_once './View/Admin/footer.php';
    }

    function listThongKe()
    {
        include_once './View/Admin/header.php';
        $thongKe = loaad_all_thongke();
        $soLuong = soluong_cacPhong();
        include_once './View/Admin/thongke/list_ThongKe.php';
        include_once './View/Admin/footer.php';
    }

    function chartThongKe()
    {
        include_once './View/Admin/header.php';
        $soLuong = soluong_cacPhong();
//        var_dump($soLuong);
        include_once './View/Admin/thongke/chart.php';
        include_once './View/Admin/footer.php';
    }

    function listLienHe()
    {
        include_once './View/Admin/header.php';
        $list_contact = loadall_contact();
        include_once './View/Admin/lienhe/list_lienhe.php';
        include_once './View/Admin/footer.php';
    }

    function listDichVu()
    {
        include_once './View/Admin/header.php';
        $list_dichvu = dichvu_loadall();
        include_once './View/Admin/dichvu/list_dichvu.php';
    }

    function listOneSlider()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $oneSlider = listOneAnhSlider($id);
        }
        include_once './View/Admin/giaodien/edit_slider.php';
        include_once './View/Admin/footer.php';
    }

    function listImageRoom()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $_SESSION['id_room'] = $id;
            $listImage = list_image_room($id);
//        var_dump($listImage);
        }
        include_once './View/Admin/loaiphong/detail_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

//Add
    function themMoiAnhPhong()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $hinh = $_FILES['imageRoom']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["imageRoom"]["name"]);
            if ($_FILES['imageRoom']['size'] > $maxsize) {
//            $thongbao= " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
//            $thongbao ='Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['imageRoom']['tmp_name'], $target_file);
                $thongbao = "Ảnh của bạn đã được thêm thành công ";
                them_moi_anh_phong($hinh, $_SESSION['id_room']);
//            $thongbao = "Thêm thành công";
            }
        }
        $list_loaiphong = loaiphong_loadall();
        include_once './View/Admin/loaiphong/list_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

    function themLoaiPhong()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            $usename = $_POST["usename"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $number = $_POST['number'];
            $area = $_POST['area'];
            $bed = $_POST['bed'];
            $views = $_POST['views'];
            $hinh = $_FILES['hinh']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if ($_FILES['hinh']['size'] > $maxsize) {
                $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
                $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                $thongbao = "Ảnh của bạn đã được thêm thành công ";
                loaiphong_inset($usename, $hinh, $description, $price, $quantity, $number, $area, $bed, $views);
                $thongbao = "Thêm thành công";
            } else {
                $thongbao = "Bạn không thể thêm loại phòng";
            }
        }
        include_once './View/Admin/loaiphong/add_loaiphong.php';
        include_once './View/Admin/footer.php';
    }


    function themTaiKhoan()
    {
        include_once './View/Admin/header.php';
        include_once './View/Admin/taikhoan/add_taikhoan.php';
        include_once './View/Admin/footer.php';
    }

    function themDichVu()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            $usename = $_POST["usename"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $hinh = $_FILES['hinh']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if ($_FILES['hinh']['size'] > $maxsize) {
                $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
                $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                $thongbao = "Ảnh của bạn đã được thêm thành công ";
                dichvu_inset($usename, $price, $hinh, $description);
                $thongbao = "Thêm thành công";
            }
        }
        include_once './View/Admin/dichvu/add_dichvu.php';
        include_once './View/Admin/footer.php';
    }

    function themMoiAnhSlider()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            $url = $_POST['url'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $hinh = $_FILES['image']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if ($_FILES['image']['size'] > $maxsize) {
//            $thongbao= " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
//            $thongbao ='Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                themMoiSlider($hinh, $url, $title, $description);
                $thongbao = "Thêm thành công";
            }
        }
        include_once './View/Admin/giaodien/add_slider.php';
        include_once './View/Admin/footer.php';
    }

    function themMoiAnhKhachSan()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            $url = $_POST['url'];
            $description = $_POST['description'];
            $hinh = $_FILES['image']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if ($_FILES['image']['size'] > $maxsize) {
//            $thongbao= " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
//            $thongbao ='Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                themAnhKhachSan($hinh, $url, $description);
                $thongbao = "Thêm thành công";
            }
        }

        include_once './View/Admin/giaodien/add_imageHotel.php';
        include_once './View/Admin/footer.php';
    }

//Edit
    function suaTrangChu()
    {
        include_once './View/Admin/header.php';
        $giaoDienTrangChu = giaoDienTrangChu();
        include_once './View/Admin/giaodien/trangchu.php';
        include_once './View/Admin/footer.php';
    }

//Update
    function capNhatDonHang()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $id_book = $_POST['id'];
            $status = $_POST['status'];
            donhang_update($id_book, $status);
            $thongbao = "Update thành công";
        }
        $list_donhang = donhang_loadall();
        include_once './View/Admin/donhang/list_donhang.php';
        include_once './View/Admin/footer.php';
    }

    function edit_Lienhe()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $lienhe = lienhe_loadone($_GET['id']);
        }
        include_once './View/Admin/lienhe/update_lienhe.php';
        include_once './View/Admin/footer.php';
    }

    function capnhatLienhe()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && $_POST['capnhat']) {
            $id_contact = $_POST['id_contact'];
            $status = $_POST['status'];
            update_liennhe($id_contact, $status);
            $thongbao = "Update thành công";
        }
        $list_contact = loadall_contact();
//    var_dump($list_contact);
        include_once './View/Admin/lienhe/list_lienhe.php';
        include_once './View/Admin/footer.php';
    }

    function capNhatLoaiPhong()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && $_POST['capnhat']) {
            $id_cate = $_POST['id'];
            $nameroom = $_POST['nameroom'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $number = $_POST['number'];
            $area = $_POST['area'];
            $bed = $_POST['bed'];
            $views = $_POST['views'];
            $hinh = $_FILES['hinh']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if ($_FILES['hinh']['size'] > $maxsize) {
                $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
                $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                $thongbao = "Ảnh của bạn đã được thêm thành công ";
                loaiphong_update($id_cate, $nameroom, $hinh, $description, $price, $quantity, $number, $area, $bed, $views);
                $thongbao = "Bạn đã update thành công ";
            }
        }
        $list_loaiphong = loaiphong_loadall();
        include_once './View/Admin/loaiphong/list_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

    function edit_LoaiPhong()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $loaiphong = loaiphong_loadone($_GET['id']);
        }
        include_once './View/Admin/loaiphong/update_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

    function edit_DonHang()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {

            $donhang = donhang_loadone($_GET['id']);
        }
        include_once './View/Admin/donhang/update_donhang.php';
        include_once './View/Admin/footer.php';
    }

    function edit_DichVu()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $dichvu = dichvu_loadone($_GET['id']);
        }
        include_once './View/Admin/dichvu/update_dichvu.php';
        include_once './View/Admin/footer.php';
    }

    function capNhatKhachHang()
    {
        include_once './View/Admin/header.php';
//    $error = [];
        if (isset($_POST['capnhat']) && $_POST['capnhat']) {
            $id_account = $_POST['id_account'];
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $target = './View/src/upload/';
            $image = $_FILES['anh']['name'];
            $maxsize = 2000000;
            $tagettype = ['jpg', 'png', 'jpeg', 'gif'];
            $target_file = $target . $image;
            $tatfiletype = pathinfo($target_file, PATHINFO_EXTENSION);
            $upload = true;
            if ($_FILES['anh']['size'] > $maxsize) {
//           $error['anh_size'] =" Ảnh của bạn có dung lượng quá lớn không thể upload";
                $upload = false;
            }
            if (!in_array($tatfiletype, $tagettype)) {
//            $error['duoi']='duoi file khong dung dinh dang ';
                $upload = false;
            }
            if ($upload == true) {
                move_uploaded_file($_FILES['anh']['tmp_name'], $target_file);
            }
            update_account($id_account, $image, $fullname, $password, $email, $address, $phone, $role);
//        $thongbao = "Update thành công";
        }

        $list_account = loadall_account();
        include_once './View/Admin/taikhoan/list_taikhoan.php';
        include_once './View/Admin/footer.php';
    }

    function capNhatTrangChu()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $copyright = $_POST['copyright'];

            //ảnh
            $target = './View/src/upload/';
            $image = $_FILES['logo']['name'];
            $maxsize = 2000000;
            $tagettype = ['jpg', 'png', 'jpeg', 'gif'];
            $target_file = $target . $image;
            $tatfiletype = pathinfo($target_file, PATHINFO_EXTENSION);
            $upload = true;
            if ($_FILES['logo']['size'] > $maxsize) {
//           $error['anh_size'] =" Ảnh của bạn có dung lượng quá lớn không thể upload";
                $upload = false;
            }
            if (!in_array($tatfiletype, $tagettype)) {
//            $error['duoi']='duoi file khong dung dinh dang ';
                $upload = false;
            }
            if ($upload == true) {
                move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);
            }
            suaGiaoDien($image, $address, $tel, $email, $copyright);
            $thongbao = "Update thành công";
        }
        $anhSlider = listAnhSlider();
        $giaoDienTrangChu = giaoDienTrangChu();
        $anhHotel = listAnhKhachSan();
        include_once './View/Admin/home.php';
        include_once './View/Admin/footer.php';
    }


    function editAnhKhachSan()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $image = listOneAnhKhachSan($id);
        }
        include_once './View/Admin/giaodien/edit_imageHotel.php';
        include_once './View/Admin/footer.php';
    }

    function capNhatKhachSan()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $id = $_POST['id'];
            $url = $_POST['url'];
            $desc = $_POST['desc'];

            //ảnh
            $target = './View/src/upload/';
            $image = $_FILES['image']['name'];
            $maxsize = 2000000;
            $tagettype = ['jpg', 'png', 'jpeg', 'gif'];
            $target_file = $target . $image;
            $tatfiletype = pathinfo($target_file, PATHINFO_EXTENSION);
            $upload = true;
            if ($_FILES['image']['size'] > $maxsize) {
//           $error['anh_size'] =" Ảnh của bạn có dung lượng quá lớn không thể upload";
                $upload = false;
            }
            if (!in_array($tatfiletype, $tagettype)) {
//            $error['duoi']='duoi file khong dung dinh dang ';
                $upload = false;
            }
            if ($upload == true) {
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            }
//        suaSlider($id, $image, $url, $title, $desc);
            capNhatAnhKhachSan($id, $image, $url, $desc);
            $thongbao = "Update thành công";
        }
        $anhSlider = listAnhSlider();
        $giaoDienTrangChu = giaoDienTrangChu();
        $anhHotel = listAnhKhachSan();
        include_once './View/Admin/home.php';
        include_once './View/Admin/footer.php';
    }


    function capNhatDichVu()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && $_POST['capnhat']) {
            $id_sv = $_POST['id'];
            $namesv = $_POST['namesv'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $hinh = $_FILES['hinh']['name'];
            $maxsize = 2000000;
            $allowUpload = true;
            $allowType = ['jpg', 'png', 'jpeg', 'gif'];
            $target_dir = 'View/src/upload/';
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if ($_FILES['hinh']['size'] > $maxsize) {
                $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
                $allowUpload = false;
            }
            if (!in_array($target_file, $allowType)) {
                $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                $allowupload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                $thongbao = "Ảnh của bạn đã được thêm thành công ";
                dichvu_update($id_sv, $namesv, $price, $hinh, $description);
                $thongbao = "Bạn đã update thành công ";
            } else {
                $thongbao = 'Không update thành công';
            }
        }
        $list_dichvu = dichvu_loadall();
        include_once './View/Admin/dichvu/list_dichvu.php';
        include_once './View/Admin/footer.php';
    }

    function capNhatAnhSlider()
    {
        include_once './View/Admin/header.php';
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $id = $_POST['id'];
            $url = $_POST['url'];
            $title = $_POST['title'];
            $desc = $_POST['desc'];

            //ảnh
            $target = './View/src/upload/';
            $image = $_FILES['image']['name'];
            $maxsize = 2000000;
            $tagettype = ['jpg', 'png', 'jpeg', 'gif'];
            $target_file = $target . $image;
            $tatfiletype = pathinfo($target_file, PATHINFO_EXTENSION);
            $upload = true;
            if ($_FILES['image']['size'] > $maxsize) {
//           $error['anh_size'] =" Ảnh của bạn có dung lượng quá lớn không thể upload";
                $upload = false;
            }
            if (!in_array($tatfiletype, $tagettype)) {
//            $error['duoi']='duoi file khong dung dinh dang ';
                $upload = false;
            }
            if ($upload == true) {
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            }
            suaSlider($id, $image, $url, $title, $desc);
            $thongbao = "Update thành công";
        }
        $anhSlider = listAnhSlider();
        $giaoDienTrangChu = giaoDienTrangChu();
        $anhHotel = listAnhKhachSan();
        include_once './View/Admin/home.php';
        include_once './View/Admin/footer.php';
    }

//delete
    function deleteKhachHang()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            delete_account($_GET['id']);
        }
        $list_account = loadall_account();
        include_once './View/Admin/taikhoan/list_taikhoan.php';
        include_once './View/Admin/footer.php';
    }

// delete
    function deleteLoaiPhong()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            loaiphong_delete($_GET['id']);
        }
        $list_loaiphong = loaiphong_loadall();
        include_once './View/Admin/loaiphong/list_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

    function deleteDichVu()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            dichvu_delete($_GET['id']);
        }
        $list_dichvu = dichvu_loadall();
        include_once './View/Admin/dichvu/list_dichvu.php';
        include_once './View/Admin/footer.php';
    }

    function deleteSlider()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            deleteAnhSlider($id);
        }
        $anhSlider = listAnhSlider();
        $giaoDienTrangChu = giaoDienTrangChu();
        $anhHotel = listAnhKhachSan();
        include_once './View/Admin/home.php';
        include_once './View/Admin/footer.php';
    }

    function xoaAnhPhong()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            xoa_anh_phong($id);
        }
        $list_loaiphong = loaiphong_loadall();
        include_once './View/Admin/loaiphong/list_loaiphong.php';
        include_once './View/Admin/footer.php';
    }

    function xoaAnhKhachSan()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            xoaKhachSan($id);
        }
        $anhSlider = listAnhSlider();
        $giaoDienTrangChu = giaoDienTrangChu();
        $anhHotel = listAnhKhachSan();
        include_once './View/Admin/home.php';
        include_once './View/Admin/footer.php';
    }


    function deleBinhluan()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            delete_commet($_GET['id']);
        }
        $load_commnet = list_comment();
        include_once './View/Admin/binhluan/list_binhluan.php';
        include_once './View/Admin/footer.php';
    }

    function deleteDonHang()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            donhang_delete($_GET['id']);
        }
        $list_donhang = donhang_loadall();
        include_once './View/Admin/donhang/list_donhang.php';
    }

    function deletelienhe()
    {
        include_once './View/Admin/header.php';
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $xoalienhe = delete_contact($_GET['id']);
        }
        $list_contact = loadall_contact();
        include_once './View/Admin/lienhe/list_lienhe.php';
        include_once './View/Admin/footer.php';

    }
}
?>