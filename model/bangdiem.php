<?php
function insert_bangdiem($ma_kh,$ten_kh,$id_mon,$ten_mon,$id_de,$ten_de,$thoigian,$diemthi	){
    $sql= "insert into bangdiem(ma_kh,ho_ten,id_mon,tenmon,id_de,tende,thoigian,diemthi	) values('$ma_kh','$ten_kh','$id_mon','$ten_mon','$id_de','$ten_de','$thoigian','$diemthi')";
    pdo_execute($sql);
}

function loadone_bangdiem($ma_kh){
    $sql="select *from bangdiem where ma_kh=".$ma_kh;
            $bangdiem=pdo_query($sql);
            return  $bangdiem;
}
