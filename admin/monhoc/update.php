<?php
if(is_array($load_mon)){
    extract($load_mon);
}
?>


<div class="row tieude_user">
               <h1>Cập nhật môn</h1>
            </div>
            <div class="row tieude_user mb10">
                <br>
  
                <form action="index.php?act=update" method="POST">
                <div class="row mb10 add_update"> Mã môn <input type="text" name="id" id="" ></div>     
                <div class="row mb10 add_update">Tên môn <input type="text" name="monhoc" id="" value="<?php if(isset($tenmon)&&($tenmon!="")) echo $tenmon; ?>" ></div>     
               <input type="hidden" name="id" value="<?php if(isset($id_mon)&&($id_mon>0)) echo $id_mon; ?>" >
                <div class="row mb10"><input type="submit" name="capnhatmh" value="Cập nhật"> 
                    <input type="reset" value="Nhập lại"> 
                   <a href="index.php?act=list"><input type="button" value="Danh sách"></a>  </div>
              <?php
              if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;
              ?>
                </form>
            </div>
        </div>
