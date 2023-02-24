//UITOX CART JS: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //input error
    $('input:not([type="radio"],[type="checkbox"],.not-required)').blur(function() {
        if($(this).val() == '') {//error
            $(this).addClass('is-error');
        }
        else {//allow
            $(this).removeClass('is-error').addClass('is-allow');
        };
    });
    $('select').blur(function() {
        if($(this).prop('selectedIndex') == 0) {//error
            $(this).addClass('is-error');
        }
        else {//allow
            $(this).removeClass('is-error').addClass('is-allow');
        };
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
    window.scrollToTarget = function(obj) {
        var posTarget = obj.offset().top;
        $body.delay(500).animate({
            scrollTop: posTarget
        }, 300);
    };
    //lightbox
    window.openLightbox = function(obj) {
        var lightboxOption = {
            autoSize: true,
            padding: 0,
            closeBtn: false,
            helpers: {
                title: null,
                overlay: {
                    closeClick: false
                }
            }
        };
        obj.fancybox(lightboxOption);
    };
    $('.go-popup').each(function() {
        openLightbox($(this));
    });
    //tip
    $('.go-tip').each(function() {
        var windowWidth = $(window).width();
        if (windowWidth <= 1024) {
            $(this).find('.md-tip').removeClass('md-tip').addClass('md-dialog');
            $(this).addClass('go-popup').attr({
                'href': '#tip',
                'data-type': 'inline'
            });
            openLightbox($(this));
        };
    });
    //expand product list
    $('.btn-expand-list').click(function(){
        var go_expand = $(this).data('expand-text');
        var go_merge = $(this).data('merge-text');
        //open
        if ($(this).html() == go_expand) {
            $(this).addClass('is-expand');
            $(this).html(go_merge);
        }
        //close
        else {
            $(this).removeClass('is-expand');
            $(this).html(go_expand);
        };
        $('.md-product-list').toggleClass('is-expand');
    });
    //local & foreign switch
    $('.go-new-foreign-address').click(function() {
        $(this).parents('.md-add-address').find('.md-form').removeClass('is-show');
        $(this).parents('.md-add-address').find('.md-new-foreign-address').addClass('is-show');
        scrollToTarget($('#add_new_address'));
        //$.fancybox.update();
    });
    $('.go-new-local-address').click(function() {
        $(this).parents('.md-add-address').find('.md-form').removeClass('is-show');
        $(this).parents('.md-add-address').find('.md-new-local-address').addClass('is-show');
        scrollToTarget($('#add_new_address'));
        //$.fancybox.update();
    });
})(jQuery);