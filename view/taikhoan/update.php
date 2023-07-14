<style>
.input{
  padding: 0 0 0 6px;
}
</style>
<div class="register">
  <div class="box-title4">
    CẬP NHẬT TÀI KHOẢN
  </div>
  <div class="box-content4 formtk4">
  <?php
         if(isset($_SESSION['user']) 
         && (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
             $img_path="upload/";
             $hinh = $img_path.$hinh_anh;
        }
        ?>
       <form action="index.php?act=update" method="POST" enctype="multipart/form-data">
       <label for="">TÊN ĐĂNG NHẬP</label><br>
           <input type="text" name="ho_ten" class="input" value="<?=$ho_ten ?>">

           <input type="text" name="ma_kh" value="<?=$ma_kh?>" hidden>

           <label for="">MẬT KHẨU</label><br>
           <input type="text" name="mat_khau" class="input" value="<?= $mat_khau ?>">

           <label for="">XÁC NHẬN MẬT KHẨU</label><br>
           <input type="text" class="input" required>

           <label for="">ĐỊA CHỈ EMAIL</label><br>
           <input type="email" name="email" class="input" required value="<?= $email ?>" readonly>

           <label for="">HÌNH ẢNH</label><br>
           <img width="150px" src="<?=$hinh ?>"> <br>
           <input type="text" name="img" value="<?=$hinh_anh?>" hidden>
           <input type="file" name="hinh" ><br>

           <label for="">VAI TRÒ</label><br>
           <div class="vt">
               <input type="radio" name="vai_tro" value="Nam">Admin
               <input type="radio" name="vai_tro" value="Nữ"> Người dùng <br>
           </div>
    

            <div class="login">
        <button name="capnhat" type="submit">Cập Nhật Ngay</button><br>

        
        <a href="index.php?act=dangnhap">Đăng nhập tài khoản</a>
      </div>
       </form>
       <h2 class="thongbao">
       <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
       ?>
       </h2>
    </div>
</div>