<?php
function insert_binhluan($noidung,$ho_ten,$id_de,$ngaybinhluan,$hinh_anh){
    $sql= "insert into binhluan(noidung,ho_ten,id_de,ngaybinhluan,hinh_anh) values('$noidung','$ho_ten','$id_de','$ngaybinhluan','$hinh_anh')";
    pdo_execute($sql);
}
function loadAll_binhluan($id_de){
    $sql="select * from binhluan where 1";
    if($id_de>0) $sql.=" AND id_de='".$id_de."' ";
    $sql.="order by id_de desc";
    $listbinhluan =pdo_query($sql);
    return $listbinhluan;
}
function loadAll_binhluan1(){
    $sql="select * from binhluan ";
    $listbinhluan =pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id_cmt){
    $sql="delete from binhluan where id_cmt=".$id_cmt;
                pdo_execute($sql);
}
function binhluantheoid($id){
    $sql = "select *from binhluan where id_de=".$id;
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}   


?>