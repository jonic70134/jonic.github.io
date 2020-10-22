var mediaWidth = Math.max( $(window).width(), window.innerWidth);
$(window).resize(function(){
    mediaWidth = Math.max( $(window).width(), window.innerWidth);
});
var mySwiper = new Swiper('.swiper-container',{
    speed: 500,
    loop: false,
    grabCursor: true,
    slidesPerView: 2,
    calculateHeight: true,
    roundLengths: true,
    resizeReInit: true,
});
if(mediaWidth <= 600){
    mySwiper.params.slidesPerView=1;
}

$('.swiper-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
})
$('.swiper-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
})
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
    // function loading(){
    //     node.barValue += 5;
    //     node.bar.width(node.barValue + "%");
    //     node.tip.css({
    //         "left": node.barValue - 16 + "%"
    //     })
    //     node.tipFinish.css({
    //         "left": node.barValue - 16 + "%"
    //     })
    //     if(node.barValue == '100'){
    //         node.bar.addClass('finish');
    //         node.tip.addClass('hide');
    //         node.actionFinish.addClass('finish');
    //         node.tipFinish.removeClass('hide');
    //     }
    //     if(node.barValue == node.barState){
    //         clearInterval(animate);
    //     }
    // }
    // var animate = setInterval(function(){
    //     loading();
    // }, node.barTime);
}