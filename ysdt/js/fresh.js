var swiper = new Swiper('.per .swiper-container', {
    slidesPerView: 3.7,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },
    navigation: {
        nextEl: ".per .swiper-button-next",
        prevEl: ".per .swiper-button-prev",
    },
});

// 智慧分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});

// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});



