

$('.cho_tab').click(function(){
    var cho_tab_id = $(this).attr('data-chotab');
    $('.cho_tab').removeClass('active');
    $('.cho_info').removeClass('active');
    $(this).addClass('active');
    $("#"+cho_tab_id).addClass('active');
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