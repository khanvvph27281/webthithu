<?php
function insert_monhoc($tenmon){
    $sql = "insert into monhoc(tenmon) values('$tenmon')";
    pdo_execute($sql);

}
function loadall_monhoc(){
    $sql = "select *from monhoc order by id_mon desc";
    $listmonhoc = pdo_query($sql);
    return $listmonhoc;
}
function delete_monhoc($id_mon){
    $sql = "delete from monhoc where id_mon=" . $id_mon;
    pdo_execute($sql);
}
function insert_dethi($tende,$thoigian,$socau,$id_mon,$img){
    $sql = "insert into dethi(tende,thoigian,socau,id_mon,img) values('$tende','$thoigian','$socau','$id_mon','$img')";
    pdo_execute($sql);

}
function loadall_dethi(){
    $sql = "select *from dethi order by id_de desc";
    $listdethi = pdo_query($sql);
    return $listdethi;
}
function delete_dethi($id_de){
    $sql = "delete from dethi where id_de=" . $id_de;
    pdo_execute($sql);
}
function loadone_monhoc($id_mon){
    $sql="select *from monhoc where id_mon=".$id_mon;
            $mh=pdo_query_one($sql);
            return $mh;
}
function loadone_dethi($id_de){
    $sql="select *from dethi where id_de=".$id_de;
            $dt=pdo_query_one($sql);
            return $dt;
}
function loadone_cauhoi($id_cauhoi){
    $sql="select *from chitietdethi where id_cauhoi=".$id_cauhoi;
            $ch=pdo_query_one($sql);
            return $ch;
}
function update_monhoc($id_mon,$tenmon){
    $sql=" update monhoc set tenmon='".$tenmon."' where id_mon =".$id_mon;
    pdo_execute($sql);
}
function update_dethi($id_de,$tende,$thoigian,$socau,$img){
    $sql=" update dethi set tende='".$tende."',thoigian ='".$thoigian."',socau ='".$socau."',img ='".$img."' where id_de =".$id_de;
    pdo_execute($sql);
}
function update_cauhoi($id_cauhoi,$thutu,$cauhoi,$dapanA,$dapanB,$dapanC,$dapanD,$dapan,$diem){
    $sql=" update chitietdethi set thutucau='".$thutu."',cauhoi ='".$cauhoi."',dapanA='".$dapanA."',dapanB ='".$dapanB."',dapanC ='".$dapanC."',dapanD ='".$dapanD."',dapan ='".$dapan."',diem ='".$diem."' where id_cauhoi =".$id_cauhoi;
    pdo_execute($sql);
}
function insert_chitietde($id_de,$cauhoi,$thutucau,$dapanA,$dapanB,$dapanC,$dapanD,$dapan,$diem){
    $sql = "insert into chitietdethi(id_de,cauhoi,thutucau,dapanA,dapanB,dapanC,dapanD,dapan,diem) values('$id_de','$cauhoi','$thutucau','$dapanA','$dapanB','$dapanC','$dapanD','$dapan','$diem')";
    pdo_execute($sql);

}
function loadall_cauhoi(){
    $sql = "select *from chitietdethi order by id_cauhoi desc";
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}
function delete_chitietde($id_cauhoi){
    $sql = "delete from chitietdethi where id_cauhoi=" . $id_cauhoi;
    pdo_execute($sql);
}
function loadAll_taikhoan(){
    $sql="select * from khach_hang ";
    $listkhachhang =pdo_query($sql);
    return $listkhachhang;
}
function cauhoitheoid($id){
    $sql = "select *from chitietdethi where id_de=".$id;
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}
function cauhoiadmin($id){
    $sql = "select *from chitietdethi where id_de=".$id;
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}
function dethitheoid($id){
    $sql = "select *from dethi where id_mon=".$id;
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}
function deletecheckbox($id){
    $sql = "delete from chitietdethi where id_cauhoi=" . $id;
    pdo_execute($sql);
}
function loadlienhe(){
    $sql = "select *from lienhe";
    $listlienhe = pdo_query($sql);
    return $listlienhe;
}
function deletelienhe($id){
    $sql = "delete from lienhe where id_lienhe=" . $id;
    pdo_execute($sql);
}
