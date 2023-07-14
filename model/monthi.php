<?php
require_once 'pdo.php';
function insert_monthi($id_mon,$tenmon,$mota){
    $sql = "insert into monhoc(id_mon,tenmon,mota) values('$id_mon','$tenmon','$mota')";
    pdo_execute($sql);

}
function insert_de($id_de,$tende,$thoigian,$socau,$id_mon,$img){
    $sql = "insert into dethi(id_de,tende,thoigian,socau,id_mon,img) values('$id_de','$tende','$thoigian','$socau','$id_mon','$img')";
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
function loadone_monthi($id_mon){
    $sql = "select *from monhoc where id_mon=".$id_mon;
    $listmonhoc = pdo_query($sql);
    return $listmonhoc;
}

function load_dethicungloai($id_mon){
    $sql="select *from dethi where id_mon=".$id_mon." ";
            $listdethi=pdo_query($sql);
            return $listdethi;
}
function loadone_dethi($id_de){
    $sql="select *from dethi where id_de=".$id_de;
            $dethi=pdo_query_one($sql);
            return $dethi;
}
function load_dethicungloai1($id_mon){
    $sql="select *from dethi  where id_mon=".$id_mon."";
            $dethi1=pdo_query($sql);
            return $dethi1;
}
function laytenmonde($id_de){
$sql ="SELECT monhoc.tenmon,monhoc.id_mon, dethi.tende,dethi.socau,dethi.id_de,dethi.thoigian FROM monhoc LEFT JOIN dethi ON monhoc.id_mon=dethi.id_mon WHERE dethi.id_de=".$id_de."";
    $tendemon=pdo_query($sql);
    return $tendemon;

}
function insert_lienhe($surname,$name,$email,$company,$address,$postcode,$city,$phone,$funcition,$subject,$mesage){
    $sql = "insert into lienhe(surname,name,email,company,address,postcode,city,phone,funcition,subject,mesage) values('$surname','$name','$email','$company','$address','$postcode','$city','$phone','$funcition','$subject','$mesage')";
    pdo_execute($sql);

}
function search_dethi($kyw){
    $sql = "select * from dethi where 1";
    if($kyw!=""){
        $sql .= " and tende like '%" . $kyw . "%'";
    }
    $listdeThi = pdo_query($sql);
    return $listdeThi;

}
function loadten_deThi($id_mon){
    if($id_mon > 0){
        $sql = " select * from monhoc where id_mon = $id_mon";
        $mon = pdo_query_one($sql);
        extract($mon);
        return $tenmon;
    }else{
        return "";
    }
}
function hh_selectall_top5(){
    $sql = "select * from dethi where 1 order by id_de desc limit 0,5";
    return pdo_query($sql);
}
function hh_selectall_top6(){
    $sql = "select * from dethi where 1 order by id_de asc limit 0,6";
    return pdo_query($sql);
}
function load_dethicungloai_home($id_mon){
    $sql="select *from dethi where id_mon=".$id_mon." limit 0,3 ";
            $listdethi=pdo_query($sql);
         
            return $listdethi;
}
?>


