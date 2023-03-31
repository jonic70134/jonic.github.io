// power by
var removeClass = true;
$('.pbybtn').click(function(e) {
    e.preventDefault();
    $('.pby_detail').addClass('active');
    removeClass = false;
});
$('.pbyclose').click(function(e) {
    e.preventDefault();
    $('.pby_detail').removeClass('active');
    removeClass = false;
});
$('html').click(function () {
    if (removeClass) {
        $(".pby_detail").removeClass('active');
    }
    removeClass = true;
});