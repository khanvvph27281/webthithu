<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách Liên hệ với người dùng</h1>
    </div>
    <div class="row">
      <div class="  tablee ">
        <table>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Address</th>
            <th>Postcode</th>
            <th>City</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Khác</th>
          </tr>
          
          <?php
          foreach ($load_lienhe as $lienhe) {
            extract($lienhe);
            $xoalh = "index.php?act=xoalienhe&id_lienhe=" . $id_lienhe;
         
            echo '<tr>
            <td>' .$id_lienhe. '</td>
            <td>' .$name. '</td>
            <td>' . $email . '</td>
            <td>' . $company . '</td>
            <td>' . $address . '</td>
            <td>' . $postcode . '</td>
            <td>' . $city . '</td>
            <td>' . $phone . '</td>
            <td>' . $subject . '</td>
            <td>' . $mesage . '</td>
            
            
            <td class="delete"><a href="' . $xoalh . '"><input type="button" value="Xóa" </td></tr>';
          }
          ?>



        </table>
      </div>
      <form action="index.php?act=list_cauhoi" method="POST" >
         <div class="  row">
        <input type="button" value="Chọn tất cả" id="btn1">
        <input type="button" value="Bỏ chọn tất cả" id="btn2">
        <input type="button" value="Xóa các mục đã chọn" name="iddelete">
        

        </body>

        </html>
      </div>
      </form>
     

    </div>
  </div>