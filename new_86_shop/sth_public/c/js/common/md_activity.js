md_act_sliders();
function md_act_sliders(){
    var swiper = new Swiper('.swiper-container',{
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        speed: 500,
        grabCursor: true,
        calculateHeight: true,
        roundLengths: true,
        resizeReInit: true
    })
    $(window).resize(function() {
        swiper.reInit();
    });
}

progressBar();
function progressBar(){
    var node = {};
    node.root = $("#progress-bar-static");
    node.bar = node.root.find($(".inner-bar"));
    node.barValue = 0;
    node.barState = node.bar.data('state');
    node.barTime = (1000/node.barState)*5;
    node.tip = $(".note");
    node.tipFinish = $(".note-finish");
    node.actionFinish = $("#actActions");
}