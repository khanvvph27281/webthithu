<div class="border_xq">
  
<div class="row tieude_user">
               <h1>Thêm môn học</h1>
            </div>
          
          <div class="row tieude_user mb10">
                <br>
                <form action="index.php?act=monhoc" method="POST">
                <div class="row mb10 add_update"> Mã môn <input type="text" name="ma_mon" id="" value=""></div>     
                <div class="row mb10 add_update">Tên môn <input type="text" name="ten_mon" id="" value="" ></div>     
                <div class="row mb10 submittwo">
                  <input  type="submit" name="themmoi" value="Thêm Mới"> 
                    <input type="reset" value="Nhập lại"> 
                   <a href="index.php?act=list_mon"><input type="button" value="Danh sách"></a>
                    </div>
              <?php
              if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;
              ?>
                </form>
          </div>

        
   </div>
   

</div>