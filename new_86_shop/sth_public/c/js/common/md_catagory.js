//infinite scroll
var infiniteItems = $('.infinite-scroll .items');
var infiniteNav = $('.infinite-next-page');
infiniteItems.infinitescroll({
    loading: {
        img: '../c/img/sth_asap_m/loading.svg',
        msgText: '<em>' + infiniteNav.data('loading-msg') + '</em>',
        finishedMsg: '<em class=\"infinite-finished-msg\">' + infiniteNav.data('finished-msg') + '</em>'
    },
    navSelector: infiniteNav, //必要
    nextSelector: infiniteNav, //必要
    itemSelector: '.infinite-scroll .md-list-item' //必要
}, function() {
    $('.img-lazyload').unveil(200, function() {
        $(this).load(function() {
            this.style.opacity = 1;
        });
    });
});
////click to load
// infiniteItems.infinitescroll('unbind');
// infiniteNav.click(function() {
//     infiniteItems.infinitescroll('retrieve');
//     return false;
// });

//toggle filter
$('.btn-toggle-filter').on('click', function() {
    $(this).toggleClass('is-active');
    $('.site-filter').toggleClass('is-expand');
});

//toggle breadcrumbs
toggleBreadcrumbs();
function toggleBreadcrumbs() {
    var lastScrollTop = 0;
    var heightHeader = $('.site-header').height();
    $(window).scroll(function(event) {
        //when page go top, fixed breadcrumbs
        if ($(this).scrollTop() > heightHeader) {
            $('.md_nav_breadcrumbs').addClass('is-fixed');
        }
        else {
            $('.md_nav_breadcrumbs').removeClass('is-fixed');
        }
        var current = $(this).scrollTop();
        if (current > lastScrollTop) {
            //scroll down and fixed breadcrumbs
            if (current >= heightHeader) {
                $('.md_nav_breadcrumbs').addClass('is-fixed');
            }
        }
        else {
            //scroll up and unfixed breadcrumbs
            $('.md_nav_breadcrumbs').removeClass('is-fixed');
        }
        lastScrollTop = current;
    });
}

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

md_category_slidemenu();
function md_category_slidemenu(){
    var swiper2 = new Swiper('.topmenu .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    $(window).resize(function() {
        swiper.reInit();
    });
}

md_category_hotsale();
function md_category_hotsale(){
    var swiper3 = new Swiper('.md_index_023 .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    $(window).resize(function() {
        swiper.reInit();
    });
}

md_category_hotbrand();
function md_category_hotbrand(){
    var swiper4 = new Swiper('.md_category_003 .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    $(window).resize(function() {
        swiper.reInit();
    });
}
