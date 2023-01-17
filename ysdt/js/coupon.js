// 智慧分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
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
