<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Admin </title>


  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
</head>
<style>
  /* Google Font Link */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  .css_moi {
    text-align: center;
  }

  .mb10 {
    margin-bottom: 10px
  }

  .traloi {
    text-align: centerl;


  }

  .add_update label {
    text-align: left;
  }

  .add_update input {
    width: 500px;
    border-radius: 5px;

  }

  .tieude_user {
    text-align: center;

  }

  .tablee table {

    border-collapse: collapse;
    width: 100%;
  }

  table tr:nth-child(odd) {
    background-color: #eee;
  }

  table tr:nth-child(even) {
    background-color: white;
  }

  table tr:nth-child(1) {
    background-color: skyblue;
  }

  .tablee table th {
    padding: 20px 0px;
    background-color: #CCC;
  }

  .tablee table td {
    border: 1px gray solid;
    padding: 10px 20px;

  }

  .linkdtid a {
    display: block;
    text-decoration: none;
    color: black;
    font-size: medium;
  }

  .linkdtid a:hover {
    color: blue;
    font-weight: bold;
    font-size: 15px;

  }

  .submittimkiem input[type=submit] {
    width: 50px;
    border: #E4E9F7 1px solid;
    background-color: #FFB657;
    margin-top: 10px;
    padding: 5px;
    border-radius: 5px;
  }

  .submittimkiem input[type=button] {
    width: 50px;
    border: #E4E9F7 1px solid;
    background-color: #FFB657;
    margin-top: 10px;
    padding: 5px;
    border-radius: 5px;
  }

  .submittwo input[type=submit] {
    width: 100px;
    border: #E4E9F7 1px solid;
    background-color: #FFB657;
    margin-top: 10px;
    padding: 5px;
    border-radius: 5px;
  }

  .submittwo input[type=button] {
    width: 100px;
    border: #E4E9F7 1px solid;
    background-color: #FFB657;
    margin-top: 10px;
    padding: 5px;
    border-radius: 5px;
  }

  .submittwo input[type=reset] {
    width: 100px;
    border: #E4E9F7 1px solid;
    background-color: #FFB657;
    margin-top: 10px;
    padding: 5px;
    border-radius: 5px;
  }

  .tablee table th {
    border: 0.5px gray;
    background: #E4E9F7;
    background-color: #FFCC33;

  }

  .tablee {
    margin: 20px;
    margin-top: 30px;
    text-align: center;
  }

  .delete input {
    width: 40px;
    border: 1px white solid;
    background-color: #FFCC33;
    border-radius: 3px;
    color: black;
  }

  .delete input:hover {


    background-color: #FFCCCC;
    border-radius: 1px;
    color: black;
  }

  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 78px;
    background: #11101D;
    padding: 6px 14px;
    z-index: 99;
    transition: all 0.5s ease;
  }

  .sidebar.open {
    width: 250px;
  }

  .sidebar .logo-details {
    height: 60px;
    display: flex;
    align-items: center;
    position: relative;
  }

  .sidebar .logo-details .icon {
    opacity: 0;
    transition: all 0.5s ease;
  }

  .sidebar .logo-details .logo_name {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;
  }

  .sidebar.open .logo-details .icon,
  .sidebar.open .logo-details .logo_name {
    opacity: 1;
  }

  .sidebar .logo-details #btn {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 22px;
    transition: all 0.4s ease;
    font-size: 23px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
  }

  .sidebar.open .logo-details #btn {
    text-align: right;
  }

  .sidebar i {
    color: #fff;
    height: 60px;
    min-width: 50px;
    font-size: 28px;
    text-align: center;
    line-height: 60px;
  }

  .sidebar .nav-list {
    margin-top: 20px;
    height: 100%;
  }

  .sidebar li {
    position: relative;
    margin: 8px 0;
    list-style: none;
  }

  .sidebar li .tooltip {
    position: absolute;
    top: -20px;
    left: calc(100% + 15px);
    z-index: 3;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    white-space: nowrap;
    pointer-events: none;
    transition: 0s;
  }

  .sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
  }

  .sidebar.open li .tooltip {
    display: none;
  }

  .sidebar input {
    font-size: 15px;
    color: #FFF;
    font-weight: 400;
    outline: none;
    height: 50px;
    width: 100%;
    width: 50px;
    border: none;
    border-radius: 12px;
    transition: all 0.5s ease;
    background: #1d1b31;
  }

  .sidebar.open input {
    padding: 0 20px 0 50px;
    width: 100%;
  }

  .sidebar .bx-search {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 22px;
    background: #1d1b31;
    color: #FFF;
  }

  .sidebar.open .bx-search:hover {
    background: #1d1b31;
    color: #FFF;
  }

  .sidebar .bx-search:hover {
    background: #FFF;
    color: #11101d;
  }

  .sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    border-radius: 12px;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    background: #11101D;
  }

  .sidebar li a:hover {
    background: #FFF;
  }

  .sidebar li a .links_name {
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
  }

  .sidebar.open li a .links_name {
    opacity: 1;
    pointer-events: auto;
  }

  .sidebar li a:hover .links_name,
  .sidebar li a:hover i {
    transition: all 0.5s ease;
    color: #11101D;
  }

  .sidebar li i {
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    border-radius: 12px;
  }

  .sidebar li.profile {
    position: fixed;
    height: 60px;
    width: 78px;
    left: 0;
    bottom: -8px;
    padding: 10px 14px;
    background: #1d1b31;
    transition: all 0.5s ease;
    overflow: hidden;
  }

  .sidebar.open li.profile {
    width: 250px;
  }

  .sidebar li .profile-details {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
  }

  .sidebar li img {
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 6px;
    margin-right: 10px;
  }

  .sidebar li.profile .name,
  .sidebar li.profile .job {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    white-space: nowrap;
  }

  .sidebar li.profile .job {
    font-size: 12px;
  }

  .sidebar .profile #log_out {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background: #1d1b31;
    width: 100%;
    height: 60px;
    line-height: 60px;
    border-radius: 0px;
    transition: all 0.5s ease;
  }

  .sidebar.open .profile #log_out {
    width: 50px;
    background: none;
  }

  .home-section {
    position: relative;
    background: #E4E9F7;
    min-height: 100vh;
    top: 0;
    left: 78px;
    width: calc(100% - 78px);
    transition: all 0.5s ease;
    z-index: 2;
  }

  .sidebar.open~.home-section {
    left: 250px;
    width: calc(100% - 250px);
  }

  .home-section .text {
    display: inline-block;
    color: #11101d;
    font-size: 25px;
    font-weight: 500;
    margin: 18px
  }

  @media (max-width: 420px) {
    .sidebar li .tooltip {
      display: none;
    }
  }

  .border_xq {

    margin-top: 50px;
    width: 900px;
    border: 1px solid black;
    padding: 30px;
    margin-left: auto;
    margin-right: auto;

  }

  body {
    background-color: #E4E9F7;
    min-height: 100vh;
    line-height: 20px;
    font-family: monospace;
  }
