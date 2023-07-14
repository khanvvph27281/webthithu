<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách môn học</h1>
    </div>
    <div class="row">
      <div class="  tablee ">
        <table>
          <tr>
            <th></th>
            <th>Mã môn</th>
            <th>Tên môn học</th>
            <th>Hành động</th>
          </tr>
          <?php
          foreach ($loadmon as $mon) {
            extract($mon);
            $listdtid= "index.php?act=listidde&idde=" . $id_mon;
            $xoadm = "index.php?act=xoamh&id=" . $id_mon;
            $suadm = "index.php?act=suamh&id=" . $id_mon;
            echo '<tr>
       <td><input type="checkbox" name="name[]" id=""></td>
    
       <td>' . $id_mon . '</td>
       <td class="linkdtid"><a href="'.$listdtid.'">' . $tenmon . '</a></td>
       <td class="delete"> <a href="' . $xoadm . '"><input type="button" value="Xóa"></a>  <a href="' . $suadm . '"><input type="button" value="Sửa"></a></td>
     </tr>';
          }
          ?>


        </table>
      </div>

      <div class="  row">
        <input type="button" id="btn1" value="Chọn hết" />
        <input type="button" id="btn2" value="Bỏ chọn" />


        <script language="javascript">
          // Chức năng chọn hết
          document.getElementById("btn1").onclick = function() {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập checked
            for (var i = 0; i < checkboxes.length; i++) {
              checkboxes[i].checked = true;
            }
          };

          // Chức năng bỏ chọn hết
          document.getElementById("btn2").onclick = function() {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập Uncheck
            for (var i = 0; i < checkboxes.length; i++) {
              checkboxes[i].checked = false;
            }
          };
        </script>
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=monhoc"><input type="button" value="Nhập thêm"></a>
      </div>
    </div>
  </div>