<div class="banner">
<div class="">
                <div class="">
                    <!-- Full-width images with number and caption text -->
                    <?php foreach ($slider as $key => $value) { ?>
                    <div class="mySlides  fade">
                        <img class=""  src="content/img/<?php echo $value['tieude'] ?>">
                    </div>
                    <?php } ?>
                    <!-- Next and previous buttons -->
                    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                </div>
            </div>

            <script>
        let slideIndex = 0;
        showSlides();
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2500); 
        }
    </script>
    

<div class="header">
  <div class="top">
    <img src="content/image/Group.png" alt="">
    <h3>NỀN TẢNG ÔN TẬP DÀNH CHO HỌC SINH</h3>
  </div>
  <div class="below">

  </div>
</div>

<div class="product1"><i class="fa-duotone fa-calculator-simple"></i>
  <button>Toán Học</button>
  
  <div class="flex">
 
  <?php
foreach($load_home_toan as $detoan){
  extract($detoan);
  $hinh= $img_path.$img;
  $linkde="index.php?act=lamde&idbai=".$id_de; 
 
  echo '
  <div class="name">
  <img href="'.$linkde.'" src="'.$hinh.'" alt="" width="300px" height="300px">
  <a href="'.$linkde.'"> <h1>'.$tende.'</h1></a>
   
    <p>Thời gian: <strong>'.$thoigian.'</strong> </p>
    <p>Số câu: <strong>'.$socau.'</strong></p>
  </div>';
}
  ?>
  </div>
</div>
<div class="product1"><i class="fa-duotone fa-calculator-simple"></i>
  <button>Hóa học</button>
  <div class="flex">
   
  <?php
foreach($load_home_hoa as $dehoa){
  extract($dehoa);
  $hinh= $img_path.$img;
  $linkde="index.php?act=lamde&idbai=".$id_de; 
 
  echo '
  <div class="name">
  <img src="'.$hinh.'" alt="" width="300px" height="300px">
  <a href="'.$linkde.'"> <h1>'.$tende.'</h1></a>
   
    <p>Thời gian: <strong>'.$thoigian.'</strong> </p>
    <p>Số câu: <strong>'.$socau.'</strong></p>
  </div>';
}
  ?>
  </div>
</div>
<div class="product1"><i class="fa-duotone fa-calculator-simple"></i>
  <button>Vật lý</button>
  <div class="flex">
  <?php
foreach($load_home_ly as $dely){
  extract($dely);
  $hinh= $img_path.$img;
  $linkde="index.php?act=lamde&idbai=".$id_de; 
 
  echo '
  <div class="name">
  <img src="'.$hinh.'" alt="" width="300px" height="300px">
  <a href="'.$linkde.'"> <h1>'.$tende.'</h1></a>
   
    <p>Thời gian: <strong>'.$thoigian.'</strong> </p>
    <p>Số câu: <strong>'.$socau.'</strong></p>
  </div>';
}
  ?>
  </div>
</div>


<div class="category">
  <h1>Trắc Nghiệm Thông Minh</h1>
</div>
<div class="note">
  <div class="click">
    <img src="content/image/18.jpg" alt="">
    <h3>ĐA DẠNG NỘI DUNG</h3>
  </div>
  <div class="click">
    <img src="content/image/16.png" alt="">
    <h3>MA TRẬN CÂU HỎI</h3>

  </div>
  <div class="click">
    <img src="content/image/tieng-nhat-trung-cap-1.png" alt="">
    <h3>ĐÁP ÁN CHUẨN XÁC</h3>
  </div>
</div>