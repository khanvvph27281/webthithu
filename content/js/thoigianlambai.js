

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
m = parseInt(60);
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