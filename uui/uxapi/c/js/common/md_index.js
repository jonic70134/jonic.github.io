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