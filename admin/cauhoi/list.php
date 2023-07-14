<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách câu hỏi</h1>
    </div>
    <form action="index.php?act=list_chid" method="post" enctype="multipart/form-data" class="">
      Danh sách đề thi : 
      <select name="iddt" id="">

        <?php foreach ($loadde as $de) {
          extract($de);
          echo '<option value="' . $id_de . '">' . $tende . '</option>';
        } ?>

      </select>
      <div class="submittimkiem">
        <input type="submit" value=" ok " name="listtheode">
      <a href="index.php?act=list_cauhoi"><input type="button" value="Tất Cả"></a>
      </div>


    </form>
    <div class="row">
      <div class="  tablee ">
        <table>
          <tr>
            <th></th>
            <th>Tên câu Hỏi</th>
            <th>Mã câu hỏi</th>
            <th>ĐÁp Án A</th>
            <th>ĐÁp Án B</th>
            <th>ĐÁp Án C</th>
            <th>ĐÁp Án D</th>
            <th>ĐÁp Án Đúng</th>
            <th>Điểm </th>
            <th>Khác</th>
          </tr>
          
          <?php
          foreach ($load_ch as $ch) {
            extract($ch);
            $xoach = "index.php?act=xoacauhoi&id_cauhoi=" . $id_cauhoi;
            $suach = "index.php?act=suach&id_cauhoi=" . $id_cauhoi;
            echo '<tr><td><input type="checkbox" name="checkbox" id="" value="'.$id_cauhoi.'" ></td>
            
            <td>' . $cauhoi . '</td>
            <td>' . $id_cauhoi . '</td>
            <td>' . $dapanA . '</td>
            <td>' . $dapanB . '</td>
            <td>' . $dapanC . '</td>
            <td>' . $dapanD . '</td>
            <td>' . $dapan . '</td>
            <td>' . $diem . '</td>
            
            <td class="delete"><a href="' . $xoach . '"><input type="button" value="Xóa"></a> <a href="' . $suach . '"><input type="button" value="Sửa"></a></td></tr>';
          }
          ?>



        </table>
      </div>
      <form action="index.php?act=list_cauhoi" method="POST" >
         <div class="  row">
        <input type="button" value="Chọn tất cả" id="btn1">
        <input type="button" value="Bỏ chọn tất cả" id="btn2">
        <input type="button" value="Xóa các mục đã chọn" name="iddelete">
        <a href="index.php?act=cauhoi"><input type="button" value="Nhập thêm"></a>

        </body>

        </html>
      </div>
      </form>
     

    </div>
  </div>