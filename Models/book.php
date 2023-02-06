<?php
function donhang_loadall(){
    $sql = "SELECT * FROM `book`  ORDER BY id_book";
    $list_donhang = pdo_query($sql);
    return $list_donhang;
}
function donhang_loadone($id_book){
    $sql = "SELECT * FROM `book` WHERE id_book=".$id_book;
    $donhang=pdo_query_one($sql);
    return $donhang;
}
function donhang_update($id_book,$status){
    $sql = "UPDATE `book` SET `status`='$status' WHERE id_book=".$id_book;
    pdo_execute($sql);
 }
 function donhang_delete($id_book){
    $sql = "DELETE FROM `book` WHERE id_book=".$id_book;
    pdo_execute($sql);
 }
 
 ?>