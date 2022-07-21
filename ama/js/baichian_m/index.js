var galleryTop = new Swiper('.per .swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 5,
});

//menu
$('.btn-menu').click(function(e) {
    e.preventDefault();
    $('.md_nav_menu').stop(true,false).toggleClass("active");
    $(".body_container").toggleClass("fixed");
    $("body").toggleClass("o_hidden");
    return false;
});


// 個人禮券slider
var cupnslide = new Swiper('.cupn_slide.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    freeMode: true,
  });

$(".site-header .search").click(function(){
    $(".site-search").toggle();
});

$(".site-header .btn-cancel").click(function(){
    $(this).parents("div").find(".input-search").val("");
});