<?php
//toongt giá trị đơn hàng
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycard'] as $key => $value){
        $tong += $value[5];
    }
    return $tong;
}
//thêm mới bill
function themMoiDonHang($fullname,$id_user, $tel, $email, $adults, $children, $totalprice, $status, $datetime, $checkindate, $checkoutdate){
    $sql = "INSERT INTO `book` (`id_book`,`id_user`, `fullname`, `tel`, `email`, `adults`, `children`, `total_price`, `status`, `date_time`, `check_in_date`, `check_out_date`) VALUES (NULL,'$id_user', '$fullname', '$tel', '$email', '$adults', '$children', '$totalprice', '$status', '$datetime', '$checkindate', '$checkoutdate')";
    return pdo_execute_return_lastInsertId($sql);
}
//thêm mới book detail
function themMoiBookDetail($idroom, $idbook, $price, $quantity, $initprice){
    $sql = "INSERT INTO `book_detail` VALUES ('$idroom', '$idbook', '$price', '$quantity', '$initprice')";
    return pdo_execute($sql);
}
//list one dơn hàng
function listDonHangkh($idbook){
    $sql = "SELECT * FROM book_detail WHERE id_book = ".$idbook;
    $ok = pdo_query($sql);
    return $ok;
}
//list booking theo id khách sạn
function listdh_id($id){
    $sql = "SELECT * FROM book WHERE id_user = ".$id;
    $dh = pdo_query($sql);
    return $dh;
}
//list booking theo id book
function listdh_idbook($id){
    $sql = "SELECT * FROM book WHERE id_book = ".$id;
    $dh = pdo_query_one($sql);
    return $dh;
}
function huybk($id){
    $sql = "UPDATE book set status = 3 where id_book =".$id;
    pdo_execute($sql);
}
?>
