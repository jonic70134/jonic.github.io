$(".cupn_chg img").click(function() {
    $(this).addClass('rotate-in-center').on("animationend", function(){
        $(this).removeClass('rotate-in-center');
    });
    $(".cupn_items").load("index.html #refresh > *");
});