// 頁首標籤slider
// var tagslide = new Swiper('.tag-slide .swiper-container', {
//     slidesPerView: 'auto',
//     spaceBetween: 10,
//     freeMode: true,
//     freeModeFluid : true,
//     grabCursor: true,

// });


// 智慧分類menu開合
$('.nav-menu > a').click(function() {
    $('.menu-one').slideToggle();
});

//搜尋按下enter觸發
$('.input-search').keypress(function(e){
    if(e.which == 13){//Enter key pressed
        alert('觸發搜尋');
    }
});


//頁首標籤slider
$(window).load(function(){
    $('.tag-slide .fa-angle-right').click(function(e) {
        var leftPos = $(".tag-slide .swiper-wrapper").scrollLeft();
        if (leftPos < $(".tag-slide .swiper-wrapper")[0].scrollWidth) {
            $(".tag-slide .swiper-wrapper").animate({scrollLeft: leftPos + 500}, 300);
        }else {
            e.preventDefault();
        }
    });
});
//拖曳滑動
const slider = document.querySelector('.tag-slide .swiper-wrapper');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mousemove', (e) => {
    if (!isDown) return; 
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 3;
    slider.scrollLeft = scrollLeft - walk;
});