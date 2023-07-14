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

$diem10h = 0;
$diem9h = 0;
$diem8h = 0;
$diem7h = 0;
$diem6h = 0;
$diem5h = 0;
$diem4h = 0;
$diem3h = 0;
$diem2h = 0;
$diem1h = 0;


$diem10l = 0;
$diem9l = 0;
$diem8l = 0;
$diem7l = 0;
$diem6l = 0;
$diem5l = 0;
$diem4l = 0;
$diem3l = 0;
$diem2l = 0;
$diem1l = 0;

$diem10s = 0;
$diem9s = 0;
$diem8s = 0;
$diem7s = 0;
$diem6s = 0;
$diem5s = 0;
$diem4s = 0;
$diem3s = 0;
$diem2s = 0;
$diem1s = 0;

$diem10a = 0;
$diem9a = 0;
$diem8a = 0;
$diem7a = 0;
$diem6a = 0;
$diem5a = 0;
$diem4a = 0;
$diem3a = 0;
$diem2a = 0;
$diem1a  = 0;
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
  }
foreach ($loaddiemhoa as $k => $v)
  //extract($diem);

  if ($v['diemthi'] > 9 &  $v['diemthi'] <= 10) {
    $diem10h = $diem10h + 1;
  } else if ($v['diemthi'] > 8  &  $v['diemthi'] <= 9) {
    $diem9h = $diem9h + 1;
  } else if ($v['diemthi'] > 7  &  $v['diemthi'] <= 8) {
    $diem8h = $diem8h + 1;
  } else if ($v['diemthi'] > 6  &  $v['diemthi'] <= 7) {
    $diem7h = $diem7h + 1;
  } else if ($v['diemthi'] > 5  &  $v['diemthi'] <= 6) {
    $diem6h = $diem6h + 1;
  } else if ($v['diemthi'] > 4 &  $v['diemthi'] <= 5) {
    $diem5h = $diem5h + 1;
  } else if ($v['diemthi'] > 3  &  $v['diemthi'] <= 4) {
    $diem4h = $diem4h + 1;
  } else if ($v['diemthi'] > 2  &  $v['diemthi'] <= 3) {
    $diem3h = $diem3h + 1;
  } else if ($v['diemthi'] > 1  &  $v['diemthi'] <= 2) {
    $diem2h = $diem2h + 1;
  } else if ($v['diemthi'] > 0  &  $v['diemthi'] <= 1) {
    $diem1h = $diem1h + 1;
  }
foreach ($loaddiemly as $k => $v)
  //extract($diem);

  if ($v['diemthi'] > 9 &  $v['diemthi'] <= 10) {
    $diem10l = $diem10l + 1;
  } else if ($v['diemthi'] > 8  &  $v['diemthi'] <= 9) {
    $diem9l = $diem9l + 1;
  } else if ($v['diemthi'] > 7  &  $v['diemthi'] <= 8) {
    $diem8l = $diem8l + 1;
  } else if ($v['diemthi'] > 6  &  $v['diemthi'] <= 7) {
    $diem7l = $diem7l + 1;
  } else if ($v['diemthi'] > 5  &  $v['diemthi'] <= 6) {
    $diem6l = $diem6l + 1;
  } else if ($v['diemthi'] > 4 &  $v['diemthi'] <= 5) {
    $diem5l = $diem5l + 1;
  } else if ($v['diemthi'] > 3  &  $v['diemthi'] <= 4) {
    $diem4l = $diem4l + 1;
  } else if ($v['diemthi'] > 2  &  $v['diemthi'] <= 3) {
    $diem3l = $diem3l + 1;
  } else if ($v['diemthi'] > 1  &  $v['diemthi'] <= 2) {
    $diem2l = $diem2l + 1;
  } else if ($v['diemthi'] > 0  &  $v['diemthi'] <= 1) {
    $diem1l = $diem1l + 1;
  }
