<?php
function loaiphong_inset($usename,$hinh,$description,$price,$quantity,$number,$area,$bed,$views){
    $sql = "INSERT INTO `categories_room`(`id_cate`, `name`, `image`, `description`, `price`, `quantity`,`number`,`area`,`bed`,`views`) VALUES (null,'$usename','$hinh','$description','$price','$quantity','$number','$area','$bed','$views')";
    pdo_execute($sql);
    // return $sql;
};
function loaiphong_loadall(){
    $sql = "SELECT * FROM `categories_room` ORDER BY id_cate";
    $list_loaiphong = pdo_query($sql);
    return $list_loaiphong;
}
function loaiphong_loadone($id_cate){
    $sql = "SELECT * FROM `categories_room` WHERE id_cate=".$id_cate;
    $loaiphong=pdo_query_one($sql);
    return $loaiphong;
}
function loaiphong_delete($id_cate){
    $sql = "DELETE FROM `categories_room` WHERE id_cate=".$id_cate;
    pdo_execute($sql);
 }
 function loaiphong_update($id_cate,$nameroom,$hinh,$description,$price,$quantity,$number,$area,$bed,$views){
    if ($hinh!= "")
    $sql ="UPDATE `categories_room` SET `name`='$nameroom',`image`='$hinh',`description`='$description',`price`='$price',`quantity`='$quantity', `number` = '$number',`area`='$area',`bed`='$bed',`views`='$views' WHERE id_cate=".$id_cate;
    else
        $sql ="UPDATE `categories_room` SET `name`='$nameroom',`description`='$description',`price`='$price',`quantity`='$quantity', `number` = '$number',`area`='$area',`bed`='$bed',`views`='$views' WHERE id_cate=".$id_cate;
     pdo_execute($sql);
 }
// list ảnh của chung
function list_image(){
    $sql = "select * from slider ORDER BY id_slider";
    $list_anh = pdo_query($sql);
    return $list_anh;
}
 //thêm mới ảnh phòng
function them_moi_anh_phong($image, $idRoom){
    if ($image != ''){
        $sql = "INSERT INTO image_room VALUES (null, '$image', '$idRoom')";
        pdo_execute($sql);
    }
}

//list ảnh trong phòng
function list_image_room($id){
    $sql = "SELECT * FROM image_room where id_room = ".$id;
    $img = pdo_query($sql);
    return $img;
}

//xóa ảnh phòng
function xoa_anh_phong($id){
    $sql = "DELETE FROM image_room where id_img =".$id;
    pdo_execute($sql);
}
//cập nhật số lương phòng
function update_quantity_room($id, $quantity){
    $sql = "UPDATE categories_room SET quantity = '$quantity' WHERE id_cate = ".$id;
    pdo_execute($sql);
}

?>
