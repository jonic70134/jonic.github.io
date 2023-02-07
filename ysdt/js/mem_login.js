
var captcha = sliderCaptcha({
    id: 'captcha',
    width:'400',
    height:'100',
    onSuccess: function () {
        var handler = setTimeout(function () {
            window.clearTimeout(handler);
            captcha.reset();
        }, 500)
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
