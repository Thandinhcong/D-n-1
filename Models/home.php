<?php
function giaoDienTrangChu(){
    $sql = "SELECT * FROM `setting` WHERE id_st = 1";
    $trangChu = pdo_query($sql);
    return $trangChu;
}
function suaGiaoDien($logo, $address, $tel, $email, $copyright){
    if ($logo != '') {
        $sql = "UPDATE `setting` SET `logo` = '$logo', `address` = '$address', `tel` = '$tel', `email` = '$email', `copyright` = '$copyright' WHERE `setting`.`id_st` = 1";
    }else{
        $sql = "UPDATE `setting` SET `address` = '$address', `tel` = '$tel', `email` = '$email', `copyright` = '$copyright' WHERE `setting`.`id_st` = 1";
    }
    pdo_execute($sql);
}
function themMoiSlider($image,$url,$title,$desc){
    $sql = "INSERT INTO `slider` (`id_slider`, `image`, `url`, `title`, `description`) VALUES (NULL, '$image', '$url', '$title', '$desc')";
    pdo_execute($sql);
}
function listAnhSlider(){
    $sql = "SELECT * FROM slider";
    $slider = pdo_query($sql);
    return $slider;
}
function listOneAnhSlider($id){
    $sql = "SELECT * FROM slider where id_slider = ".$id;
    $one = pdo_query_one($sql);
    return $one;
}
function suaSlider($id, $image, $url, $title, $desc){
    if ($image != ''){
        $sql = "UPDATE `slider` SET `image` = '$image', `url` = '$url', `title` = '$title', `description` = '$desc' WHERE `slider`.`id_slider` = ".$id;
    }else{
        $sql = "UPDATE `slider` SET `url` = '$url', `title` = '$title', `description` = '$desc' WHERE `slider`.`id_slider` = ".$id;
    }
//    return $sql;
    pdo_execute($sql);
}
function deleteAnhSlider($id){
    $sql = "DELETE FROM slider WHERE id_slider = ".$id;
    pdo_execute($sql);
}
//thêm mới ảnh khách sạn
function themAnhKhachSan($image, $url, $desc){
    $sql = "INSERT INTO image_hotel VALUES (null, '$image','$url', '$desc')";
    pdo_execute($sql);
}
//list ảnh khách sạn
function listAnhKhachSan(){
    $sql = "SELECT * FROM image_hotel";
    $image = pdo_query($sql);
    return $image;
}
//list one ảnh khách sạn
function listOneAnhKhachSan($id){
    $sql = "SELECT * FROM image_hotel WHERE id_img =".$id;
    $image = pdo_query_one($sql);
    return $image;
}
//cập nhật ảnh khách sạn
function capNhatAnhKhachSan($id, $image, $url, $desc){
    if ($image != ''){
        $sql = "UPDATE `image_hotel` SET `image` = '$image', `url` = '$url', `description` = '$desc' WHERE `image_hotel`.`id_img` = ".$id;
    }else{
        $sql = "UPDATE `image_hotel` SET `url` = '$url', `description` = '$desc' WHERE `image_hotel`.`id_img` = ".$id;
    }
    pdo_execute($sql);
}
//xóa ảnh khách sạn
function xoaKhachSan($id){
    $sql = "DELETE FROM image_hotel WHERE id_img = ".$id;
    pdo_execute($sql);
}



?>
