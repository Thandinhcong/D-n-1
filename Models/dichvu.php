<?php 
function dichvu_inset($usename,$price,$hinh,$description){
    $sql = "INSERT INTO `service`(`id_sv`, `name`, `price`, `image`, `description`) VALUES (null,'$usename','$price','$hinh','$description')";
    pdo_execute($sql);
    // return $sql;
};
function dichvu_loadall(){
    $sql = "SELECT * FROM `service` ORDER BY id_sv";
    $list_dichvu = pdo_query($sql);
    return $list_dichvu;
}
function dichvu_loadone($id_sv){
    $sql = "SELECT * FROM `service` WHERE id_sv=".$id_sv;
    $dichvu=pdo_query_one($sql);
    return $dichvu;
}
function dichvu_delete($id_sv){
    $sql = "DELETE FROM `service` WHERE id_sv=".$id_sv;
    pdo_execute($sql);
 }
 function dichvu_update($id_sv,$namesv,$price,$hinh,$description){
    if ($hinh!= "")
    $sql ="UPDATE `service` SET `name`='$namesv',`price`='$price',`image`='$hinh',`description`='$description' WHERE id_sv=".$id_sv;
    else
        $sql ="UPDATE `service` SET `name`='$namesv',`price`='$price',`description`='$description' WHERE id_sv=".$id_sv;
     pdo_execute($sql);
 }
?>