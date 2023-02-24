//SHIPPING JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //shipping fee
    $('input[name="radio_shipping"]').each(function() {
        $(this).click(function() {
            $('.t-shipping-fee').removeClass('is-show');
            $(this).parent().find('.t-shipping-fee').addClass('is-show');
        })
    });
})(jQuery);