foreach ($loaddiemsinh as $k => $v)
  //extract($diem);

  if ($v['diemthi'] > 9 &  $v['diemthi'] <= 10) {
    $diem10s = $diem10s + 1;
  } else if ($v['diemthi'] > 8  &  $v['diemthi'] <= 9) {
    $diem9s = $diem9s + 1;
  } else if ($v['diemthi'] > 7  &  $v['diemthi'] <= 8) {
    $diem8s = $diem8s + 1;
  } else if ($v['diemthi'] > 6  &  $v['diemthi'] <= 7) {
    $diem7s = $diem7s + 1;
  } else if ($v['diemthi'] > 5  &  $v['diemthi'] <= 6) {
    $diem6s = $diem6s + 1;
  } else if ($v['diemthi'] > 4 &  $v['diemthi'] <= 5) {
    $diem5s = $diem5s + 1;
  } else if ($v['diemthi'] > 3  &  $v['diemthi'] <= 4) {
    $diem4s = $diem4s + 1;
  } else if ($v['diemthi'] > 2  &  $v['diemthi'] <= 3) {
    $diem3s = $diem3s + 1;
  } else if ($v['diemthi'] > 1  &  $v['diemthi'] <= 2) {
    $diem2s = $diem2s + 1;
  } else if ($v['diemthi'] > 0  &  $v['diemthi'] <= 1) {
    $diem1s = $diem1s + 1;
  }
foreach ($loaddiemanh as $k => $v)
  //extract($diem);

  if ($v['diemthi'] > 9 &  $v['diemthi'] <= 10) {
    $diem10a = $diem10a + 1;
  } else if ($v['diemthi'] > 8  &  $v['diemthi'] <= 9) {
    $diem9a = $diem9a + 1;
  } else if ($v['diemthi'] > 7  &  $v['diemthi'] <= 8) {
    $diem8a = $diem8a + 1;
  } else if ($v['diemthi'] > 6  &  $v['diemthi'] <= 7) {
    $diem7a = $diem7a + 1;
  } else if ($v['diemthi'] > 5  &  $v['diemthi'] <= 6) {
    $diem6a = $diem6a + 1;
  } else if ($v['diemthi'] > 4 &  $v['diemthi'] <= 5) {
    $diem5a = $diem5a + 1;
  } else if ($v['diemthi'] > 3  &  $v['diemthi'] <= 4) {
    $diem4a = $diem4a + 1;
  } else if ($v['diemthi'] > 2  &  $v['diemthi'] <= 3) {
    $diem3a = $diem3a + 1;
  } else if ($v['diemthi'] > 1  &  $v['diemthi'] <= 2) {
    $diem2a = $diem2a + 1;
  } else if ($v['diemthi'] > 0  &  $v['diemthi'] <= 1) {
    $diem1a = $diem1a + 1;
  }




?>
<div style="width: 1000px;">
 <div style="width: 80%;"> <canvas  id="myChart"></canvas></div>
  <div style=" width: 30%; margin-left: 1000px;">
  <h4>Những Học sinh cao điểm nhất</h4>
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

<div style="width: 800px;">
  <canvas id="myCharte"></canvas>
