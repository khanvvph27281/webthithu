const themMt = document.querySelector(".ht_them");
const thuMt = document.querySelector(".thu_bot");
const hienMoTa = document.querySelector(".mo_ta");
const hienMoTaDai = document.querySelector(".mo_taDai");

let flag = 0;

themMt.addEventListener('click',function(){
   flag++;
   if(flag%2 !=0){
     hienMoTaDai.style.display = 'block';
     thuMt.style.display = 'block';
     themMt.style.display = 'none';
   }else{
     hienMoTaDai.style.display = 'none';
     thuMt.style.display = 'none';
     themMt.style.display = 'block';
   }
   flag+=1;
})

thuMt.addEventListener('click',function(){
   flag++;
   if(flag%2 !=0){
     hienMoTaDai.style.display = 'none';
     thuMt.style.display = 'none';
     themMt.style.display = 'block';
   }else{
     hienMoTaDai.style.display = 'block';
     thuMt.style.display = 'block';
     themMt.style.display = 'none';
   }
   flag+=1;
})
