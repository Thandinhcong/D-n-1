<?php
require_once './Models/pdo.php';
require_once './Models/room.php';
require_once './Models/account.php';
require_once './Models/comment.php';
require_once './Models/dichvu.php';
require_once './Models/home.php';
require_once './Models/contact.php';
require_once './Models/cart.php';
require_once './Email/sendmail.php';
function indexRoom(){
    $giaoDien = giaoDienTrangChu();
    $listPhong = loaiphong_loadall();
    include_once './View/Client/indexView.php';
}
function gioiThieu(){
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/gioiThieu.php';
}
function loaiPhong(){
    $giaoDien = giaoDienTrangChu();
    $list_roomss = loaiphong_loadall();
    $slider = list_image();
    include_once './View/Client/loaiPhong.php';
}
function chitietphong(){
    if(isset($_GET['id']) && ($_GET['id']>0)){
        $list_onerooms = loaiphong_loadone($_GET['id']);
        $img_room = list_image_room($_GET['id']);
    }else {
        header("location:index.php");
    }
    $list_roomss = loaiphong_loadall();
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/chiTietPhong.php';
}
function dichVu(){
    $list_dichvu =dichvu_loadall();
    $giaoDien = giaoDienTrangChu();
    $slider = list_image();
    include_once './View/Client/dichVu.php';
}
function lienHe(){
    $giaoDien = giaoDienTrangChu();
    $slider = list_image();
    if(isset($_POST['gui']) && $_POST['gui']){
        $sex=$_POST['sex'];
        $name=$_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        insert_contact($sex,$name,$phone, $email,$content);
        $thongbao = "cảm ơn bạn đã để lại liên hệ";
    }
    include_once './View/Client/lienHe.php';
}
function dangNhap(){
    if (isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checkuser = check_user($email, $password);
        if (is_array($checkuser)){
            $_SESSION['account'] = $checkuser;
            header('location: index.php');
        }else{
            $thongbao = 'Tài khoản không tồn tại';
        }
    }
    include_once './View/Client/taikhoan/login_taikhoan.php';
}
function dangKy(){
        if (isset($_POST['dangky'])){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $password = $_POST['password'];
            if ($_POST['password'] != '' && $_POST['repassword'] != '' && $_POST['password'] == $_POST['repassword']){
                insert_taiKhoan($fullname,$email,$tel,$password);
                $thongbao = 'Đăng ký thành công';
            }else{
                $thongbao = 'Hai mật khẩu bạn nhập không giống nhau';
            }
    }
    include_once './View/Client/taikhoan/register_taikhoan.php';
}
function quenMatKhau(){
  
    if (isset($_POST['quenmatkhau']) && ($_POST['quenmatkhau'])){
        $email = $_POST['email'];
        $checkemail = check_email($email);
        
        if (is_array($checkemail) && $checkemail != null){
            $mail = $checkemail['password'];
            $title= "[FORGOT PASSWORD] - CHAN MAY HOTEL & RESTAURANT";
            $content = "Mật khẩu cũ của bạn là: <b>$mail</b><br>Xin cảm ơn quý khách đã tin tưởng sử dụng dịch vụ của <b>CHÂN MÂY HOTEL & RESTAURANT</b>";
            Send_email($title,$content,$email);
            echo "<script>alert('Vui lòng kiểm tra email!')</script>";
        }else{
            $thongbao = 'Email này không tồn tại!';
        }
        
        
    }
    
    include_once './View/Client/taikhoan/forgot_taikhoan.php';
    
}

