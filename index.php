<?php
session_start();

//controllers
include "model/pdo.php";
include "model/khach-hang.php";
include "model/cauhoi.php";
include "model/monthi.php";
include "model/bangdiem.php";
include "model/slider.php";
include "view/header.php";
include "model/logo.php";
include "global.php";

$logoheader = loadlogo();
$demontoan = load_dethicungloai1(2);
$demonhoa = load_dethicungloai1(1);
$demonly = load_dethicungloai1(3);
$load_home_toan = load_dethicungloai_home(2);
$load_home_hoa = load_dethicungloai_home(1);
$load_home_ly = load_dethicungloai_home(3);
$slider=load_slider();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'monthi':
            $monhoc = loadall_monthi();
            $_SESSION['mon'] = loadall_monthi();
            $demontoan = load_dethicungloai1(2);
            $demonhoa = load_dethicungloai1(1);
            $demonly = load_dethicungloai1(3);
            $demonanh = load_dethicungloai1(4);
            $demonsinh = load_dethicungloai1(5);

            $list_denew = hh_selectall_top5();
            $list_deold = hh_selectall_top6();
            include "./view/monthi.php";

            break;
        case 'lamde':

            if (isset($_GET['idbai']) && $_GET['idbai'] > 0) {

                $listde = loadone_dethi($_GET['idbai']);
                $listcauhoi = load_caccau($_GET['idbai']);

                $laytemmonde =  laytenmonde($_GET['idbai']);
                foreach ($laytemmonde as $ten) {
                    extract($ten);
                    $tende . $tenmon;
                }
            }


            include "./view/lamde.php";

            break;

        case 'diemthi':
            if (isset($_POST['id_de'])) {
                $data = $_POST;

                $dataid = $data['id_de'];
                unset($data['id_de']);
                $diem = 0;
                $arr = [];
                $loadcauhoi = load_caccau($dataid);
                $laytemmonde =  laytenmonde($dataid);
                foreach ($laytemmonde as $ten) {
                    extract($ten);
                    $tende . $tenmon . $id_mon . $id_de;
                }

                if ($loadcauhoi) {
                    $dapan = [];
                    foreach ($data as $k => $v) {
                        
                        if ($v == $loadcauhoi[$k]['dapan']) {
                            // var_dump($loadcauhoi[$k]['dapan']);
                            $diem = $diem + $loadcauhoi[$k]['diem'];
                            array_push($arr, $v);
                        }
                    }
                    $thongbao = $diem;
                }
                // lấy danh sách đáp án đúng của bộ câu hỏi này 
                // var_dump($arr);die;
            }
            if (isset($_POST['id_de'])) {
                $ma_kh = $_SESSION['user']['ma_kh'];
                $ten_kh = $_SESSION['user']['ho_ten'];
                $id_mon =    $id_mon;
                $ten_mon =  $tenmon;
                $id_de = $id_de;
                $ten_de =   $tende;
                $thoigian =  date(' d/m/Y');
                $diem = $diem;
                insert_bangdiem($ma_kh,$ten_kh, $id_mon, $ten_mon, $id_de, $ten_de, $thoigian, $diem);
            }
            include "./view/diemthi.php";


            break;

        case 'detheotungmon':
            $monhoc = loadall_monthi();

            if (isset($_GET['id_mon']) && $_GET['id_mon'] > 0) {
                $dtcl = loadone_dethi($_GET['id_mon']);
                $ten=loadone_monthi($_GET['id_mon']);
                $dt = load_dethicungloai($_GET['id_mon']);

                $list_denew = hh_selectall_top5();
                $list_deold = hh_selectall_top6();
            }
            include "./view/detheotungmon.php";
            break;
            case 'dangky':
                if (isset($_POST['dangky'])) {
    
                    $ho_ten = $_POST['ho_ten'];
                    $email = $_POST['email'];
                    $mat_khau = $_POST['mat_khau'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "./upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    $vai_tro = $_POST['vai_tro'];
                    khach_hang_insert($mat_khau, $ho_ten, $vai_tro, $hinh, $email);
                    $thongbao = 'Đăng ký thành công';
                }
                include 'view/taikhoan/dangky.php';
                break;
        case 'uplogo':
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $checkuser = check_user($ho_ten, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại, vui lòng đăng kí";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'dangxuat':
            session_unset();
            header('location:index.php');
            break;

        case 'update':
            if (isset($_POST['capnhat'])) {
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $hinh = $_FILES['hinh']['name'];
                $img = $_POST['img'];
                $anh = $_FILES['hinh'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $vai_tro = $_POST['vai_tro'];
                $ma_kh = $_POST['ma_kh'];
                if ($_FILES['hinh']['size'] <= 0) {
                    $hinh = $img;
                }
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $vai_tro);
                $_SESSION['user'] = check_user($ho_ten, $mat_khau);
                // var_dump($_SESSION['user']);
                // die();

                $thongbao = 'cập nhật thành công';
            }
            include "view/taikhoan/update.php";
            break;
        case 'uplogo':

        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật Khẩu của bạn là :" . $checkemail['mat_khau'];
                } else {
                    $thongbao = "email này không tồn tại";
                }
            }
            include "./view/taikhoan/quen_mk.php";
            break;
        case 'bangdiem':
            $id = $_SESSION['user']['ma_kh'];
            $loadbangdiem = loadone_bangdiem($id);



            include "./view/bangdiem.php";
            break;
        case 'search':
            if (isset($_POST['list_go'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $listdeThi = search_dethi($kyw);
            $list_denew = hh_selectall_top5();
            $list_deold = hh_selectall_top6();
            include "./view/search_deThi.php";
            break;

        case 'lienhe':
            if (isset($_POST['bnt-send'])) {
                $nom = $_POST['nom'];
                $pre = $_POST['prenom'];
                $emial = $_POST['email'];
                $society = $_POST['society'];
                $diachi = $_POST['adresse'];
                $postal = $_POST['postal'];
                $ville = $_POST['ville'];
                $phone = $_POST['phone'];
                $fonction = $_POST['fonction'];
                $sujet = $_POST['sujet'];
                $message = $_POST['message'];
                insert_lienhe($nom, $pre, $emial, $society, $diachi, $postal, $ville, $phone, $fonction, $sujet, $message);
            }
            include "./view/lienhe.php";
            break;
        default:
            include_once "./view/home.php";
            break;
    }
} else {

    include "./view/home.php";
}


include_once "./view/footer.php";
