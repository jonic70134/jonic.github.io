/*
 *  Anthor      Ken.huang
 *  Mail        ken.huang@uitox.com
 *  Create date 2014/09/22 14:30 Ken Huang
 *  Last update 2014/09/22 15:06 Ken Huang
 *
 * function     
 *              1.sideMeu() - help center navigation
 *              2.goTop() - go top button actions
*/
(function($){
    var mediaWidth = Math.max( $(window).width(), window.innerWidth);
    $(window).resize(function(){
        mediaWidth = Math.max( $(window).width(), window.innerWidth);
        //when screen resize, call function again
        sideMenu();
    });
    //help_center menu
    sideMenu();
	function sideMenu(){
            menu = $('.main-menu');
            menuli = menu.find('li');
        if(mediaWidth <= 767){
            $('.main-menu .sec-nav').hide();
            menuli.on('click', function(){
                $(this).find('.sec-nav').slideToggle('fast').siblings();
                $(this).find('b').toggleClass('icon-arrow-right icon-arrow-down');
                $(this).siblings().find('.sec-nav:visible').slideUp('fast')
                .prev('b').addClass('icon-arrow-right').removeClass('icon-arrow-down');
            });
        }
    }
    //go top button
    goTop();
    function goTop(){
        var node = {};
        node.root = $('#goTop');
        var $window = $(window);
        node.windowTop = $window.height();
        node.root.hide();
        $window.on('scroll', function(){
            node.docHeight = $(document).scrollTop();
            if(node.docHeight >= node.windowTop){
                node.root.slideDown();
            }else if(node.docHeight < node.windowTop){
                node.root.slideUp();
            }
        })
        $('#goTop').on('click', function(){
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });
    }
})(jQuery);