</style>

<body>

  <div class="sidebar">
    <div class="logo-details">

      <div class="logo_name">Nhóm 6 </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="index.php?act=taikhoan">
          <i class='bx bx-user'></i>
          <span class="links_name">Tài khoản</span>
        </a>
        <span class="tooltip">Tài khoản</span>
      </li>
      <li>
        <a href="index.php?act=binhluan">
          <i class='bx bx-chat'></i>
          <span class="links_name">Bình luận</span>
        </a>
        <span class="tooltip">Bình luận</span>
      </li>
      <li>
        <a href="index.php?act=monhoc">
          <i class='bx bx-book-content'></i>
          <span class="links_name">Môn thi</span>
        </a>
        <span class="tooltip">Môn thi</span>
      </li>
      <li>
        <a href="index.php?act=dethi">
          <i class='bx bx-folder'></i>
          <span class="links_name">Đề thi</span>
        </a>
        <span class="tooltip">Đề thi</span>
      </li>
      <li>
        <a href="index.php?act=cauhoi">
          <i class='bx bx-question-mark'></i>
          <span class="links_name">Câu hỏi</span>
        </a>
        <span class="tooltip">Câu hỏi</span>
      </li>
      <li>
        <a href="index.php?act=thongke">
        <i class="fa-light fa-chart-column"></i>
          <span class="links_name">Thống kê</span>
        </a>
        <span class="tooltip">Thống kê</span>
      </li>
      <li>
        <a href="index.php?act=lienhe">
          <i class='bx bxl-telegram'></i>
          <span class="links_name">thông tin liê hệ của người dùng</span>
        </a>
        <span class="tooltip">thông tin liên hệ  của người dùng </span>
      </li>
      <li>
        <a href="index.php?act=logo">
       
        <i class="fa-regular fa-square-kanban"></i>
          <span class="links_name">Logo</span>
        </a>
        <span class="tooltip">Logo</span>
      </li>
      <li>
      <a href="index.php?act=slider">
        <i class='bx bx-question-mark'></i>
        <span class="links_name">Slider</span>
      </a>
      <span class="tooltip">Slider</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <img src="image/1.png" alt="profileImg">
          <div class="name_job">
            <div class="name">Admin</div>
            <div class="job">Nhóm 6</div>
          </div>
        </div>
        <a href="http://localhost/OnLuyenG612/"><i class='bx bx-log-out' id="log_out"></i></a>
      </li>
    </ul>
  </div>
  <script src="./js/script.js"></script>
  <section class="home-section">