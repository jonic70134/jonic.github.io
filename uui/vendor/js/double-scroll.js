//uitox vendor JS: Double scroll action (c) 2014 by Arashis Shen @ UITOX Corp.
(function($){
    //define width
    $('.scroll-content-width').css('width',$('.scroll-content').width());
    //trigger scroll
    $('.double-scroll-top').scroll(function() {
        $('.double-scroll-bottom').scrollLeft($('.double-scroll-top').scrollLeft());
    });
    $('.double-scroll-bottom').scroll(function() {
        $('.double-scroll-top').scrollLeft($('.double-scroll-bottom').scrollLeft());
    });
})(jQuery);