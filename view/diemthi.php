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
    <div>
        <h1>Môn toán</h1>
    </div>
    <div>
        <h2>Kết Quả làm bài :<?php echo $tende ;?></h2>
    </div>
    <div>
        <h3>Thời gian làm bài <?php echo $thoigian ?> phút </h3>
        <h3 style="color=:reen">Điểm: <?php
                    echo $diem;
                    ?></h3>
    </div>
</div>
<?php
foreach ($loadcauhoi as $k => $listch) {
     

    extract($listch);
    $checkedA = '';
    $checkedB = '';
    $checkedC = '';
    $checkedD = '';
    $style1 = '';
    $style2 = '';
    $style3 = '';
    $style4 = '';

    $style1d = '';
    $style2d = '';
    $style3d = '';
    $style4d = '';

    if($listch['dapan'] == 'dapanA'){
        $style1d = 'color=green';
    }
    if($listch['dapan'] == 'dapanB'){
        $style2d = 'color=green';
    }
    if($listch['dapan'] == 'dapanC'){
        $style3d = 'color=green';
    }
    if($listch['dapan'] == 'dapanD'){
        $style4d = 'color=green';
    }


    if ($data[$k] == 'dapanA') {
        $checkedA = 'checked';
        if(in_array('',$arr)){
            $style1 = 'color=green';
        } else {
            $style1 = 'color=red';
        }
    }
    if ($data[$k] == 'dapanB') {
        $checkedB = 'checked';
        if(in_array('',$arr)){
            $style2= 'color=green';
        } else {
            $style2 = 'color=red';
        }
    }
    if ($data[$k] == 'dapanC') {
        $checkedC = 'checked';
        if(in_array('',$arr)){
            $style3 = 'color=green';
        } else {
            $style3 = 'color=red';
        }
    }
    if ($data[$k] == 'dapanD') {
        $checkedD = 'checked';
        if(in_array('',$arr)){
            $style4 = 'color=green';
        } else {
            $style4 = 'color=red';
        }
    }

    echo '
    
<h3 id ="' . $id_cauhoi . '"><span>Câu ' . $thutucau . ': ' . $cauhoi . ' </span></h3>
<div class="answer">
<fieldset id="group' . $thutucau . '"> 
    
     <label > <b><font ' . $style1 .$style1d. '> <input type="radio" ' . $checkedA . ' value="dapanA" name="' . $k . '"><b></b>' . $dapanA . '</label></font></b><br>

     <label ><b><font ' . $style2 . $style2d.'> <input type="radio" ' . $checkedB . ' value="dapanB" name="' . $k . '"><b></b>' . $dapanB . '</label></font></b></label> <br>
 
     <label ><b><font ' . $style3 . $style3d.'> <input type="radio" ' . $checkedC . ' value="dapanC" name="' . $k . '"><b></b>' . $dapanC . '</label></font></b></label> <br>
   
     <label ><b><font ' . $style4 . $style4d.'> <input type="radio" ' . $checkedD . ' value="dapanD" name="' . $k . '"><b></b>' . $dapanD . '</label></font></b></label> <br>
  
    
</fieldset>

</div>  






';
}


?>