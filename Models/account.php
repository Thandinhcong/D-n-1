<?php
//thêm mới tài khoản
function insert_taiKhoan($fullname, $email, $tel, $password){
    $sql = "INSERT INTO `account` (`id_account`, `image`, `fullname`, `password`, `email`, `address`, `tel`, `role`) VALUES (NULL, NULL, '$fullname', '$password', '$email', NULL, '$tel', '0')";
    pdo_execute($sql);
}
//kiểm tra tài khoản
function check_user($email,$password){
    $sql = "select * from account where email = '$email' and password = '$password'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//Kiểm tra email
function check_email($email){
    $sql = "select * from account where email = '$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//cập nhật tài khoản
function updateAccount($id, $fulname, $tel, $address, $email, $password){
    $sql = "UPDATE `account` SET `fullname` = '$fulname', `password` = '$password', `email` = '$email', `address` = '$address', `tel` = '$tel' WHERE `account`.`id_account` = '$id'";
    pdo_execute($sql);
}
//list tất cả account
function loadall_account(){
    $result = "Select * from account order by id_account";
    $account = pdo_query($result);
    return $account;
}
//load ra 1 account
function loadone_account($id_account){
    $result = "select * from account where id_account = ".$id_account;
    $fix = pdo_query_one($result);
    return $fix;
}
//cập nhật account
function update_account($id_account,$image,$fullname,$password,$email,$address,$phone,$role){
    if($image!="")
    $result = 'update `account` set image = "'.$image.'",fullname = "'.$fullname.'",password = "'.$password.'",email = "'.$email.'",address = "'.$address.'",tel = "'.$phone.'", `role` = "'.$role.'" where id_account = '.$id_account ;
    else
        $result = 'update `account` set fullname = "'.$fullname.'",password = "'.$password.'",email = "'.$email.'",address = "'.$address.'",tel = "'.$phone.'",`role` = "'.$role.'" where id_account = '.$id_account ;
    pdo_execute($result);
//    if($role!="")
//        $resultt = 'update `account` set image = "'.$image.'",fullname = "'.$fullname.'",password = "'.$password.'",email = "'.$email.'",address = "'.$address.'",tel = "'.$phone.'", `role` = "'.$role.'" where id_account = '.$id_account ;
//    else
//        $resultt = 'update `account` set image = "'.$image.'",fullname = "'.$fullname.'",password = "'.$password.'",email = "'.$email.'",address = "'.$address.'",tel = "'.$phone.'"  where id_account = '.$id_account ;
//    pdo_execute($resultt);
}
//xóa account
function delete_account($id_account){
    $result = "delete from account where id_account = ".$id_account;
    pdo_execute($result);
}
//vai trò
//function role(){
//    $reslut = "select * from vaitro order by id_vaitro";
//    $vaitro = pdo_query($reslut);
//    return $vaitro;
//}
?>
