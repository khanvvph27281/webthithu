<div class="border_xq">
<div class="row tieude_user">
  <h1>Thêm đề thi</h1>
</div>

<div class="row tieude_user mb10">

  <form action="index.php?act=dethi" method="POST" enctype="multipart/form-data">
    <div class="row mb10 add_update">Danh mục môn thi
      <select name="idmh" id="">

        <?php
        foreach ($listmh as $danhmuc) {
          extract($danhmuc);
          echo '<option value="' . $id_mon . '">' . $tenmon . '</option>';
        } ?> </select>
    </div>
    <div class="row mb10 add_update"> <label for="">Mã Đề : </label><br>
    <input type="text" name="ma_de" id=""></div>
    <div class="row mb10 add_update"><label for="">Tên Đề : </label><br> <input type="text" name="ten_de" id=""></div>
    <div class="row mb10 add_update"><label for="">Thời Gian Làm Bài :</label> <br><input type="text" name="thoigian" id=""></div>
    <div class="row mb10 add_update"><label for="">Số lượng câu hỏi :</label> <br><input type="text" name="cauhoi" id=""></div>
    <div class="row mb10 add_update"><label for="">Ảnh Minh Họa :</label><br> <input type="file" name="hinh" id=""></div>
    <div class="row mb10 submittwo">
      <input type="submit" name="themmoi" value="Thêm mới">
      <input type="reset" value="Nhập lại">
      <a href="index.php?act=list_de"><input type="button" value="Danh sách"></a>
    </div> <?php
            if (isset($thongbao) && ($thongbao != ""))
              echo $thongbao;
            ?>

  </form>
</div>


</div>
</div>