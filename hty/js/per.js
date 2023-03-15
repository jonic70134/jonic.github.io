// 智慧分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});

// 個人禮券slider
var cupnslide = new Swiper('.cupn_slide', {
    slidesPerView: 3.5,
    spaceBetween: 15,
    navigation: {
        nextEl: ".cupn .swiper-button-next",
        prevEl: ".cupn .swiper-button-prev",
      },
});


// 瀑布流
var masonry = new Macy({
    container: '.items',
    trueOrder: false,
    waitForImages: false,
    useOwnImageLoader: false,
    debug: true,
    mobileFirst: true,
    columns: 6,
    margin: {
        y: 10,
        x: 20,
    },
});


// 愛心class切換	
$('.imgTrack').click(function(e){
    e.preventDefault();
    $(this).toggleClass('imgTrack imgTrackPlus');
});

// gotop
var offset = 100;
var dur = 500;

$(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
        $('.gotop').fadeIn(dur);
    } else {
        $('.gotop').fadeOut(dur);
    }
});

$('.gotop').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, dur);
    return false;
});
