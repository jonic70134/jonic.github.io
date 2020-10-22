md_index_001();
function md_index_001(){
    var swiper = new Swiper('.md_index_001 .swiper-container',{
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
var swiper7 = new Swiper('.md-index-coverflow .swiper-container', {
    effect: 'coverflow',
    slidesPerView: '1.1',
    // pagination: '.swiper-pagination',
    autoplay: 9000,
    speed: 500,
    spaceBetween: -24,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    calculateHeight: true,
    resizeReInit: true,
    // paginationClickable: true,
    autoplayDisableOnInteraction: false,
    preloadImages: false,
    lazyLoading: true,
    coverflowEffect: {
        rotate: 45,
        stretch: 20,
        depth: 100,
        modifier: 1,
        slideShadows: false
    }
});

md_index_002();
function md_index_002(){
    var swiper2 = new Swiper('.md_index_002 .swiper-container',{
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
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

md_index_020();
function md_index_020(){
    var swiper3 = new Swiper('.md_index_020 .swiper-container',{
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
    
}

var swiper4 = new Swiper('.md_index_023 .swiper-container',{
    loop: true,
    slidesPerView:2,
    spaceBetween: 1,

    nextButton: '.time-next',
    prevButton: '.time-prev',
});

// 影音
var swipervideo = new Swiper('.md_index_024 .swiper-container',{
    loop: true,
    spaceBetween: 1,
    nextButton: '.youtube-next',
    prevButton: '.youtube-prev',
});

var swiper6 = new Swiper('.topmenu.index .swiper-container', {
    slidesPerView: 5,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
});

var swipericom = new Swiper('.md_index_iconslide .swiper-container', {
    slidesPerView: 5,
    spaceBetween: 0,
    slidesPerGroup: 5,
    loop: true,
    loopFillGroupWithBlank: true,
    nextButton: '.icon-next',
    prevButton: '.icon-prev'
});

// function md_index_004(stickies) {
//     this.load = function() {
//     stickies.each(function(){
//         var thisSticky = jQuery(this).wrap('<div class="followWrap" />');
//             thisSticky.parent().height(thisSticky.outerHeight());
//         jQuery.data(thisSticky[0], 'pos', thisSticky.offset().top);
//     });
//     }
            
//     this.scroll = function() {
//         stickies.each(function(i){
//             var thisSticky = jQuery(this),
//                 nextSticky = stickies.eq(i+1),
//                 prevSticky = stickies.eq(i-1),
//                 pos = jQuery.data(thisSticky[0], 'pos');
//             if (pos <= jQuery(window).scrollTop()) {
//                 thisSticky.addClass("fixed");
//                 if (nextSticky.length > 0 && thisSticky.offset().top >= jQuery.data(nextSticky[0], 'pos') - thisSticky.outerHeight()) {
//                     thisSticky.addClass("absolute").css("top", jQuery.data(nextSticky[0], 'pos') - thisSticky.outerHeight());
//                 }
//             } else {
//                 thisSticky.removeClass("fixed");
//                 if (prevSticky.length > 0 && jQuery(window).scrollTop() <= jQuery.data(thisSticky[0], 'pos')  - prevSticky.outerHeight()) {
//                     prevSticky.removeClass("absolute").removeAttr("style");
//                 }
//             }
//         });         
//     }
// }
    
// jQuery(document).ready(function(){
//     var newStickies = new md_index_004(jQuery(".title-h3"));
//     newStickies.load();
//     jQuery(window).on("scroll", function() {
//     newStickies.scroll();
//     });
// });