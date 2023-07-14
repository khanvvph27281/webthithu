<style>
  .input{
  padding: 0 0 0 6px;
}
</style>
<div class="register">
  <div class="box-title4">
    ĐĂNG KÝ TÀI KHOẢN
  </div>
  <div class="box-content4 formtk4">

       <form action="index.php?act=dangky" method="POST" enctype="multipart/form-data">
           <label for="">TÊN ĐĂNG NHẬP</label><br>
           <input type="text" name="ho_ten" class="input" required>

           <label for="">MẬT KHẨU</label><br>
           <input type="text" name="mat_khau" class="input" required>

           <label for="">XÁC NHẬN MẬT KHẨU</label><br>
           <input type="text" class="input" required>

           <label for="">ĐỊA CHỈ EMAIL</label><br>
           <input type="email" name="email" class="input" required>

           <label for="">HÌNH ẢNH</label><br>
           <input type="file" name="hinh" class="input" required><br>

           <label for="">VAI TRÒ</label><br>
           <div class="vt">
               <input type="radio" name="vai_tro" value="Nam">Admin
               <input type="radio" name="vai_tro" value="Nữ"> Người dùng <br>
           </div>
    

            <div class="login">
        <button name="dangky" type="submit">Đăng ký ngay</button><br>
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
