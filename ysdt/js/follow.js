// 智慧分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});

$('.icon_del').click(function(e){
    e.preventDefault();
    $(this).parents('.fw-list-content').remove();
});

// 分頁
$('.nav_page_num').click(function(e){
    e.preventDefault();
    var page_id = $(this).attr('data-page');
    $('.nav_page_num').removeClass('active');
    $(this).addClass('active');
    $("#"+page_id).addClass('active');
});
// 下一頁
$('.nav .next').click(function (e) {
    e.preventDefault();
    var currentTab = $(".nav_page_num.active");
    var newTab = currentTab.next();
    if(newTab.length > 0) {
        currentTab.removeClass('active');
        newTab.addClass('active');
    }
});
// 上一頁
$('.nav .prev').click(function (e) {
    e.preventDefault();
    var currentTab = $(".nav_page_num.active");
    var newTab = currentTab.prev();
    if(newTab.length > 0) {
        currentTab.removeClass('active');
        newTab.addClass('active');
    }
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
