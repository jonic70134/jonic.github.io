

$('.cho_tab').click(function(){
    var cho_tab_id = $(this).attr('data-chotab');
    $('.cho_tab').removeClass('active');
    $('.cho_info').removeClass('active');
    $(this).addClass('active');
    $("#"+cho_tab_id).addClass('active');
});




// 分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});



// 瀑布流
var masonry = new Macy({
    container: '.items',
    trueOrder: false,
    waitForImages: false,
    useOwnImageLoader: false,
    debug: true,
    mobileFirst: true,
    columns: 5,
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
