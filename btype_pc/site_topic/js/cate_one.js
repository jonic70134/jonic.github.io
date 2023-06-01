// cate one slider
var duo1slide = new Swiper('.duo_1 .per_r', {
    slidesPerView: 1,
    spaceBetween: 40,
    loop:true,
    navigation: {
        nextEl: ".duo_1 .swiper-button-next",
        prevEl: ".duo_1 .swiper-button-prev",
    },
});

//活動 tab 切換
$('.cho_tab').click(function(){
    var cho_tab_id = $(this).attr('data-chotab');
    $('.cho_tab').removeClass('active');
    $('.cho_info').removeClass('active');
    $(this).addClass('active');
    $("#"+cho_tab_id).addClass('active');
});
// 瀑布流
var masonry = new Macy({
    container: '.items',
    trueOrder: false,
    waitForImages: false,
    useOwnImageLoader: false,
    debug: true,
    mobileFirst: true,
    columns: 5,
    margin: {
        y: 10,
        x: 20,
    },
});
// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});