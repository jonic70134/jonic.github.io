$(".icon_search").click(function(){
    $(".site-search").toggle();
});

$(".site-search .icon_clear").click(function(){
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
