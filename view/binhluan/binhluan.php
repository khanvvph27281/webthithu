<?php

session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$id_de = $_REQUEST['id_de'];
$dsbl=loadAll_binhluan($id_de);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1a.0">
  <title>Document</title>

</head>

<style>
.cmt input{
  width: 800px;
  height:70px;
  border:0.5px solid grey;

}

.end22{
  margin-left:50px;
}
boxfooter{
  margin-left:50px;
}
.submit_cmt input{
  border:none;
  margin-left:840px;
  margin-top:10px;
  background:rgb(103, 103, 210);
  width:100px ;
  height:50px;
  color:white;
}
.list_cmt{
  margin-left:55px;
  margin-top:50px;
}
.cmt{
  margin-top:15px;
  margin-left:50px;
  display:flex;
gap:15px;

}
.cmt img{

  width: 60px;
  height:70px;
}
span :hover{

   
}
.blue{
  font-size:22px;
  color: #385898;
  cursor: pointer;
  font-family:sans-serif;

}

.noidung{
  font-family:sans-serif;
  color: #1c1e21;
}
.noidung{
  margin-left:10px;
 
}
.blue{
margin-left:10px;
margin-top:5px;
}
.flexx img{
  width: 50px;
  height: 50px;
}
.flexx {
  display:flex;

}
</style>
<body>


 
  <div class="end22">
  <h2>BÌNH LUẬN</h2>
    </div>
   
    <div class="boxfooter ">
      <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
     
        <input type="hidden" name="id_de" value="<?= $id_de ?>">

     <div class="cmt"> <?php
        if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
            $target_dir = "./upload/";
            $hinh = $target_dir . $hinh_anh;
            
            ?>
            <br>
                   <img     src="<?=$hinh?>">
            <?php
        } 
            ?><input type="text" name="noidung" placeholder="Viết bình luận..." ></div>   
    
      <div class="submit_cmt"><input type="submit" value="Gửi" name="guibinhluan"></div>  
      </form>
    </div>
    <div class="list_cmt">

     <?php
       if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
       
      foreach ($dsbl as $bl) {
     
        extract($bl);
        $target_dir = "./upload/";
       $hinhcmt= $target_dir.$hinh_anh;
        echo '<br>';
        
        echo ' <div class="flexx"> <img  src="'.$hinhcmt.'" alt="" > <div>  <span class="blue">'  . $ho_ten . '</span> <p class="noidung">' ." $noidung" .  '</p></div></div>';
         
      }}
      ?>
    </table>
    
      <br>
    </div>


    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
      
      $id_de = $_POST['id_de'];
      $ho_ten = $_SESSION['user']['ho_ten'];
      $hinh_anh =$_SESSION['user']['hinh_anh'];
      $noidung = $_POST['noidung'];
      $ngaybinhluan = date(' d/m/Y');
      insert_binhluan($noidung,$ho_ten,$id_de,$ngaybinhluan,$hinh_anh);
      header("location: ".$_SERVER['HTTP_REFERER']);
    }

    ?>
  </div>



</body>
</html>
