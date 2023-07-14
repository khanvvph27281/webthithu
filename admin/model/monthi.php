<?php
function insert_monthi($id_mon,$tenmon,$mota){
    $sql = "insert into monhoc(id_mon,tenmon,mota) values('$id_mon','$tenmon','$mota')";
    pdo_execute($sql);

}
function insert_dethi($id_de,$tende,$thoigian,$socau,$id_mon,$img){
    $sql = "insert into (id_de,tende,thoigian,socau,id_mon,img) values('$id_de','$tende','$thoigian','$socau','$id_mon','$img')";
    pdo_execute($sql);

}

function loadall_dethi(){
    $sql = "select *from dethi ";
    $listdethi = pdo_query($sql);
    return $listdethi;
}
function loadall_monthi(){
    $sql = "select *from monhoc ";
    $listmonhoc = pdo_query($sql);
    return $listmonhoc;
}

function load_dethicungloai($id_mon,$id_de){
    $sql="select *from dethi where id_monhoc=".$id_mon." AND id_de<>".$id_de;
            $listdethi=pdo_query($sql);
            return $listdethi;
}
function loadone_dethi($id_de){
    $sql="select *from dethi where id_de=".$id_de;
            $listdethi=pdo_query_one($sql);
            return $listdethi;
}
function loadall_cauhoi(){
    $sql = "select *from chitietdethi";
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}
function loadone_cauhoi($id_de){
    $sql="select *from chitietdethi where id_de=".$id_de;
            $cauhoi=pdo_query_one($sql);
            return $cauhoi;
}
function load_caccau($id_de){
    $sql="select *from chitietdethi where id_de=".$id_de;
            $listcaccauhoi=pdo_query($sql);
            return $listcaccauhoi;
}
function load_tenmon($id){
    $sql="select *from monhoc where id=".$id;
            $loadtenmon=pdo_query($sql);
            return  $loadtenmon;
}
function load_tg($id_de,$id_dethi){
    $sql="select *from dethi where id_dethi=".$id_dethi." AND id_de<>".$id_de;
            $tg=pdo_query($sql);
            return $tg;
}

