<style>
  .list {
    column-gap: 5px;
    text-align: center;
  }

  .listPage {
    padding: 5px;
    text-align: center;
    list-style: none;
  }

  .listPage li {
    background-color: #ffffffBD;
    padding: 10px;
    display: inline-block;
    margin: 0 10px;
    cursor: pointer;
  }

  .listPage .active {
    background-color: #B192EF;
    color: #fff;
  }
</style>
<div class="css_moi">
  <div class="row">
    <div class="row tieude_user">
      <h1>Danh sách câu hỏi</h1>
    </div>
    <div class="row">

      <div class="  tablee ">
        <table>
          <tr>
            <th></th>
            <th>Tên câu Hỏi</th>
            <th>Mã câu hỏi</th>
            <th>ĐÁp Án A</th>
            <th>ĐÁp Án B</th>
            <th>ĐÁp Án C</th>
            <th>ĐÁp Án D</th>
            <th>ĐÁp Án Đúng</th>
            <th>Điểm </th>
            <th>Khác</th>
          </tr>
          <?php
          foreach ($load_ch as $ch) {
            extract($ch);
            $xoach = "index.php?act=xoacauhoi&id_cauhoi=" . $id_cauhoi;
            $suach = "index.php?act=suach&id_cauhoi=" . $id_cauhoi;
            echo ' <div class="list">
                                  <div class="item"><tr><td><input type="checkbox" name="" id=""></td>
           
            <td>' . $cauhoi . '</td>
            <td>' . $id_cauhoi . '</td>
            <td>' . $dapanA . '</td>
            <td>' . $dapanB . '</td>
            <td>' . $dapanC . '</td>
            <td>' . $dapanD . '</td>
            <td>' . $dapan . '</td>
            <td>' . $diem . '</td>
            
            <td class="delete"><a href="' . $xoach . '"><input type="button" value="Xóa"></a> <a href="' . $suach . '"><input type="button" value="Sửa"></a></td></tr> </div>
               
            </div> 
               ';
          }
          ?>




        </table>

        <ul class="listPage">

        </ul>

      </div>

      <div class="  row">
        <input type="button" value="Chọn tất cả" id="btn1">
        <input type="button" value="Bỏ chọn tất cả" id="btn2">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=cauhoi"><input type="button" value="Nhập thêm"></a>


        </body>

        </html>
      </div>

    </div>
  </div>

  <?php
  $diem10t = 0;
  $diem9t = 0;
  $diem8t = 0;
  $diem7t = 0;
  $diem6t = 0;
  $diem5t = 0;
  $diem4t = 0;
  $diem3t = 0;
  $diem2t = 0;
  $diem1t = 0;
  foreach ($loaddiemtoan as $k => $v)
    //extract($diem);
          
    if ($v['diemthi'] > 9 &  $v['diemthi'] <= 10) {
      $diem10t = $diem10t + 1;
    } else if ($v['diemthi'] > 8  &  $v['diemthi'] <= 9) {
      $diem9t = $diem9t + 1;
    } else if ($v['diemthi'] > 7  &  $v['diemthi'] <= 8) {
      $diem8t = $diem8t + 1;
    } else if ($v['diemthi'] > 6  &  $v['diemthi'] <= 7) {
      $diem7t = $diem7t + 1;
    } else if ($v['diemthi'] > 5  &  $v['diemthi'] <= 6) {
      $diem6t = $diem6t + 1;
    } else if ($v['diemthi'] > 4 &  $v['diemthi'] <= 5) {
      $diem5t = $diem5t + 1;
    } else if ($v['diemthi'] > 3  &  $v['diemthi'] <= 4) {
      $diem4t = $diem4t + 1;
    } else if ($v['diemthi'] > 2  &  $v['diemthi'] <= 3) {
      $diem3t = $diem3t + 1;
    } else if ($v['diemthi'] > 1  &  $v['diemthi'] <= 2) {
      $diem2t = $diem2t + 1;
    } else if ($v['diemthi'] > 0  &  $v['diemthi'] <= 1) {
      $diem1t = $diem1t + 1;
    } ?>
  <div style="width: 1000px;">
    <div style="width: 80%;"> <canvas id="myChart"></canvas></div>
    <div style=" width: 30%; margin-left: 1000px;">
      <table>
        <tr>
          <th>Tên học Sinh</th>
          <th>Điểm thi</th>
        </tr>
        <?php

        foreach ($topdiemtoan as $toan) {
          extract($toan);
          echo '
      <tr>
        <td>' . $ho_ten . '</td>
        <td>' . $diemthi . '</td>
      </tr>';
        } ?>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['0->1', '1->2', '2->3', '3->4', '4->5', '5->6', '6->7', '7->8', '8->9', '9->10', ],
        datasets: [{
          label: 'Điểm Toán ',
          data: [<?= $diem1t ?>, <?= $diem2t ?>, <?= $diem3t ?>, <?= $diem4t ?>, <?= $diem5t ?>, <?= $diem6t ?>, <?= $diem7t ?>, <?= $diem8t ?>, <?= $diem9t ?>, <?= $diem10t ?>],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>









  <script>
    let thisPage = 2;
    let limit = 1;
    let list = document.querySelectorAll('.list .item');

    function loadItem() {
      let beginGet = limit * (thisPage - 1);
      let endGet = limit * thisPage - 1;
      list.forEach((item, key) => {
        if (key >= beginGet && key <= endGet) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      })
      listPage();
    }
    loadItem();

    function listPage() {
      let count = Math.ceil(list.length / limit);
      document.querySelector('.listPage').innerHTML = '';

      if (thisPage != 1) {
        let prev = document.createElement('li');
        prev.innerText = 'PREV';
        prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
        document.querySelector('.listPage').appendChild(prev);
      }

      for (i = 1; i <= count; i++) {
        let newPage = document.createElement('li');
        newPage.innerText = i;
        if (i == thisPage) {
          newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        document.querySelector('.listPage').appendChild(newPage);
      }

      if (thisPage != count) {
        let next = document.createElement('li');
        next.innerText = 'NEXT';
        next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
        document.querySelector('.listPage').appendChild(next);
      }
    }

    function changePage(i) {
      thisPage = i;
      loadItem();
    }
  </script>