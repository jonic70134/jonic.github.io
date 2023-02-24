//CVS PICKUP JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //table in mobile
    $('.pickup-table').each(function() {
        var windowWidth = $(window.parent.document).width();
        var tableContent = $(this).html();
        if (windowWidth <= 568) {
            $(this).find('th').remove();
            $(this).find('.col-head').attr('rowspan','');
            $(this).find('td').unwrap().wrap('<tr></tr>');
        };
    });
    //cvs index
    $('.pickup-index a').click(function(e) {
        e.preventDefault();
        $body.animate({
            scrollTop: $($.attr(this,'href')).offset().top - 50
        }, 500);
        return false;
    });
})(jQuery);