</div>
<div style=" width: 30%;margin-left: 1000px;">
 <table>
    <tr>
      <th>Tên học Sinh</th>
      <th>Điểm thi</th>
    </tr>
    <?php

    foreach ($topdiemly as $toan) {
      extract($toan);
      echo '
      <tr>
        <td>' . $ho_ten . '</td>
        <td>' . $diemthi . '</td>
      </tr>';
    } ?>
  </table>
 </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script>
  const ctxe = document.getElementById('myCharte');

  new Chart(ctxe, {
    type: 'bar',
    data: {
      labels: ['0->1', '1->2', '2->3', '3->4', '4->5', '5->6', '6->7', '7->8', '8->9', '9->10', ],
      datasets: [{
        label: 'Điểm Vật Lý',
        data: [<?= $diem1l ?>, <?= $diem2l ?>, <?= $diem3l ?>, <?= $diem4l ?>, <?= $diem5l ?>, <?= $diem6l ?>, <?= $diem7l ?>, <?= $diem8l ?>, <?= $diem9l ?>, <?= $diem10l ?>, ],
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
<div style="width: 800px;">
  <canvas id="myChartee"></canvas>
</div>
<div style=" width: 30%;margin-left: 1000px;">
 <table>
    <tr>
      <th>Tên học Sinh</th>
      <th>Điểm thi</th>
    </tr>
    <?php

    foreach ($topdiemhoa as $toan) {
      extract($toan);
      echo '
      <tr>
        <td>' . $ho_ten . '</td>
        <td>' . $diemthi . '</td>
      </tr>';
    } ?>
  </table>
 </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script>
  const ctxee = document.getElementById('myChartee');

  new Chart(ctxee, {
    type: 'bar',
    data: {
      labels: ['0->1', '1->2', '2->3', '3->4', '4->5', '5->6', '6->7', '7->8', '8->9', '9->10', ],
      datasets: [{
        label: 'Điểm Hóa Học',
        data: [<?= $diem1h ?>, <?= $diem2h ?>, <?= $diem3h ?>, <?= $diem4h ?>, <?= $diem5h ?>, <?= $diem6h ?>, <?= $diem7h ?>, <?= $diem8h ?>, <?= $diem9h ?>, <?= $diem10h ?>],
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
<div style="width: 800px;">
  <canvas id="myChartex"></canvas>
</div>
<div style=" width: 30%;margin-left: 1000px;">
 <table>
    <tr>
      <th>Tên học Sinh</th>
      <th>Điểm thi</th>
    </tr>
    <?php

    foreach ($topdiemsinh as $toan) {
      extract($toan);
      echo '
      <tr>
        <td>' . $ho_ten . '</td>
        <td>' . $diemthi . '</td>
      </tr>';
    } ?>
  </table>
 </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script>
  const ctxex = document.getElementById('myChartex');

  new Chart(ctxex, {
    type: 'bar',
    data: {
      labels: ['0->1', '1->2', '2->3', '3->4', '4->5', '5->6', '6->7', '7->8', '8->9', '9->10', ],
      datasets: [{
        label: 'Điểm Sinh Học ',
        data: [<?= $diem1s ?>, <?= $diem2s ?>, <?= $diem3s ?>, <?= $diem4s ?>, <?= $diem5s ?>, <?= $diem6s ?>, <?= $diem7s ?>, <?= $diem8s ?>, <?= $diem9s ?>, <?= $diem10s ?>],
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
<div style="width: 800px;">
  <canvas id="myChartexx"></canvas>
</div>
<div style=" width: 30%;margin-left: 1000px;">
 <table>
    <tr>
      <th>Tên học Sinh</th>
      <th>Điểm thi</th>
    </tr>
    <?php

    foreach ($topdiemanh as $toan) {
      extract($toan);
      echo '
      <tr>
        <td>' . $ho_ten . '</td>
        <td>' . $diemthi . '</td>
      </tr>';
    } ?>
  </table>
 </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script>
  const ctxexx = document.getElementById('myChartexx');

  new Chart(ctxexx, {
    type: 'bar',
    data: {
      labels: ['0->1', '1->2', '2->3', '3->4', '4->5', '5->6', '6->7', '7->8', '8->9', '9->10', ],
      datasets: [{
        label: 'Điểm TIếng Anh',
        data: [<?= $diem1a ?>, <?= $diem2a ?>, <?= $diem3a ?>, <?= $diem4a ?>, <?= $diem5a ?>, <?= $diem6a ?>, <?= $diem7a ?>, <?= $diem8a ?>, <?= $diem9a ?>, <?= $diem10a ?>, ],
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