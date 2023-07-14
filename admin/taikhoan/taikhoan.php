<div class="css_moi">
            <div class="row tieude_user">
               <h1>Danh sách tài khoản</h1>
            </div>
            <div class="row">
               <div class="  tablee  ">
                  <table>
                     <tr>
                        <th></th>
                        <th>Mã tài khoản</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Hành động</th>
                     </tr>
                     <?php
                     foreach($loadtk as $tk){
                        extract($tk);
                        $xoatk="index.php?act=xoatk&ma_kh=".$ma_kh;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$ma_kh.'</td>
                        <td>'.$ho_ten.'</td>
                        <td>'.$mat_khau.'</td>
                        <td>'.$email.'</td>
                        <td>'.$vai_tro.'</td>
                        <td></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                     </tr>';
                     }

                     ?>
                     

                  </table>
               </div>

               <div class="  row">
                  <input type="button" value="Chọn tất cả">
                  <input type="button" value="Bỏ chọn tất cả">
                  <input type="button" value="Xóa các mục đã chọn">
                  <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
               </div>
            </div>
         </div>

</div>