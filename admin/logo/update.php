<?php

if(is_array($load)){
    extract($load);
}
?>


<div class="row tieude_user">
    <h1>Cập nhật câu hỏi</h1>
</div>
<div class="row tieude_user mb10">
    <br>
    <form action="index.php?act=update_logo" method="POST" enctype="multipart/form-data">

        <div class="row mb10 add_update"> Mã logo <input type="text" name="id_logo" id="" value="<?php if (isset($id_logo) && ($id_logo != "")) echo $id_logo; ?>"></div>
        <div class="row mb10 add_update"> Tiêu đề 1  <input type="text" name="tieude1" id="" value="<?php if (isset($tieude1) && ($tieude1 != "")) echo $tieude1; ?>"></div>
        <div class="row mb10 add_update"> Tiêu đề 2 <input type="text" name="tieude2" id="" value="<?php if (isset($tieude2) && ($tieude2 != "")) echo $tieude2; ?>"></div>
        <div class="row mb10 add_update"> Tiêu đề 3 <input type="text" name="tieude3" id="" value="<?php if (isset($tieude3) && ($tieude3 != "")) echo $tieude3; ?>"></div>
        <div class="row mb10 add_update"> Ảnh minh họa <input type="file" name="hinh" id="" ></div>  
      

            <div>

               
                <div class="row mb10"><input type="submit" name="capnhatlogo" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=logo"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
    </form>
</div>
</div>