//CARD REWARD JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //toggle infr
    $('.go-detail').click(function(){
        //open
        if (!$(this).hasClass('is-close')) {
            $(this).addClass('is-close');
        }
        //close
        else {
            $(this).removeClass('is-close');
        };
        $(this).parents('dd').next('.row-detail').toggleClass('is-expend');
    });
})(jQuery);