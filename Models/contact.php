<?php
function insert_contact($sex,$name,$phone, $email,$content){
    $sql = "insert into contact(sex,fullname,email,tel,content) values ('$sex','$name','$email','$phone','$content') ";
    pdo_execute($sql);
}
function loadall_contact(){
    $result = "Select * from contact order by id_contact desc";
    $comment = pdo_query($result);
    return $comment;
}
function lienhe_loadone($id_contact){
    $result = "select * from contact where id_contact = ".$id_contact;
    $fix = pdo_query_one($result);
    return $fix;
}
function update_liennhe($id_contact,$status){
    if($status!= " ")
    $sql = "UPDATE contact SET status = '$status' WHERE id_contact=".$id_contact;
    pdo_execute($sql);
}
function delete_contact($id_contact){
    $sql = "DELETE FROM contact where id_contact =".$id_contact;
    pdo_execute($sql);
}
?>