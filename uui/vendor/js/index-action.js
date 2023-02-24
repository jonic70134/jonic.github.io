//uitox vendor JS: Big inside homepage action (c) 2014 by Arashis Shen @ UITOX Corp.
(function($){
    //lightbox
    function openLightbox(obj) {
        var lightboxOption = {
            width: obj.data('width'),
            height: 'auto',
            href: obj.data('href'),
            type: obj.data('type')
        };
        obj.fancybox(lightboxOption);
    };
    $('.go-popup').each(function() {
        openLightbox($(this));
    });
    //uitox annoucement
    $('.uitox-annoucement').bind({
        mouseenter: function() {
            $('.uitox-annouce-detail').slideDown(300);
        },
        mouseleave: function() {
            $('.uitox-annouce-detail').slideUp(100);
        }
    });
})(jQuery);