//UITOX LOGIN JS: Login action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //textbox placeholder & label
    $('.input-text').each(function() {
        var textVal = $(this).val();
        var textHint = $(this).attr('placeholder');
        $(this).next('.place-label').hide().html(textHint);
        if(!$(this).val()) {
            $(this).next('.place-label').show();
        };
        $(this).focus(function() {
            $('.place-label').hide();
            $(this).next('.place-label').show().addClass('is-focus');
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
    $('.input-id').blur(function() {
        var regexEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if(regexEmail.test($(this).val())) {//email
            $('.item-email').show();
            $('.item-mobile').hide();
        }
        else if(regexMobile.test($(this).val())) {//mobile
            $('.item-mobile').show();
            $('.item-email').hide();
        }
        else {//error
            $(this).addClass('is-error')
                .removeClass('is-allow')
                .next('.place-label').addClass('is-error')
                    .removeClass('is-allow is-focus')
                    .text($(this).data('error'));
        };
    });
    //mobile vertify
    $('.btn-mobile-verify').click(function() {
        var countdown = 120;
        $(this).attr('disabled','')
            .html('<span class="t-bold">' + countdown + '秒</span>後重新發送')
            .next('.input-verify').show();
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
        });
    });
    $('.md-account .btn-cancel').each(function() {
        $(this).click(function() {
            var openBloc = $(this).data('href');
            $('.form-item.button').show();
            $(this).parents('.form-item').hide();
            $(openBloc).show();
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
    };
})(jQuery);