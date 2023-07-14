<?php
function loadone_thongke($id_mon){
    $sql="select *from bangdiem where id_mon=".$id_mon."";
          $thongke=pdo_query($sql);
            return $thongke;
}

function loadone_thongkediem($id_mon){
  $sql="select *from bangdiem where  id_mon=".$id_mon."";
        $thongkediem=pdo_query($sql);
          return $thongkediem;
}
function hh_selectall_top10diem($id_mon){
  $sql = "Select * from bangdiem where id_mon=".$id_mon." AND diemthi IN(10,9.5,9.25,9.2,9.4,9.6,9.8,9,8.5,8.25,8.2,8.4,8.6,8.8,8)";
  return pdo_query($sql);
}
function loadone_thongkediem1($id_de){
  $sql="select *from bangdiem where  id_de=".$id_de."";
        $thongkediem=pdo_query($sql);
          return $thongkediem;
}
function hh_selectall_top10diem1($id_de){
  $sql = "Select * from bangdiem where id_de=".$id_de." AND diemthi IN(10,9.5,9.25,9,8.5,8.25,8.2,8.4,8.6,8.8,9.2,9.4,9.6,9.8,8)";
  return pdo_query($sql);
}

?>