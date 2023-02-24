//UITOX LOGIN JS: Login action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //textbox placeholder & label
    $('.input-text').each(function() {
        var textVal = $(this).val();
        var textHint = $(this).attr('placeholder');
        $(this).next('.place-label').hide().html(textHint);
        if(!$(this).val()) {
            //$(this).next('.place-label').show();
        }
        $(this).focus(function() {
            $(this).removeClass('is-allow is-error').next('.place-label').removeClass('is-allow is-error').addClass('is-focus').html(textHint).show();
        });
        $(this).blur(function() {
            if(!$(this).val()) {//error
                $(this).addClass('is-error')
                    .removeClass('is-allow')
                    .next('.place-label').addClass('is-error')
                        .removeClass('is-allow is-focus')
                        .text($(this).data('error'));
            }
            else {//allow
                $(this).addClass('is-allow')
                    .removeClass('is-error')
                    .next('.place-label').addClass('is-allow')
                        .removeClass('is-error is-focus')
                        .text('');
            }
        });
    });
    //input id
    $('.md-login .input-id').keyup(function(){
        // 20150924 whitie redmine 11781 手機註冊 - 同時寫入兩筆資料，email confirm 欄位不用依數值切換 view
        var id = $(this).attr('id');
        if(id == 'input_email_confirm')
        {
            return false;
        }

        if(regexEmail.test($(this).val()))
        {
            $('.item-email').show();
            $('.item-mobile').hide();
        }
        else if(phone_mode == '1' && regexMobile.test($(this).val()))
        {
            $('.item-mobile').show();
            $('.item-email').hide();
        }
    });
    $('.md-login .input-id').blur(function() {
        if(!$(this).val())
        {
            $(this).addClass('is-error').removeClass('is-allow').next('.place-label').addClass('is-error').removeClass('is-allow is-focus').text($(this).data('empty'));
            return false;
        }
        
        if(view == 'login')
        {
            if(!regexEmail.test($(this).val()) && !regexMobile.test($(this).val()))
            {
                $(this).addClass('is-error').removeClass('is-allow').next('.place-label').addClass('is-error').removeClass('is-allow is-focus').text($(this).data('error'));
            }
        }
        else
        {
            // 20150924 whitie redmine 11781 手機註冊 - 同時寫入兩筆資料，email confirm 欄位不用依數值切換 view
            var id = $(this).attr('id');
            if(regexEmail.test($(this).val()))
            {
                // 20150924 whitie redmine 11781 手機註冊 - 同時寫入兩筆資料，email confirm 欄位不用依數值切換 view
                if(id != 'input_email_confirm')
                {
                    $('.item-email').show();
                    $('.item-mobile').hide();
                }
            }
            else if(phone_mode == '1' && regexMobile.test($(this).val()))
            {
                // 20150924 whitie redmine 11781 手機註冊 - 同時寫入兩筆資料，email confirm 欄位不用依數值切換 view
                if(id != 'input_email_confirm')
                {
                    $('.item-mobile').show();
                    $('.item-email').hide();
                }
            }
            else
            {
                $(this).addClass('is-error').removeClass('is-allow').next('.place-label').addClass('is-error').removeClass('is-allow is-focus').text($(this).data('error'));
            }
        }
    });
    //mobile vertify
    $('.md-login .btn-mobile-verify').click(function(){
        if(!$('#input_id').val())
        {
            alert(warn_msg_account_phone_empty);
            $('#input_id').focus();
            return false;
        }
        
        if(!regexMobile.test($('#input_id').val()))
        {
            alert(warn_msg_account_phone_format_error);
            $('#input_id').focus();
            return false;
        }
        
        $(this).prop('disabled', true);
        $('.md-login .btn-submit').prop('disabled', true);
        $('.md-login form').mask("Loading...");
        
        $.ajax({
            url: url_member+'/maccount/send_security_code',
            type: "get",
            data: {
                cell_phone: $('#input_id').val(),
                method: view
            },
            dataType: 'json',
            success: function(response){
                alert(response.msg);
                $('.md-login .btn-mobile-verify').prop('disabled', false);
                $('.md-login .btn-submit').prop('disabled', false);
                $('.md-login form').unmask();
                
                if(response.status == true)
                {
                    $('input[name="security_send_time"]').val(response.send_time);
                    mobile_verify();
                }
                else
                {
                    if(response.redirect != '' && typeof(response.redirect) != 'undefined')
                    {
                        location.href = response.redirect;
                    }
                }
            }
        });
        
        return false;
    });
    //id management
    $('.md-account .btn-add, .md-account .btn-edit').each(function() {
        $(this).click(function() {
            var openBloc = $(this).data('href');
            $('.form-item').show();
            $('.form-item.is-hide, .form-item.button').hide();
            $(this).parents('.form-item').hide();
            $(openBloc).show();
            scrollToTarget($(openBloc));
            return false;
        });
    });
    $('.md-account .btn-cancel').each(function() {
        $(this).click(function() {
            var openBloc = $(this).data('href');
            $('.form-item.button').show();
            $(this).parents('.form-item').hide();
            $(openBloc).show();
            return false;
        });
    });
    //scroll top
    window.$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.go-top').addClass('is-show');
        } else {
            $('.go-top').removeClass('is-show');
        }
    });
    $('.go-top').click(function(e) {
            e.preventDefault();
            $body.animate({
                scrollTop: 0
            }, 500);
            return false;
    });
    function scrollToTarget(obj) {
        var posTarget = obj.offset().top;
        $body.delay(500).animate({
            scrollTop: posTarget
        }, 300);
    }
})(jQuery);

//var countdown = 121;
var mobile_verify = function()
{
    countdown -= 1;
    $('.btn-mobile-verify').attr('disabled','').html('<span class="t-bold">' + countdown + btn_resend_security_code).next('.input-verify').show();

    if(countdown == 0)
    {
        countdown = window.default_countdown;
        $('.btn-mobile-verify').attr('disabled', false).html(btn_get_security_code).next('.input-verify').hide();
    }
    else
    {
        setTimeout("mobile_verify()", 1000);
    }
};