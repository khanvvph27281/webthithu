<?php
   
   if(is_array($load_de))   {
    extract($load_de);
   }
?>


<div class="row tieude_user">
               <h1>Cập nhật đề thi</h1>
            </div>
            <div class="row tieude_user mb10">
                <br>
  
                <form action="index.php?act=update_dethi" method="POST" enctype="multipart/form-data">
                <div class="row mb10 add_update"> Mã đề <input type="text" name="id" id="" ></div>     
                <div class="row mb10 add_update">Tên đề <input type="text" name="tende" id="" value="<?=$tende?>" ></div>     
                <div class="row mb10 add_update"> Thời gian <input type="text" name="thoi_gian" id="" value="<?php if(isset($thoigian)&&($thoigian!="")) echo $thoigian; ?>" ></div>  
                <div class="row mb10 add_update">Số lượng <input type="text" name="so_luong" id="" value="<?php if(isset($socau)&&($socau!="")) echo $socau; ?>" ></div>  
                <div class="row mb10 add_update"> Ảnh minh họa <input type="file" name="hinh" id="" ></div>  
            
                <input type="hidden" name="id" value="<?php if(isset($id_de)&&($id_de>0)) echo $id_de; ?>" >
                <div class="row mb10"><input type="submit" name="capnhatdt" value="Cập nhật"> 
                    <input type="reset" value="Nhập lại"> 
                   <a href="index.php?act=list_de"><input type="button" value="Danh sách"></a>  </div>
              <?php
              if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;
              ?>
                </form>
            </div>
        </div>
    