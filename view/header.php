<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=ra.0">
  <link rel="icon" href="content/image/tieng-nhat-trung-cap-1.png">
  <title>Ôn Luyện</title>
  <link rel="stylesheet" href="./content/css/stype.css">
  <script src="https://kit.fontawesome.com/880651a1a2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
  .flex {
    display: flex;
    text-align: center;
    gap: 30px;
    justify-content: space-around;


  }

  .tablee table {
    width: 70%;

    border-collapse: collapse;
    margin-left: 150px;
  }

  .tablee table th {
    padding: 20px 0px;
    background-color: #CCC;
  }

  .tablee table tr {
    background: #E4E9F7;
  }

  .tablee table td {
    border: 1px gray solid;
    padding: 10px 20px;
  }

  .tablee {
    text-align: center;
  }

  .blue {
    color: blue;
  }
</style>

<body>

  <div class="container">
    <div class="menu">
      <div class="logo">
        <a href="http://localhost/OnLuyenG612/index.php"><img src="content/image/Logo-oke.svg" alt=""></a>
      </div>

      <div class="left">
        <ul>

          <li><a href="index.php"><i class="fa-solid fa-house-user"></i>Trang Chủ</a></li>
          <?php if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
            echo ' <li><a href="index.php?act=bangdiem"><i class="fa-sharp fa-solid fa-clipboard"></i> Bảng điểm</a></li>';
          } else {

            echo ' <li><a href="index.php?act=dangnhap "><i class="fa-sharp fa-solid fa-clipboard"></i> Bảng điểm</a></li>';
          }
          ?>


          <li><a href="index.php?act=lienhe"><i class="fa-sharp fa-solid fa-id-card"></i> Liên Hệ</a></li>
          <div class="dropdown" style="margin-left:32px; ">
            <li><a href="index.php?act=monthi"><i class="fa-solid fa-briefcase"></i>Môn Thi</a></li>
            <div class="dropdown-content" style=" background-color: rgb(215, 225, 221); border-radius: 5px;">
              <i class="fa-solid"></i>


              <?php
              $monhoc = loadall_monthi();
              foreach ($monhoc as $mon) {
                extract($mon);
                $linkmon = "index.php?act=detheotungmon&id_mon=" . $id_mon;
                echo '<a  style="
                border-top-left-radius: 5px;
                border-top-right-radius: 5px; font-family: cursive;
                font-size: 20px;" href="' . $linkmon . '">' . $tenmon . '</a>';
              }
              ?>
            </div>
            </li>

        </ul>
      </div>


      <div class="right">
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
          extract($_SESSION['user']);
          $target_dir = "./upload/";
          $hinh_anh = $target_dir . $hinh_anh;
        ?>
          <div class="ngng">
            <div class="dropdown">
              <img class="dropbtn" src="<?= $hinh_anh ?> ">

              <div class="dropdown-content">
                <a href="#">Chào <?= $ho_ten ?></a>
                <a href="http://localhost/OnLuyenG612/admin/index.php">Đăng nhập Admin</a>
                <a href="index.php?act=update">Cập nhật</a>
                <a href="index.php?act=dangxuat" onclick="return confirm('Bạn chắc chắn muốn đăng xuất không')">Đăng xuất</a>


              </div>
            </div>
          </div>

        <?php
        } else {
        ?>


          <a href="index.php?act=dangnhap"><button>Đăng nhập</button></a>
          <a href="index.php?act=dangky"><button>Đăng Ký</button></a>
        <?php } ?>
      </div>
    </div>
    <div></div>

    <!-- <div class="banner">
      <img src="content/image/imgg.png" alt="">
    </div> -->