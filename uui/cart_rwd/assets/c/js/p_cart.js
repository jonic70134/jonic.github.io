//CART JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //change quantity
    var tipAlert = $('#tip_qty_max').html();
    var isAlertShow = false;
    $('.input-quantity').each(function() {
        //if qty >= max, "+" disabled
        if (parseInt($(this).val(),10) >= $(this).attr('max')) {
            $(this).parent().find('.btn-quantity.btn-increase').addClass('is-disabled').prop('disabled',true);
        };
        $(this).bind('input change keyup',function() {
            qtyControl($(this),$(this),tipAlert);
        });
        //number only
        $(this).keydown(function(e) {
            // Allow: backspace, delete, tab, esc, enter
            if ($.inArray(e.keyCode, [8, 46, 9, 27, 13, 108]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                // Allow: Ctrl+R
                (e.keyCode == 82 && e.ctrlKey === true) ||
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     return;
            };
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            };
        });
    });
    //btn "-"
    $('.btn-quantity.btn-decrease').each(function() {
        var input_quantity = $(this).parent().find('.input-quantity');
        $(this).click(function() {
            if (input_quantity.val() > 1) {
                input_quantity.val(parseInt(input_quantity.val(),10) - 1);
                qtyControl($(this),input_quantity,tipAlert);
            }
            else {
                input_quantity.val(1);
                msg_delete();
            }
        }); 
    });
    //btn "+"
    $('.btn-quantity.btn-increase').each(function() {
        var input_quantity = $(this).parent().find('.input-quantity');
        $(this).click(function() {
            input_quantity.val(parseInt(input_quantity.val(),10) + 1);
            qtyControl($(this),input_quantity,tipAlert);
        }); 
    });
    function qtyControl(obj,input,msg) {
        if (parseInt(input.val(),10) > input.attr('max')) {
            obj.parent().find('.btn-quantity.btn-increase').addClass('is-disabled').prop('disabled',true);
            if (!isAlertShow) {
                obj.parents('.md-spin').append(msg);
                isAlertShow = true;
                timerFadeOut = setTimeout(function() {
                    $('.tip-quantity-alert').fadeOut(500);
                    timerRemove = setTimeout(function() {
                        $('.tip-quantity-alert').remove();
                        isAlertShow = false;
                    },500,function() {
                        clearTimeout(timerRemove);
                    });
                },1500,function() {
                    clearTimeout(timerFadeOut);
                });
            }
        }
        else if (parseInt(input.val(),10) == input.attr('max')) {
            obj.parent().find('.btn-quantity.btn-increase').addClass('is-disabled').prop('disabled',true);
            $('.tip-quantity-alert').remove();
            isAlertShow = false;
        }
        else {
            obj.parent().find('.btn-quantity.btn-increase').removeClass('is-disabled').prop('disabled',false);
            $('.tip-quantity-alert').remove();
            isAlertShow = false;
        };
    };
    //delete product
    $('.btn-delete').each(function() {
        $(this).click(function() {
            msg_delete();
        });
    });
    function msg_delete() {
        confirm('確定要將「商品名稱商品名稱」從您的購物車刪除？');
    }
})(jQuery);