function capNhatTaiKhoan(){
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($_POST['password'] != '' && $_POST['repassword'] != '' && $_POST['password'] == $_POST['repassword']){
            updateAccount($id, $fullname, $tel, $address, $email, $password);
            $_SESSION['account'] = check_user($email, $password);
            $thongbao = 'Cập nhật thành công';
        }else{
            $thongbao = 'Hai mật khẩu bạn nhập không giống nhau';
        }
    }
    include_once './View/Client/taikhoan/update_taikhoan.php';
}
function datPhong(){
    if (isset($_SESSION['account'])){
        $user = $_SESSION['account'];
    }else{
        $user = '';
    }
    $listPhong = loaiphong_loadall();
    $giaoDien = giaoDienTrangChu();
    $slider = list_image();
    include_once './View/Client/bookPhong.php';
}
function themMoiGioHang(){
    if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $thanhtien = $price * $quantity;
        $room_add = [$id, $name, $image, $price, $quantity, $thanhtien];
        array_push($_SESSION['mycard'], $room_add);
    }
    if (isset($_SESSION['account'])){
        $user = $_SESSION['account'];
    }else{
        $user = '';
    }
//    $listPhong = loaiphong_loadall();
    $slider = list_image();
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/bookPhong.php';
}
function xoaPhong(){
    if (isset($_GET['id'])){
        array_splice($_SESSION['mycard'],$_GET['id'],1);
    }else{
        $_SESSION['mycard'] = [];
    };
    header('location: index.php?url=book-phong');
}
function bill(){
    //datetime
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (isset($_POST['gui']) && ($_POST['gui'])){
        if (isset($_SESSION['account'])){
            $idAccount = $_SESSION['account']['id_account'];
        }else{
            $idAccount = 0;
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
//        if ()
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $nguoilon = $_POST['nguoilon'];
        $treem = $_POST['treem'];
        $gioitinh = $_POST['sex'];
        $hoten = $_POST['fullname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $thoigiandat = date('Y/m/d H:i:s');
        $diachi = $_POST['address'];
        $thanhpho = $_POST['city'];
        $yeucaukhac =$_POST['yeucau'];
        $flag = true;
        $thongbao = [];


        //validate

        $dateToday = date('Y/m/d');
        $newToday = strtotime($dateToday);
        $newIn = strtotime($checkin);
        $newOut = strtotime($checkout);
        if ($newIn < $newToday){
            $thongbao['checkin'] = "Ngày đến không thể nhỏ hơn ngày hôm nay";
            $flag = false;
        }
        if ($newIn > $newOut){
            $thongbao['checkin'] = "Ngày đến không thể lớn hơn ngày đi";
            $flag = false;
        }
        if ($newOut < $newIn){
            $thongbao['checkout'] = "Ngày đi không thể nhỏ hơn ngày đến";
            $flag = false;
        }


        if ($flag == true){
            $bill_add = [$checkin, $checkout, $nguoilon, $treem, $gioitinh, $hoten, $email, $tel, $thoigiandat, $diachi, $thanhpho, $yeucaukhac, $idAccount];
            array_push($_SESSION['bill'], $bill_add);
            if (isset($_SESSION['bill'])){
                $bill = $_SESSION['bill'];
                $count_arr = count($_SESSION['bill']);
                $bill_detail = $bill[$count_arr-1];
            }else{
                $bill = '';
            }
            if (isset($_SESSION['account'])){
                $user = $_SESSION['account'];
            }else{
                $user = '';
            }
            $giaoDien = giaoDienTrangChu();
            $slider = list_image();
            include_once './View/Client/cart/bill.php';
        }else{
            if (isset($_SESSION['account'])){
                $user = $_SESSION['account'];
            }else{
                $user = '';
            }
            $giaoDien = giaoDienTrangChu();
            $slider = list_image();
            include_once './View/Client/bookPhong.php';
        }
    }
}
function billConfirm(){
    if (isset($_POST['gui']) && $_POST['gui']){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaydathang = date('h:i:sa d/m/Y');
        $tongdonhang = tongdonhang();   
        if (isset($_SESSION['account'])){
            $idAccount = $_SESSION['account']['id_account'];
        }else{
            $idAccount = 0;
        }
        if (isset($_SESSION['bill'])){

            $bill = $_SESSION['bill'];
            $count_arr = count($_SESSION['bill']);
            $bill_detail = $bill[$count_arr-1];
        }else{
            $bill = '';
        }
//        var_dump($bill_detail);
        $id_bill = themMoiDonHang($bill_detail[5],$bill_detail[12], $bill_detail[7], $bill_detail[6], $bill_detail[2], $bill_detail[3], $tongdonhang, null, $bill_detail[8], $bill_detail[0], $bill_detail[1]);

        foreach ($_SESSION['mycard'] as $cart){
            themMoiBookDetail($cart[0],$id_bill,$cart[3], $cart[4], $cart[5]);
            $room = loaiphong_loadone($cart[0]);
            if ($room['quantity'] > 0){
                $a = $room['quantity'] - $cart[4];
                if ($a > 0){
                    $b = $a;
                }elseif ($a <= 0){
                    $b = 0;
                }
                update_quantity_room($cart[0], $b);
            }
        }
        // var_dump($_SESSION['bill']);

        $mail = listdh_idbook($id_bill) ;
        $fullname = $mail['fullname'];
        $emailBill = $mail['email'];
        $telBill = $mail['tel'];
        $totalBill = $mail['total_price'];
        $inBill = $mail['check_in_date'];
        $outBill = $mail['check_out_date'];
        $email = $_SESSION['bill'][0][6];
        $title= "[ORDER CONFIRMATION] - CHAN MAY HOTEL & RESTAURANT";
        $content = "Chào $fullname,<br>
Cảm ơn bạn đã tin tưởng đặt phòng của <b>CHÂN MÂY HOTEL & RESTAURANT</b><br>
Chúng mình xin phép xác nhận đặt phòng [ID: $id_bill] của bạn như sau: <br>
<ul>
    <li>Email: $emailBill</li>
    <li>Phone: $telBill</li>
    <li>Tổng tiền phòng: $totalBill VNĐ</li>
    <li>Thời gian đến: $inBill</li>
    <li>Thời gian đi: $outBill</li>
</ul><br>
Thời gian đặt: $ngaydathang (Asia/Ho_Chi_Minh);<br>
Nếu có bất kỳ vấn đề gì, hãy gọi ngay đến tổng đài trợ giúp của chúng tôi tại đây!<br>
Chúc bạn có kỳ nghỉ vui vẻ!<br>
" ;
         Send_email($title,$content,$email);
        $_SESSION['mycard'] = [];
        
    }
    $ctbill = listDonHangkh($id_bill);
    $giaoDien = giaoDienTrangChu();
    $slider = list_image();
    include_once './View/Client/cart/billConFirm.php';
}
function booking(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)){
        $id = $_GET['id'];
        $listdh = listdh_id($id);
    }else{
        $listdh = '';
    }
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/cart/myBill.php';
}
function huyBooking(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)){
        $id = $_GET['id'];
        huybk($id);
        $dh = listDonHangkh($id);
        foreach ($dh as $key => $value){
            $idroom = $value['id_room'];
            $room = loaiphong_loadone($idroom);
            $a = $room['quantity'] + $value['quantity'];
            update_quantity_room($idroom, $a);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateToday = date('H:i:s d/m/Y');
        $email = $_SESSION['bill'][0][6];
        $title= "[CANCELLATION CONFIRMATION] - CHAN MAY HOTEL & RESTAURANT";
        $content = "Chào bạn,<br>
Chúng mình xin phép xác nhận yêu cầu hủy Booking đặt phòng [ID: $id] của bạn vào lúc: $dateToday (Asia/Ho_Chi_Minh)<br>
Nếu có bất kỳ vấn đề gì, hãy gọi ngay đến tổng đài trợ giúp của chúng tôi tại đây!<br>
Chúc bạn có một ngày vui vẻ!<br>
";
        Send_email($title,$content,$email);
        echo "<script>alert('Hủy đơn hàng thành công')</script>";

        header("location: index.php");
    }else{
        echo 'Lỗi, không thể hủy phòng<br>Vui lòng liên hệ tới hotline khách sạn để nhận tư vấn<br><a href="index.php">Quay trở lại trang chủ</a>';
    }
}
?>