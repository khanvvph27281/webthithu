<div class="row">
            <div class="row tieude_user">
             <h1>Danh sách bình luận</h1>
            </div>  

            <form action="index.php?act=listblid" method="POST" enctype="multipart/form-data">
    <div class="row mb10 add_update">Đề được bình luận
      <select name="idmh" id="">

        <?php
        
        foreach ($loadde as $de) {
          extract($de);
       
          echo '<option value="' . $id_de . '">' . $tende . '</option>';
        } ?> 
       </select>
       <div class="submittimkiem">
       <input type="submit" value="ok " name="listtheomon">
       <a href="index.php?act=binhluan"><input type="button" value="Tất Cả"></a>
       </div>

    </div></form>

             <div class="row">
               <div class="  tablee ">
                 <table>
                   <tr>
                     <th></th>
                     <th>Mã bình luận</th>
                     <th>Nội dung</th>
                     <th>Tài khoản bình luận</th>
                     <th>Đề được bình luận</th>
                     <th>Ngày bình luận</th>
                   <th>Hành động</th>
                   </tr>
                   
    <tr>
    <?php
foreach($listbinhluan as $binhluan){
    extract($binhluan);
    $xoabl="index.php?act=xoabl&id_cmt=".$id_cmt;
  
   
    echo '<tr>
    <td><input type="checkbox" name="" id=""></td>
    <td>'.$id_cmt.'</td>
    <td>'.$noidung.'</td>
    <td>'.$ho_ten.'</td>
    <td>'.$id_de.'</td>
    <td>'.$ngaybinhluan.'</td>
    <td class="delete"> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
  
  </tr>';
}
                ?>
               
               
              </table>
               </div>
   
           
         </div>
           </div>