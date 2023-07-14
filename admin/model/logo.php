<?php
function loadlogo(){
    $sql="select * from logo_header ";
    $list =pdo_query($sql);
    return $list;
}

function update_logo($id_logo,$name_logo,$tieude1,$tieude2,$tieude3){
    $sql=" update logo_header set name_logo='".$name_logo."', tieude1 ='".$tieude1."',tieude2 ='".$tieude2."',tieude3 ='".$tieude3."' where id_logo =".$id_logo;
    pdo_execute($sql);
}
function loadone_logo($id_logo){
    $sql="select *from logo_header where id_logo=".$id_logo;
            $ch=pdo_query_one($sql);
            return $ch;
}
?>