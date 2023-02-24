(function($){
    //lightbox
    function openLightbox(obj) {
        var lightboxOption = {
            width: obj.data('width'),
            height: 'auto',
            href: obj.data('href'),
            type: 'iframe'
        };
        obj.fancybox(lightboxOption);
    };
    $('.go-popup').each(function() {
        openLightbox($(this));
    });
})(jQuery);