<div class="row tieude_user">
  <h1>Chọn ảnh slider</h1>
</div>

<div class="row tieude_user mb10">

  <form action="index.php?act=slider" method="POST" enctype="multipart/form-data">
 
  <input type="text" name="id" id="">
  <div class="row mb10 add_update"><label for="">Tiêu đề ảnh :</label><br> <input type="text" name="tieude" id=""></div>
    <div class="row mb10 add_update"><label for="">Ảnh Minh Họa :</label><br> <input type="file" name="slider_img" id=""></div>
    <div class="row mb10 submittwo">
      <input type="submit" name="addslider" value="Thêm mới">
      
      <a href="index.php?act=list_slider"><input type="button" value="Danh sách"></a>
    </div> <?php
            if (isset($thongbao) && ($thongbao != ""))
              echo $thongbao;
            ?>

  </form>
</div>


</div>