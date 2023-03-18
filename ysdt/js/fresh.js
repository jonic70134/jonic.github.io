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
// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});



