md_site_sliders();
function md_site_sliders(){
    var swiper = new Swiper('.swiper-container',{
        pagination: '.swiper-pagination',
        autoplay: 9000,
        speed: 500,
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        paginationClickable: true,
        autoplayDisableOnInteraction: false,
        preloadImages: false,
        lazyLoading: true
    })
    $(window).resize(function() {
        swiper.reInit();
    });
}