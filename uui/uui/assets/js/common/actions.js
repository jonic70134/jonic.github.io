/*
 *  Anthor      Ken.huang
 *  Mail        ken.huang@uitox.com
 *  Create date 2014/04/25 14:30 Ken Huang
 *  Last update 2014/06/10 15:06 1000
 *
 * function     1.topMenu() - header main navigation
 *              2.sideMeu() - header right side navigation
 *              3.goTop() - go top button actions
*/
(function($){
    topMenu();
    function topMenu(){
        var width = $(window).width();
         $('.nav-menu li').hover(
            function(even){
                $(this).find('.sub').slideDown(300);
                 event.stopPropagation();
            },function(){
                $(this).find('.sub').slideUp(300);
            }
        );
        if(width <= 767){
            $('.menu-mobile').click(
                function(){
                    $('.nav-menu').toggleClass('hidden-pad-mobile');
                }
            )
        }
    }
    //sideMenu();
	function sideMenu(){
        var width = $(window).width(),
            menu = $('.main-menu'),
            menuli = menu.find('li'),
            menuCart = $('.main-cart');
            menuCartItem = $('.cart-item');
        if(width <= 767){
            $('.main-menu .sec-nav:not(:first)').hide();
            menuli.on('click', function(){
                $(this).find('.sec-nav').slideToggle().siblings().find('.arrow-right').removeClass('icon-arrow-right').addClass('icon-arrow-down');
                $(this).siblings().find('.sec-nav:visible').slideUp('500').siblings().find('.arrow-right').removeClass('icon-arrow-down').addClass('icon-arrow-right');  
            });
        }
        menuCart.hover(
            function(){
                console.log('r');
                menuCartItem.removeClass('hide');
            },function(){
                menuCartItem.addClass('hide');
            }
        );

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