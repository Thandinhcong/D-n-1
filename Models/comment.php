<?php
function list_comment(){
    $result = "Select * from comment order by id_cmt ";
    $comment = pdo_query($result);
    return $comment;
}
function loadall_binhluan($id_room){
    $sql="select * from comment where 1";
    if($id_room>0) $sql.=" AND id_room='".$id_room."'";
    $sql.=" order by id_cmt desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function insert_comment($content,$id_room,$id_user,$date_time){
    $sql="insert into comment(id_cmt,content,id_room,Id_user,date_time) values (null,'$content','$id_room','$id_user','$date_time')";
    pdo_execute($sql);
}
function delete_commet($id_cmt){
    $result = "delete from comment where id_cmt = ".$id_cmt;
    pdo_execute($result);
}
?>