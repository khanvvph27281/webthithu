<?php

if (is_array($load_cauh)) {
    extract($load_cauh);
}
?>


<div class="row tieude_user">
    <h1>Cập nhật câu hỏi</h1>
</div>
<div class="row tieude_user mb10">
    <br>
    <form action="index.php?act=update_cauhoi" method="POST" enctype="multipart/form-data">
        <div class="row mb10 ">Danh mục đề thi
            <select name="iddm" id="">

                <?php foreach ($loadde as $de) {
                    extract($de);
                    echo '<option value="' . $id_de . '">' . $tende . '</option>';
                } ?> </select>
        </div>
        <div class="row mb10 add_update"> Mã câu hỏi <input type="text" name="id" id=""></div>
        <div class="row mb10 add_update">thứ tự câu <input type="text" name="thutu" id="" value="<?php if (isset($thutucau) && ($thutucau != "")) echo $thutucau; ?>"></div>
        <div class="row mb10 add_update"> Nội dung <input type="text" name="cauhoi" id="" value="<?php if (isset($cauhoi) && ($cauhoi != "")) echo $cauhoi; ?>"></div>
        <div class="traloi">
            <p>Đáp án</p>
            <div class="row mb10 ">A<input type="text" name="dapanA" id="" value="<?php if (isset($dapanA) && ($dapanA != "")) echo $dapanA; ?>"></div>
            <div class="row mb10 ">B<input type="text" name="dapanB" id="" value="<?php if (isset($dapanB) && ($dapanB != "")) echo $dapanB; ?>"></div>
            <div class="row mb10 ">C<input type="text" name="dapanC" id="" value="<?php if (isset($dapanC) && ($dapanC != "")) echo $dapanC; ?>"></div>
            <div class="row mb10 ">D<input type="text" name="dapanD" id="" value="<?php if (isset($dapanD) && ($dapanD != "")) echo $dapanD; ?>"></div>

            ĐÁp án Đúng :
            <select name="dapandung" id="" class="row mb10">
                <option value="dapanA"> đáp án A</option>
                <option value="dapanB">đáp án B</option>
                <option value="dapanC">đáp án C</option>
                <option value="dapanD">đáp án D</option>
            </select>
            <div class="row mb10 ">Số Điểm <input type="text" name="diemso" id="" value="<?php if (isset($diem) && ($diem != "")) echo $diem; ?>"></div>

            <div>

                <input type="hidden" name="id" value="<?php if (isset($id_cauhoi) && ($id_cauhoi > 0)) echo $id_cauhoi; ?>">
                <div class="row mb10"><input type="submit" name="capnhatch" value="Cập nhật">
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