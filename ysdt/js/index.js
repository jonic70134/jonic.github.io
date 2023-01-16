var duo1slide = new Swiper('.duo_1 .per_r', {
    slidesPerView: 4,
    slidesPerGroup: 8,
    spaceBetween: 20,
    grid: {
        rows: 2,
        fill: 'row',
    },
    navigation: {
        nextEl: ".duo_1 .swiper-button-next",
        prevEl: ".duo_1 .swiper-button-prev",
    },
});
var duo2slide = new Swiper('.duo_2 .per_r', {
    slidesPerView: 4,
    slidesPerGroup: 8,
    spaceBetween: 20,
    grid: {
        rows: 2,
        fill: 'row',
    },
    navigation: {
        nextEl: ".duo_2 .swiper-button-next",
        prevEl: ".duo_2 .swiper-button-prev",
    },
});

$('.cho_tab').click(function(){
    var cho_tab_id = $(this).attr('data-chotab');
    $('.cho_tab').removeClass('active');
    $('.cho_info').removeClass('active');
    $(this).addClass('active');
    $("#"+cho_tab_id).addClass('active');
});

$('.rec_tab').click(function(){
    var rec_tab_id = $(this).attr('data-rectab');
    $('.rec_tab').removeClass('active');
    $('.rec_info').removeClass('active');
    $(this).addClass('active');
    $("#"+rec_tab_id).addClass('active');
});

// 熱賣特選 slider
var perslide = new Swiper('.hot_cho .per_r', {
    slidesPerView: 4,
    spaceBetween: 20,
    navigation: {
        nextEl: ".hot_cho .swiper-button-next",
        prevEl: ".hot_cho .swiper-button-prev",
    },
});
// 夯品推薦 slider
var recslide = new Swiper('.hot_rec .per_r', {
    slidesPerView: 3.7,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },
    navigation: {
        nextEl: ".hot_rec .swiper-button-next",
        prevEl: ".hot_rec .swiper-button-prev",
    },
});

// 特賣主題 slider
var specslide = new Swiper('.spec_slide', {
    slidesPerView: 2,
    spaceBetween: 25,
    navigation: {
        nextEl: ".spec_prod .swiper-button-next",
        prevEl: ".spec_prod .swiper-button-prev",
      },
});

// 個人禮券slider
var cupnslide = new Swiper('.cupn_slide', {
    slidesPerView: 3.18,
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

$.get('https://turn.shopping.friday.tw/', function(data) {
    $('.turn_body').html(data);
});