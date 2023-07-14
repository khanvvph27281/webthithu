<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách Đề Thi</h1>
    </div>
    <div class="row">
      <div class="  tablee ">
        <table>
   
          <tr>
            <th></th>
            <th>Mã đề</th>
            <th>Tên đề</th>
            <th>Thời gian</th>
            <th>Số lượng</th>
            <th>Ảnh minh họa</th>
            <th>Hành động</th>
          </tr>
          <?php
          foreach ($loadde as $dethi) {
            extract($dethi);
            $listdt="index.php?act=listdt&idde=".$id_de;
            $xoadt="index.php?act=xoadt&idde=".$id_de;
            $updatedt="index.php?act=suadt&id_de=".$id_de;
            $hinhpath="./image/".$img;
            if(is_file($hinhpath)){
                $hinh="<img src='".$hinhpath."' height='80px'>";
            }else{
                $hinh="no photo";
            }
            echo ' <tr>
       <td><input type="checkbox" name="" id=""></td>
       <td>'.$id_de.'</td>
       <td class="linkdtid"><a href="'.$listdt.'">'.$tende.'</a></td>
       <td>'.$thoigian.'</td>
       <td>'.$socau.'</td>
       <td>'.$hinh.'</td>
       <td class="delete"> <a href="'.$xoadt.'"><input type="button" value="Xóa"></a>  <a href="'.$updatedt.'"><input type="button" value="Sửa"></a></td>
     </tr>';
          }
          ?>
<img src="../image/3.png" alt="">

        </table>
      </div>
      <div class="  row">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=dethi"><input type="button" value="Nhập thêm"></a>
      </div>
    </div>
  </div>
  