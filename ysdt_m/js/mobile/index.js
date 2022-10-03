// var duo1slide = new Swiper('.duo_1 .swiper', {
//     slidesPerView: 'auto',
//     spaceBetween: 10,
// });
// var duo2slide = new Swiper('.duo_2 .swiper', {
//     slidesPerView: 'auto',
//     spaceBetween: 10,
// });

//menu
$('.icon_menu').click(function(e) {
    e.preventDefault();
    $('.menu').stop(true,false).toggleClass("active");
    $(".body_container").toggleClass("fixed");
    $("body").toggleClass("o_hidden");
    return false;
});


// 折價券slider
// var cupnslide = new Swiper('.cupn_slide.swiper', {
//     slidesPerView: 'auto',
//     spaceBetween: 10,
//     grid: {
//         rows: 2,
//         fill: 'row',
//     },
    
// });
// 特賣主題 slider
// var specslide = new Swiper('.spec_slide', {
//     slidesPerView: 1.2,
//     spaceBetween: 10,
// });

// // 熱搜 slider
// var hotslide = new Swiper('.hot_slide', {
//     slidesPerView: 5,
//     spaceBetween: 10,
//     grid: {
//         rows: 1,
//         fill: 'row',
//     },
// });

$(".site-header .icon_search").click(function(){
    $(".site-search").toggle();
});

$(".site-header .btn-cancel").click(function(){
    $(this).parents("div").find(".input-search").val("");
});