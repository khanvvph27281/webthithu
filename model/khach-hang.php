<?php
require_once 'pdo.php';


function khach_hang_insert( $mat_khau, $ho_ten ,$vai_tro,$hinh_anh, $email){
    $sql = "INSERT INTO khach_hang(mat_khau, ho_ten, vai_tro,  hinh_anh, email) VALUES ( ?, ?, ?, ?, ?)";
    pdo_execute($sql, $mat_khau, $ho_ten, $vai_tro , $hinh_anh, $email);
}


function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh_anh){
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh_anh=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh_anh , $ma_kh);
}

function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}

function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function khach_hang_select_by_id($ma_kh){
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}

function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}
function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}
function check_email($email){
    $sql = "select * from khach_hang where email='".$email."'";
    return pdo_query_one($sql);
}
function check_user($ho_ten,$mat_khau){
    $sql = "select * from khach_hang where ho_ten='".$ho_ten."' AND mat_khau='".$mat_khau."'";
    return pdo_query_one($sql);
}
