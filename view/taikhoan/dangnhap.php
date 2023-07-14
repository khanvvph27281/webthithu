<style>
.input{
  padding: 0 0 0 6px;
}
</style>
<div class="register">
  <div class="box-title5">
    ĐĂNG NHẬP TÀI KHOẢN
  </div>
  <div class="box-content5 formtk">
    <form action="index.php?act=dangnhap" method="POST" enctype="multipart/form-data">
      <div class="mb">
        <label for="">TÊN ĐĂNG NHẬP</label><br>
        <input type="name" name="ho_ten" class="input">
      </div>
      <div class="form-group">
        <label for="ipnPassword">PASSWORD</label>
        <div class="input-group">
          <input type="password" class="form-control" name="mat_khau" id="ipnPassword"  class="input">
          <button type="button" id="btnPassword">
            <span class="fas fa-eye"></span>
          </button>
        </div>
      </div>
      <div class="bt">
        <button name="dangnhap" type="submit">Đăng Nhập</button><br>
      </div>
      <div class="in">
        <a href="index.php?act=dangky">Đăng Ký Tài Khoản</a>|
        <a href="index.php?act=quenmk">Quên mật khẩu</a>
      </div>
    </form>
    <h3 class="thongbao" style="color: crimson; 
 margin-top: 50px; margin-left: 200px;">
       <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
       ?>
       </h3>
  </div>
</div>