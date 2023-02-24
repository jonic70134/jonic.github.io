//PAYMENT JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //defalut credit card type
    window.cardDefault = '';
    cardAvailable.some(function(value) {
        switch(value) {
            case 'visaelectron':
                $('.credit-card-default').append('<span class="icon-visaelectron"></span>');
                $('.credit-card-type').append('<span class="icon-visaelectron-g"></span>');
                cardDefault += '<span class="icon-visaelectron-g"></span>';
                break;
            case 'maestro':
                $('.credit-card-default').append('<span class="icon-maestro"></span>');
                $('.credit-card-type').append('<span class="icon-maestro-g"></span>');
                cardDefault += '<span class="icon-maestro-g"></span>';
                break;
            case 'forbrugsforeningen':
                $('.credit-card-default').append('<span class="icon-forbrugsforeningen"></span>');
                $('.credit-card-type').append('<span class="icon-forbrugsforeningen-g"></span>');
                cardDefault += '<span class="icon-forbrugsforeningen-g"></span>';
                break;
            case 'dankort':
                $('.credit-card-default').append('<span class="icon-dankort"></span>');
                $('.credit-card-type').append('<span class="icon-dankort-g"></span>');
                cardDefault += '<span class="icon-dankort-g"></span>';
                break;
            case 'visa':
                $('.credit-card-default').append('<span class="icon-visa"></span>');
                $('.credit-card-type').append('<span class="icon-visa-g"></span>');
                cardDefault += '<span class="icon-visa-g"></span>';
                break;
            case 'mastercard':
                $('.credit-card-default').append('<span class="icon-mastercard"></span>');
                $('.credit-card-type').append('<span class="icon-mastercard-g"></span>');
                cardDefault += '<span class="icon-mastercard-g"></span>';
                break;
            case 'amex':
                $('.credit-card-default').append('<span class="icon-amex"></span>');
                $('.credit-card-type').append('<span class="icon-amex-g"></span>');
                cardDefault += '<span class="icon-amex-g"></span>';
                break;
            case 'dinersclub':
                $('.credit-card-default').append('<span class="icon-dinersclub"></span>');
                $('.credit-card-type').append('<span class="icon-dinersclub-g"></span>');
                cardDefault += '<span class="icon-dinersclub-g"></span>';
                break;
            case 'discover':
                $('.credit-card-default').append('<span class="icon-discover"></span>');
                $('.credit-card-type').append('<span class="icon-discover-g"></span>');
                cardDefault += '<span class="icon-discover-g"></span>';
                break;
            case 'unionpay':
                $('.credit-card-default').append('<span class="icon-unionpay"></span>');
                $('.credit-card-type').append('<span class="icon-unionpay-g"></span>');
                cardDefault += '<span class="icon-unionpay-g"></span>';
                break;
            case 'jcb':
                $('.credit-card-default').append('<span class="icon-jcb"></span>');
                $('.credit-card-type').append('<span class="icon-jcb-g"></span>');
                cardDefault += '<span class="icon-jcb-g"></span>';
                break;
        }
    });
    //payment method
    $('.radio-paypal').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    $('.radio-card').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        $('.section-credit-card').addClass('is-active').find('.t-reward').removeClass('is-show');
        $('.section-billing').addClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    $('.radio-installment').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        $('.section-installment').addClass('is-active');
        $('.section-credit-card').addClass('is-active').find('.t-reward').removeClass('is-show');
        $('.section-billing').addClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    $('.radio-card-reward').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        $('.section-credit-card').addClass('is-active').find('.t-reward').addClass('is-show');
        $('.section-billing').addClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    $('.radio-atm, .radio-cod').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        $('.section-billing').addClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    $('.radio-platform').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        $('.section-platform').addClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    $('.radio-netbank').click(function() {
        $('.md-payment-detail').removeClass('is-active');
        $('.section-netbank').addClass('is-active');
        scrollToTarget($('#payment_detail'));
    });
    //installment open bank (mobile)
    $('.go-bank').each(function() {
        $(this).click(function() {
            $(this).parents('dd').find('.t-bank').toggleClass('is-expand');
        })
    });
    //installment scroll
    $('input[name="installment_payment"]').click(function() {
        scrollToTarget($('#credit_card'));
    });
    //billing address
    $('.checkbox-as-shipping').click(function() {
        $('.md-billing-address').toggleClass('is-show');
        scrollToTarget($('#add_new_address'));
    });
    //card expiry jump
    $('#CardMonth').change(function() {
        $('#CardYear').focus();
    });
    $('#CardYear').change(function() {
        $('#input_card_cvv').focus();
    });
    window.openNext = function(obj,target) {
        window.addEventListener('DOMContentLoaded', function() {
          var focus = function(e) {
            e.stopPropagation();
            e.preventDefault();
            var clone = target.cloneNode(true);
            var parent = target.parentElement;
            parent.appendChild(clone);
            parent.replaceChild(clone, target);
            target = clone;
            window.setTimeout(function() {
              target.value = target.value || "";
              target.focus();
            }, 0);
          }
          obj.addEventListener('mousedown', focus);
          obj.addEventListener('touchstart', focus);
        }, false);
    };
})(jQuery);