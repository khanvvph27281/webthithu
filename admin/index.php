<?php
include  "./view/header.php";
include "./model/pdo.php";
include "./model/admin.php";
include "./model/binhluan.php";
include "./model/thongke.php";
include "./model/logo.php";
include "./model/slider.php";

//Lấy thông tin controller từ URL
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {



        case 'monhoc':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenmon = $_POST['ten_mon'];
                insert_monhoc($tenmon);
                $thongbao = 'Thêm môn thi thành công .';
            }
            include "./monhoc/add_mon.php";
            break;
        case 'list_mon':
            $loadmon = loadall_monhoc();
            include "./monhoc/list.php";
            break;
        case 'xoamh':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $xoa = $_GET['id'];
                delete_monhoc($xoa);
            }
            $loadmon = loadall_monhoc();
            include "./monhoc/list.php";
            break;
        case 'suamh':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $suamh = $_GET['id'];
                $load_mon = loadone_monhoc($suamh);
            }
            include "./monhoc/update.php";
            break;
        case 'update':
            if (isset($_POST['capnhatmh']) && $_POST['capnhatmh']) {
                $maloai = $_POST['id'];
                $tenloai = $_POST['monhoc'];
                update_monhoc($maloai, $tenloai);
                $thongbao = "cập nhật thành công ";
            }
            $loadmon = loadall_monhoc();
            include "./monhoc/list.php";
            break;
        case 'dethi':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $made = $_POST['ma_de'];
                $idmh = $_POST['idmh'];
                $tende = $_POST['ten_de'];
                $thoigian = $_POST['thoigian'];
                $cauhoi = $_POST['cauhoi'];
                $filename = $_FILES["hinh"]["name"];
                $target_dir = "image/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_dethi($tende, $thoigian, $cauhoi, $idmh, $filename);
                $thongbao = "Thêm Đề Thi thành công";
            }
            $listmh = loadall_monhoc();
            $listmh = loadall_monhoc();
            include "./dethi/add_de.php";
            break;
        case 'list_de':
            $listmh = loadall_monhoc();
            $loadde = loadall_dethi();
            include "./dethi/list.php";
            break;
        case 'listmhid':
            if (isset($_POST['listtheomon'])) {
                $idmh = $_POST['idmh'];
            }
            $listmh = loadall_monhoc();
            $loadde = dethitheoid($idmh);
            include "./dethi/list.php";
            break;
        case 'listidde':
            if (isset($_GET['idde']) && $_GET['idde'] > 0) {
                $idde = $_GET['idde'];
            }

            $loadde = dethitheoid($idde);
            include "./dethi/listid.php";
            break;
        case 'xoadt':
            if (isset($_GET['idde']) && $_GET['idde'] > 0) {
                $xoadt = $_GET['idde'];
                delete_dethi($xoadt);
            }
            $listmh = loadall_monhoc();
            $loadde = loadall_dethi();
            include "./dethi/list.php";
            break;
        case 'cauhoi':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddt = $_POST['iddt'];
                $ten_mon = $_POST['ten_mon'];
                $thutu = $_POST['thutu'];
                $dapanA = $_POST['dapanA'];
                $dapanB = $_POST['dapanB'];
                $dapanC = $_POST['dapanC'];
                $dapanD = $_POST['dapanD'];
                $dapan = $_POST['dapandung'];
                $diem = $_POST['diemso'];
                insert_chitietde($iddt, $ten_mon, $thutu, $dapanA, $dapanB, $dapanC, $dapanD, $dapan, $diem);
                $thongbao = "thêm thành công";
            }
            $loadde = loadall_dethi();
            include "./cauhoi/add_cauhoi.php";
            break;
        case 'list_cauhoi':
            if (isset($_POST['listtheode']) && $_POST['listtheode']) {
                $listid = $_POST['listtheode'];
                $iddt = $_POST['iddt'];
                cauhoitheoid($iddt);
            }


            $loadde = loadall_dethi();
            $load_ch = loadall_cauhoi();
            include "./cauhoi/list.php";
            break;
        case 'list_chid':
            if (isset($_POST['listtheode']) && $_POST['listtheode']) {
                $listid = $_POST['listtheode'];
                $iddt = $_POST['iddt'];
            }
            $loadde = loadall_dethi();
            $load_ch = cauhoitheoid($iddt);
            include "./cauhoi/list.php";
            break;
        case 'xoacauhoi':
            if (isset($_GET['id_cauhoi']) && $_GET['id_cauhoi'] > 0) {

                delete_chitietde($_GET['id_cauhoi']);
            }
            $loadde = loadall_dethi();
            $load_ch = loadall_cauhoi();
            include "./cauhoi/list.php";
            break;
        case 'suadt':
            if (isset($_GET['id_de']) && ($_GET['id_de']) > 0) {
                $suadt = $_GET['id_de'];
                $load_de = loadone_dethi($suadt);
            }
            include "./dethi/update.php";
            break;
        case 'dethi':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $made = $_POST['ma_de'];
                $idmh = $_POST['idmh'];
                $tende = $_POST['ten_de'];
                $thoigian = $_POST['thoigian'];
                $cauhoi = $_POST['cauhoi'];
                $filename = $_FILES["hinh"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_dethi($tende, $thoigian, $cauhoi, $idmh, $filename);
                $thongbao = "Thêm Đề Thi thành công";
            }
            $listmh = loadall_monhoc();
            $listmh = loadall_monhoc();
            include "./dethi/add_de.php";
            break;
        case 'suach':
            if (isset($_GET['id_cauhoi']) && ($_GET['id_cauhoi']) > 0) {
                $suach = $_GET['id_cauhoi'];
                $load_cauh = loadone_cauhoi($suach);
            }
            $loadde = loadall_dethi();
            include "./cauhoi/update.php";
            break;
        case 'update_cauhoi':
            if (isset($_POST['capnhatch']) && $_POST['capnhatch']) {
                $maloai = $_POST['id'];
                $thutu = $_POST['thutu'];
                $cauhoi = $_POST['cauhoi'];
                $dapanA = $_POST['dapanA'];
                $dapanB = $_POST['dapanB'];
                $dapanC = $_POST['dapanC'];
                $dapanD = $_POST['dapanD'];
                $dapan = $_POST['dapandung'];
                $diem = $_POST['diemso'];
                update_cauhoi($maloai, $thutu, $cauhoi, $dapanA, $dapanB, $dapanC, $dapanD, $dapan, $diem);
                $thongbao = "cập nhật thành công ";
            }
            $loadde = loadall_dethi();
            $load_ch = loadall_cauhoi();
            include "./cauhoi/list.php";
            break;
        case 'binhluan':
            $loadde = loadall_dethi();
            $listbinhluan = loadAll_binhluan1();
            include "./binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id_cmt']) && ($_GET['id_cmt']) > 0) {
                $bl = $_GET['id_cmt'];
                $deletebinhluan = delete_binhluan($bl);
            }
            $listbinhluan = loadAll_binhluan1();
            include "binhluan/list.php";
            break;
        case 'listdt':
            if (isset($_GET['idde']) && ($_GET['idde']) > 0) {
                $id_de = $_GET['idde'];
                $load_ch = cauhoiadmin($id_de);
               
                $loaddiemtoan = loadone_thongkediem1($id_de);
                $topdiemtoan=hh_selectall_top10diem($id_de);
            }
            $loadde = loadall_dethi();

            include "./cauhoi/listid.php";
            break;
        case 'taikhoan':
            $loadtk = loadAll_taikhoan();
            include "./taikhoan/taikhoan.php";
            break;
        case 'lienhe':
            $load_lienhe = loadlienhe();
            include "./lienhe/listlh.php";
            break;
        case 'xoalienhe':
            if (isset($_GET['id_lienhe']) && $_GET['id_lienhe'] > 0) {
                $id = $_GET['id_lienhe'];
                deletelienhe($id);
            }
            $load_lienhe = loadlienhe();
            include "./lienhe/listlh.php";
            break;
        case 'thongke':
            $loaddiemtoan = loadone_thongkediem(2);
            $loaddiemhoa = loadone_thongkediem(1);
            $loaddiemly = loadone_thongkediem(3);
            $loaddiemsinh = loadone_thongkediem(4);
            $loaddiemanh = loadone_thongkediem(5);
            $topdiemtoan=hh_selectall_top10diem(2);
            $topdiemhoa=hh_selectall_top10diem(1);
            $topdiemly=hh_selectall_top10diem(3);
            $topdiemsinh=hh_selectall_top10diem(4);
            $topdiemanh=hh_selectall_top10diem(5);
            include "./thongke/bieudp.php";
            break;
        case 'logo':
            $load_logo = loadlogo();
            include "./logo/list.php";
            break;
        case 'sualogo':
            if (isset($_GET['id_logo']) && $_GET['id_logo']) {
                $id_logo = $_GET['id_logo'];
                $load = loadone_logo($id_logo);
            }
            $load_logo = loadlogo();
            include "./logo/update.php";
            break;
        case 'update_logo':
            if (isset($_POST['capnhatlogo']) && $_POST['capnhatlogo']) {
                $id = $_POST['id_logo'];
                $tieude1 = $_POST['tieude1'];
                $tieude2 = $_POST['tieude2'];
                $tieude3 = $_POST['tieude3'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../content/image/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                update_logo($id, $hinh, $tieude1, $tieude2, $tieude3);
                $thongbao = "cập nhật thành công ";
            }
            $load_logo = loadlogo();
            include "./logo/list.php";
            break;
        case 'slider':
            if (isset($_POST['addslider']) && $_POST['addslider']) {
                $id = $_POST['id'];
                $tieude = $_POST['tieude'];
                $filename = $_FILES["slider_img"]["name"];
                $target_dir = "../content/img/";
                $target_file = $target_dir . basename($_FILES["slider_img"]["name"]);
                if (move_uploaded_file($_FILES["slider_img"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_slider($id, $tieude, $filename);
                $thongbao = 'Thêm ảnh thi thành công .';
            }
            include "./slider/add_slider.php";
            break;
        case 'list_slider':
            $load_slider = load_slider();
            include "./slider/list.php";
            break;

        case 'listblid':
          
            if (isset($_POST['listtheomon'])) {
                $id = $_POST['idmh'];
            }
            $listbinhluan = binhluantheoid($id);
            $loadde = loadall_dethi();
            include "./binhluan/list.php";
            break;

        default:
      
            include_once "./view/home.php";
            break;
    }
} else {
    $loaddiemtoan = loadone_thongkediem(2);
    $loaddiemhoa = loadone_thongkediem(1);
    $loaddiemly = loadone_thongkediem(3);
    $loaddiemsinh = loadone_thongkediem(4);
    $loaddiemanh = loadone_thongkediem(5);
    $topdiemtoan=hh_selectall_top10diem(2);
    $topdiemhoa=hh_selectall_top10diem(1);
    $topdiemly=hh_selectall_top10diem(3);
    $topdiemsinh=hh_selectall_top10diem(4);
    $topdiemanh=hh_selectall_top10diem(5);
    include "./thongke/bieudp.php";
    include "./view/home.php";
}
include_once "./view/footer.php";

