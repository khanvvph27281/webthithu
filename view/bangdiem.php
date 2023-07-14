<div class="banner">
  <img id="slideshow" src="content/img/slide1.webp" alt="">
  <!-- <p>
            <button onclick="_pre()"><</button>

            <button class="next" onclick="_next()">></button>
        </p> -->

</div>
<script>
  var slideShow = document.querySelector("#slideshow");
  var imgArr = [];
  var index = 0;
  document.body.onload = function() {
    for (var i = 0; i < 3; i++) {
      imgArr[i] = new Image;
      imgArr[i].src = "content/img/slide" + (i + 1) + ".webp"
    }
    _auto();
  }

  function _next() {
    index++;
    if (index > 3) index = 0;
    slideShow.src = imgArr[index].src;
  }

  function _pre() {
    index--;
    if (index < 0) index = 2;
    slideShow.src = imgArr[index].src;
  }
  var t;

  function _auto() {
    clearInterval(t);
    t = setInterval("_next()", 2500);
  }

  function _stop() {
    clearInterval(t);
  }
</script>

<div class="header">
  <div class="top">

    <h2>Bảng điểm</h2>
    <h2><?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
          extract($_SESSION['user']);

        ?>

        <?= $ho_ten ?>
  </div>

<?php }
?> </h2>
</div>
</div>
<div class="  tablee  " style="margin-left: 175px;">
  <table>
    <tr>

    
      </th>
      <th>Môn thi</th>
      <th>Tên Đề thi</th>
      <th>Thời gian làm bài</th>
      <th>Điểm</th><br>

    </tr>

    <?php
    if (is_array($loadbangdiem)) {
      foreach ($loadbangdiem as $bangdiem) {
        extract($bangdiem);
        echo '
           <tr>
                
                    
                    <td> ' . $tenmon . '</td>
                    <td> ' . $tende . '</td>
                    <td> ' . $thoigian . '</td>
                    <td> ' . $diemthi . '</td>
                    </tr>
                    
                    ';
      }
    }
    ?>


  </table>

</div>