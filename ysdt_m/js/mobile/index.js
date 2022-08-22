var duo1slide = new Swiper('.duo_1 .swiper', {
    slidesPerView: 1.2,
    spaceBetween: 20,
});
var duo2slide = new Swiper('.duo_2 .swiper', {
    slidesPerView: 1.2,
    spaceBetween: 10,
});

//menu
$('.icon_menu').click(function(e) {
    e.preventDefault();
    $('.md_nav_menu').stop(true,false).toggleClass("active");
    $(".body_container").toggleClass("fixed");
    $("body").toggleClass("o_hidden");
    return false;
});


// 折價券slider
var cupnslide = new Swiper('.cupn_slide.swiper', {
    slidesPerView: '1.2',
    spaceBetween: 10,
    grid: {
        rows: 2,
        fill: 'row',
    },
    breakpoints: {
        430: {
            slidesPerView: 1.2,
        },
        510: {
            slidesPerView: 1.5,
        },
        600: {
            slidesPerView: 1.8,
        },
        700: {
            slidesPerView: 2,
        },
        790: {
            slidesPerView: 2.2,
        }
    }
});
// 特賣主題 slider
var specslide = new Swiper('.spec_slide', {
    slidesPerView: 1.25,
    spaceBetween: 10,
});

$(".site-header .icon_search").click(function(){
    $(".site-search").toggle();
});

$(".site-header .btn-cancel").click(function(){
    $(this).parents("div").find(".input-search").val("");
});