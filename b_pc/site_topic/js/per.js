
// 個人禮券slider
var cupnslide = new Swiper('.cupn_slide', {
    slidesPerView: 3,
    slidesPerGroup: 6,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },
    navigation: {
        nextEl: ".cupn_con .swiper-button-next",
        prevEl: ".cupn_con .swiper-button-prev",
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
