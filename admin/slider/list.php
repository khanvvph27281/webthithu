<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách ảnh</h1>
    </div>
    <div class="row">
      <div class="  tablee ">
        <table>
   
          <tr>
            <th></th>
            <th>Id</th>
            <th>Tiêu đề</th>
            <th>Ảnh minh họa</th>
            <th>Hành động</th>
          </tr>
           <?php
          foreach ($load_slider as $sl) {
            extract($sl);
           
            $hinhpath="../content/img/".$tieude;
            if(is_file($hinhpath)){
                $hinh="<img src='".$hinhpath."' height='80px'>";
            }else{
                $hinh="no photo";
            }
            echo ' <tr>
       <td><input type="checkbox" name="" id=""></td>
       <td>'.$id.'</td>
   
     
       <td>'.$slider_img.'</td>
       <td>'.$hinh.'</td>
      
     
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
        <a href="index.php?act=slider"><input type="button" value="Nhập thêm"></a>
      </div>
    </div>
  </div>
  