//ADDRESS JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //edit purchaser infr
    $('.go-purchaser-form').click(function(){
        $('.md-purchaser-infr').toggle();
        $('.md-purchaser-form').toggleClass('is-active');
    });
    //user address
    var isHandlerActive = true;
    $('.md-user-address').click(function(){
        if (!isHandlerActive){
            return;
        }
        $('.md-user-address').removeClass('is-active');
        $(this).addClass('is-active');
        $(this).find('input[name="radio_address"]').prop('checked',true);
    });
    //address book switch
    $('.go-foreign-address').click(function(){
        $('.md-address-book').hide();
        $('.md-foreign-address').show();
        scrollToTarget($('#foreign_address'));
    });
    $('.go-address-book').click(function(){
        $('.md-foreign-address').hide();
        $('.md-address-book').show();
        scrollToTarget($('#address_book'));
    });
    $('input[name="radio_invoice"]').click(function() {
        $(this).parents('dd').find('.input-name').hide();
        $(this).next('.input-name').show();
        $(this).next('.input-name').focus();
    });
    $('input[name="radio_invoice"]:checked').trigger('click');
})(jQuery);