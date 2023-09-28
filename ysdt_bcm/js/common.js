function openSideMenu() {
    $('#side_menu').stop(true, false).animate({ width: 200, }, 200);
    // $('.side_menu_body li .bi').addClass('active').animate({
    //     'font-size': '1.3em'
    // }, 200);
    // $('#side_menu').animate({
    //     width: 200
    // }, 100);
};
function closeSideMenu() {
    $('#side_menu').stop(true, false).animate({ width: 42, }, 200);
    // $('.side_menu_body li .bi').removeClass('active').animate({
    //     'font-size': '1.8em'
    // }, 100);
    // $('#side_menu').animate({
    //     width: 35
    // }, 100);
    $('.side_sub_menu').hide();
}
$('#side_menu li').bind({
    click: function () {
        openSideMenu();
        $(this).find('.side_sub_menu').show(100);
    },
    mouseleave: function () {
        $(this).find('.side_sub_menu').hide();
    }
});


$('#side_menu').mouseleave(function () {
    closeSideMenu();
});
$('#side_menu .dis-dropdown').unbind('click');