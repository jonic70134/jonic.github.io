
// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});
// 圖文切換
$(".icon_pictxt").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_pictxt icon_picview');
    $('.cate_items').toggleClass('cate_items_txt');
});