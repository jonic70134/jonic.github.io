// 圖文class切換
$(".icon_pictxt").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_pictxt icon_picview');
    $('.cate_items').toggleClass('cate_items_txt');
});

