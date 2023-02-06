<?php 
function uudai_inset($usename,$giftcode,$price,$quantity,$date_end){
    $sql = "INSERT INTO `voucher`(`id_voucher`, `name`, `giftcode`, `price`, `quantity`, `date_end`) VALUES (null,'$usename','$giftcode','$price','$quantity','$date_end')";
    pdo_execute($sql);
    // return $sql;
};
function uudai_loadall(){
    $sql = "SELECT * FROM `voucher` ORDER BY id_voucher";
    $list_uudai = pdo_query($sql);
    return $list_uudai;
}
function uudai_loadone($id_voucher){
    $sql = "SELECT * FROM `voucher` WHERE id_voucher=".$id_voucher;
    $uudai=pdo_query_one($sql);
    return $uudai;
}
function uudai_update($id_voucher,$tenuudai,$giftcode,$price,$quantity,$date_end){
    $sql = "UPDATE `voucher` SET `name`='$tenuudai',`giftcode`='$giftcode',`price`='$price' ,`quantity`='$quantity',`date_end`='$date_end'WHERE id_voucher=".$id_voucher;
    pdo_execute($sql);
 }
 function uudai_delete($id_voucher){
    $sql = "DELETE FROM `voucher` WHERE id_voucher=".$id_voucher;
    pdo_execute($sql);
 }
?>