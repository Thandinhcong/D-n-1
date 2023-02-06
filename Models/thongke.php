<?php
function loaad_all_thongke(){
    $sql = "SELECT categories_room.id_cate as cate_id, categories_room.name as cate_name, MAX(categories_room.price) as cate_maxprice, MIN(categories_room.price) as cate_minprice, AVG(categories_room.price) as cate_avgprice FROM categories_room GROUP BY categories_room.id_cate ORDER BY categories_room.id_cate DESC";
    $re = pdo_query($sql);
    return $re;
}
function soluong_cacPhong(){
    $sql = "SELECT book_detail.id_room as id, categories_room.name as name, COUNT(book_detail.id_book) as soluong FROM categories_room JOIN book_detail on categories_room.id_cate = book_detail.id_room GROUP BY book_detail.id_room";
    $re = pdo_query($sql);
    return $re;
}

?>
