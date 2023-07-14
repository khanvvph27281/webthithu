<?php
require_once 'pdo.php';
function insert_chitietdethi($cauhoi, $thutucau, $dapanA, $dapanB, $dapanC, $dapanD, $dapan, $diem, $id_de)
{
    $sql = "insert into chitietdethi(cauhoi,thutucau,dapanA,dapanB,dapanC,dapanD,dapan,diem,id_de) values('$cauhoi','$thutucau','$dapanA','$dapanB','$dapanC','$dapanD','$dapan','$diem','$id_de')";
    pdo_execute($sql);
}


function loadall_cauhoi()
{
    $sql = "select *from chitietdethi";
    $listchitietdethi = pdo_query($sql);
    return $listchitietdethi;
}

function loadone_cauhoi($id_de){
    $sql="select *from chitietdethi where id_de=".$id_de;
            $cauhoi=pdo_query_one($sql);
            return $cauhoi;
}
function load_caccau($id_de){
    $sql="select *from chitietdethi where id_de=".$id_de."";
            $listcaccauhoi=pdo_query($sql);
            return $listcaccauhoi;
}

function checkDapan($id_cauhoi,$dapan){
    $sql = "select * from khach_hang where id_cauhoi ='".$id_cauhoi."' AND dapan='".$dapan."'";
    return pdo_query($sql);
}

?>