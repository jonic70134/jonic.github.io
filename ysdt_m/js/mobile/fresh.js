$(".icon_search").click(function(){
    $(".site-search").toggle();
});

$(".icon_clear").click(function(){
    $(this).parents("div").find(".input-search").val("");
});
//menu
$('.icon_menu').click(function(e) {
    e.preventDefault();
    $('.menu').stop(true,false).toggleClass("active");
    $(".body_container").toggleClass("fixed");
    $("body").toggleClass("o_hidden");
    return false;
});

// 圖文class切換
$(".icon_pictxt").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_pictxt icon_picview');
    $('.cate_items').toggleClass('cate_items_txt');
});

// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});