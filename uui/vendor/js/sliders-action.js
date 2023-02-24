md_kv_slider();
function md_kv_slider(){
    var swiper = new Swiper('.md-kv-slider .swiper-container',{
        autoplay: 9000,
        speed: 500,
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        paginationClickable: true,
        autoplayDisableOnInteraction: false
    })
    $(window).resize(function() {
        swiper.reInit();
    });
}

md_item_slider();
function md_item_slider(){
    var swiper2 = new Swiper('.md-item-slider .swiper-container',{
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        autoplayDisableOnInteraction: false
    })
    $(window).resize(function() {
        swiper2.reInit();
    });
}