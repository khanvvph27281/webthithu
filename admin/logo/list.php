<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách câu hỏi</h1>
    </div>
    
   
    <div class="row">
      <div class="  tablee ">
        <table>
          <tr>
            <th></th>
            <th>id Logo</th>
            <th>tên logo</th>
            <th>hình logo</th>
            <th>Tiêu đề 1</th>
            <th>Tiêu đề 2</th>
            <th>Tiêu đề 3</th>
            <th>Khác</th>
          </tr>
          <?php
          foreach ($load_logo as $logo) {
            extract($logo);
            $hinh="../content/image/".$name_logo;
            $sualogo = "index.php?act=sualogo&id_logo=" .$id_logo;
            echo '<tr><td><input type="checkbox" name="checkbox" id="" value="" ></td>
            
            <td>' . $id_logo . '</td>
            <td>' . $name_logo . '</td>
            <td><img src="'.$hinh.'" alt="" height="80px" width="80px"></td>
            <td>' . $tieude1 . '</td>
            <td>' . $tieude2 . '</td>
            <td>' . $tieude3 . '</td>
            
            <td class="delete"></a> <a href="' . $sualogo . '"><input type="button" value="Sửa"></a></td></tr>';
          }
          ?>



        </table>
      </div>
      <form action="index.php?act=list_cauhoi" method="POST">
        <div class="  row">
          <input type="button" value="Chọn tất cả" id="btn1">
          <input type="button" value="Bỏ chọn tất cả" id="btn2">
          <input type="button" value="Xóa các mục đã chọn" name="iddelete">
          <a href="index.php?act=update_logo"><input type="button" value="Nhập thêm"></a>

          </body>

          </html>
        </div>
      </form>


    </div>
  </div>