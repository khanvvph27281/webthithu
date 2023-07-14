<style>
  .list {
    column-gap: 5px;

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
<div class="header1">
  <img src="/image/Vector (1).png" alt="">

</div>
<hr>
<div class="end2">

  <h2><?php
      if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);

      ?>

      <div style="margin-left: 500px;"> Người làm bài :<?= $ho_ten ?></div>
</div>

<?php }
?> </h2>
<h2 style="margin-left: 500px;">Đề thi :<?php echo $tende ?></h2>

<input  style=" margin-left: 750px; background-color: #5489eb;width: 100px;height: 40px;" type="button" id="start" value="Bắt Đầu Làm" onclick="start() ;return confirm('Thời gian làm bài sẽ bắt đầu tính. Khi thời gian làm bài còn 2 phút, đồng hồ sẽ chuyển sang màu đỏ. Bạn nên chọn câu trả lời cho các câu hỏi còn lại, và nộp bài. Sau khi hết thời gian bạn không thể thay đổi câu trả lời. Kết quả sẽ xuất hiện sau khi bạn ấn Nộp Bài.')" />
</div>





</strong></a></li>
</ul>
</div>
<!--câu hỏi-->
<div class="d-none" id="myDIV">
  <div class="artical slideshow-container">
    <div class="trai" style=" float:left;width: 70%;">
    <?php
        $url = "index.php?act=diemthi&idde=".$_GET['idbai'];
      ?> 
      <form method="post" action="<?php echo $url; ?>">
        <!--1-->

        <?php
        foreach ($listcauhoi as $k => $listch) {
          extract($listch);
          echo '
          
    <div class="list">
    <div class=""> <div class="content item" id="' . $thutucau . '">
     <div class="title" style="height:82px; background-color: #c8f5ca;">
      <h3 id ="' . $id_cauhoi . '" style=" margin-left: 10px;
      margin-right: 10px;margin-top: 10px;"><span style="color: rgb(0, 110, 16)"> Câu ' . $thutucau . ':' . $cauhoi . ' </span></h3>
      </div>
       <div class="answer">


     <label  style="   background-color: rgb(218, 215, 215);border:5px;border-radius: 4px;display: inline-block;transition: background-color 0.6s ease;height: 35px; width: 1020px; margin-left: 10px; margin-right: 10px;margin-top: 8px;"> <input checked type="radio" value="dapanA" name="' . $k . '"><b></b>' . $dapanA . '</label> <br>
     <label style="   background-color: rgb(218, 215, 215);border:5px;border-radius: 4px;display: inline-block;transition: background-color 0.6s ease;height: 35px; width: 1020px; margin-left: 10px; margin-right: 10px;margin-top: 8px;" > <input type="radio" value="dapanB" name="' . $k . '"><b></b>' . $dapanB . '</label> <br>
     <label style="   background-color: rgb(218, 215, 215);border:5px;border-radius: 4px;display: inline-block;transition: background-color 0.6s ease;height: 35px; width: 1020px; margin-left: 10px; margin-right: 10px;margin-top: 8px;" > <input type="radio" value="dapanC" name="' . $k . '"><b></b>' . $dapanC . '</label> <br>
     <label style="  background-color: rgb(218, 215, 215);border:5px;border-radius: 4px;display: inline-block;transition: background-color 0.6s ease;height: 35px; width: 1020px; margin-left: 10px; margin-right: 10px;margin-top: 8px;margin-bottom:9px;" > <input type="radio" value="dapanD" name="' . $k . '"><b></b>' . $dapanD . '</label> <br>




  </div>
   </div>


   </div> </div>
         ';
        }

        ?>


        <?php echo ' <input type="hidden" name ="id_de" value="' . $_GET['idbai'] . '" >
      
       <input style="float:right;margin-top: 55px;width: 60px;height: 40px; background-color: khaki;"  type="button" value="Nộp Bài "  id="ketthuc">'; ?>



      </form>





    </div>

    <div class="phai" style="margin-right: 2%;width: 25%;float:right;">
      <div class="comment">
        <ul>

          <li><a href="">Time: <strong>


                <span id="h">Giờ</span> :
                <span id="m">Phút</span> :
                <span id="s">Giây</span> <br>
          <li><a href="" style="text-align: center;">Câu hỏi: </a></li><br>
          <ul class="listPage">

          </ul>


      </div>
    </div>
    

    <script language="javascript">
      let btn = document.getElementById(<?= $thutucau ?>)
      let div = document.getElementById(<?= $thutucau ?>)
      btn.addEventListener('click', () => {
        if (div.style.display == 'none') {
          div.style.display = 'block';
        } else {
          div.style.display = 'none';
        }
      })
    </script>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  </div>
</div>

</div>
<script src="../content/js/toan.js"></script>
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

  

var h = null; // Giờ
var m = null; // Phút
var s = null; // Giây

var timeout = null; // Timeout

function start()
{
    
    // Code
}

function stop(){
    clearTimeout(timeout);
}
function start()
{ 
    
   
     document.getElementById("ketthuc").setAttribute("type", "submit");
/*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
if (h === null)
{
h = parseInt(00);
m = parseInt(<?php echo $thoigian;?>);
s = parseInt(00);
}

/*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
// Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
//  - giảm số phút xuống 1 đơn vị
//  - thiết lập số giây lại 59
if (s === -1){
m -= 1;
s = 59;
}

// Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
//  - giảm số giờ xuống 1 đơn vị
//  - thiết lập số phút lại 59
if (m === -1){
h -= 1;
m = 59;
}

// Nếu số giờ = -1 tức là đã hết giờ, lúc này:
//  - Dừng chương trình
if (h == -1){
clearTimeout(timeout);
alert('Hết giờ');
return false;
}

/*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
document.getElementById('h').innerText = h.toString();
document.getElementById('m').innerText = m.toString();
document.getElementById('s').innerText = s.toString();

/*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
timeout = setTimeout(function(){
s--;
start();
var element = document.getElementById("myDIV");
element.classList.remove("d-none");

var element = document.getElementById("start");
element.classList.add("d-none");
}, 1000);
}
window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);
    
    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);
    
    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
</script>
<div class="binhluan ">
      <div class="boxtitle ta">
        <h3>Đánh giá của học sinh khi vào trang web làm bài</h3>
      </div>
      <div class="boxcomment">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluan.php", {
              id_de: <?= $id_de ?>
            });
          });
        </script>
        <div class="row " id="binhluan">


        </div>
      </div>
      <button>Bình Luận ngay</button>
    </div>
  </div>