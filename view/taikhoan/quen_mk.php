<div class="register">
  <div class="box-title4">
    ĐĂNG NHẬP TÀI KHOẢN
  </div>
  <div class="box-content4 formtk">
    <form action="index.php?act=quenmk" method="POST" >
      
      <div class="mb">
        <div class="mb">
          <label for="">Email</label><br>
          <input type="email" name="email" required><br>
        </div>
      </div>

     <input type="submit" value="giui" name="quenmk">
      <div class="login">


        <a href="index.php?act=dangky">Đăng Ký Tài Khoản</a>
      </div>
    </form>
    <?php
                        if (isset($thongbao) && ($thongbao)) {
                            echo $thongbao;
                        }
                        ?>
  </div>
</div>