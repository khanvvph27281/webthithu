<div class="border_xq">
<div class="row tieude_user">
  <h1>Thêm câu hỏi</h1>
</div>

<div class="row tieude_user mb10">

  <form action="index.php?act=cauhoi" method="POST">
    <div class="">Danh mục đề thi
      <select name="iddt" id="">

        <?php foreach ($loadde as $de) {
          extract($de);
          echo '<option value="' . $id_de . '">' . $tende . '</option>';
        } ?> </select>
        
    </div>
    <div class="row mb10 add_update"> Mã câu hỏi <input type="text" name="ma_mon" id=""></div>
    <div class="row mb10 add_update">Tên câu hỏi <input type="text" name="ten_mon" id=""></div>
    <div class="row mb10 add_update">Thứ tự câu<input type="text" name="thutu" id=""></div>

    <div class="traloi">
      <p>Đáp án</p>
      <div class="row mb10 ">A<input type="text" name="dapanA" id=""></div>
      <div class="row mb10 ">B<input type="text" name="dapanB" id=""></div>
      <div class="row mb10 ">C<input type="text" name="dapanC" id=""></div>
      <div class="row mb10 ">D<input type="text" name="dapanD" id=""></div>
      ĐÁp án Đúng :
      <select name="dapandung" id=""  class="row mb10">
        <option value="dapanA"> đáp án A</option>
        <option value="dapanB">đáp án B</option>
        <option value="dapanC">đáp án C</option>
        <option value="dapanD">đáp án D</option>
      </select>
      
      <div class="row mb10 ">Số Điểm <input type="text" name="diemso" id=""></div>

      <div>
        <div class="row mb10 submittwo">
          <input type="submit" name="themmoi" value="Thêm mới">
          <input type="reset" value="Nhập lại">
          <a href="index.php?act=list_cauhoi"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
          echo $thongbao;
        ?>
  </form>
</div>


</div>
</div>