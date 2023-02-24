//init jquery.payment
(function($){
    $('.input-card-num').payment('formatCardNumber');
    $('.input-cvv').payment('formatCardCVC');
    var cardType, cardValid, cardElem, cardTypeFlag, cardCVCValid;
    //card num
    $('.input-card-num').bind({
        keyup: function() {
            cardType = $.payment.cardType($(this).val());
            cardValid = $.payment.validateCardNumber($(this).val());
            cardElem = '<span class="icon-' + cardType + '"></span>';
            cardTypeFlag = cardAvailable.some(function(value) {
                return value == cardType ? true : false;
            });
            if(cardType != null && cardTypeFlag) {
                $('.credit-card-type').html(cardElem);
            }
            else {
                $('.credit-card-type').html(cardDefault);
            }
            //jump to card expires
            if(cardValid) {
                $('#CardMonth').focus();
            };
            return cardType, cardValid, cardTypeFlag;
        },
        blur: function() {
            if (!cardValid || !cardTypeFlag) {
                alert($(this).data('error-text'));
                $(this).addClass('is-error');
                return false;
            }
            else {
                $(this).removeClass('is-error').addClass('is-allow');
            }
        }
    });
    //cvv
    $('.input-cvv').bind({
        blur: function() {
            cardCVCValid = $.payment.validateCardCVC($(this).val(),cardType);
            if (!cardCVCValid) {
                alert($(this).data('error-text'));
                $(this).addClass('is-error');
                return false;
            }
            else {
                $(this).removeClass('is-error').addClass('is-allow');
            }
        }
    });
    $('.credit-edit-open').click(function(){
        $('.credit-edit').show();
        $('.credit-edit-none').hide();
    });
    $('.credit-edit-close').click(function(){
        $('.credit-edit').hide();
        $('.credit-edit-none').show();
    });
})(jQuery);