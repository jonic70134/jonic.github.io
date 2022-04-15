// 熱賣特選 slider
var perslide = new Swiper('.hot_cho .per_r', {
    slidesPerView: 4,
    spaceBetween: 0,
    navigation: {
        nextEl: ".hot_cho .swiper-button-next",
        prevEl: ".hot_cho .swiper-button-prev",
    },
});
// 夯品推薦 slider
var recslide = new Swiper('.hot_rec .per_r', {
    slidesPerView: 3.69,
    grid: {
        rows: 2,
    },
    navigation: {
        nextEl: ".hot_rec .swiper-button-next",
        prevEl: ".hot_rec .swiper-button-prev",
    },
});

// 特賣主題 slider
var specslide = new Swiper('.spec_slide', {
    slidesPerView: 3,
    spaceBetween: 25,
    navigation: {
        nextEl: ".spec_prod .swiper-button-next",
        prevEl: ".spec_prod .swiper-button-prev",
      },
});

// 個人禮券slider
var cupnslide = new Swiper('.cupn_slide', {
    slidesPerView: 3.6,
    spaceBetween: 15,
    navigation: {
        nextEl: ".cupn .swiper-button-next",
        prevEl: ".cupn .swiper-button-prev",
      },
});


// 智慧分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});

$('.btn-load').click(function () {
    var $brandList= $(this).closest('.brandlist');
    var x= parseInt($brandList.attr('data-brand'),10);
    var itemSize=$brandList.find('.items .item').size();        
    x = (x + 10 <= itemSize) ? x + 10 : itemSize;
    $brandList.attr('data-brand',x)
    $brandList.find('.items .item:lt(' + x + ')').slideDown();
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
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});