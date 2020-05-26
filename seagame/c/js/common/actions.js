/*
 *  Anthor      Ken.huang
 *  Mail        ken.huang@uitox.com
 *  Create date 2014/04/25 14:30 Ken Huang
 *  Last update 2014/08/18 15:06 Ken Huang
 *
 * function     1.topMenu() - header main navigation
 *              2.sideMeu() - help center navigation
 *              3.floatCart() - the cart in header, only visible when desktop mode
 *              4.goTop() - go top button actions
*/
(function($){
    var mediaWidth = Math.max( $(window).width(), window.innerWidth);
    $(window).resize(function(){
        mediaWidth = Math.max( $(window).width(), window.innerWidth);
    });
    topMenu();
    function topMenu(){
        if(mediaWidth >= 1000){
            $('.main-nav li').hover(function(){
               if($(this).find('.sub').length){
                    $(this).find('.sub').removeClass('hide');
                }
            },function(){
                $(this).find('.sub').addClass('hide');
            });
            $('.sub li').hover(function(){
                if($(this).find('.third').length){
                    $(this).find('.third').removeClass('hide');
                }
            },function(){
                $(this).find('.third').addClass('hide');
            });
        }
        if(mediaWidth <= 999){
            $('.main-nav li').on('click', function(){
                if($(this).find('.sub').length){
                    $('.sub').addClass('hide');
                    $(this).find('.sub').removeClass('hide');
                }
            });
            $('.sub li').on('click', function(){
                if($(this).find('.third').length){
                    $(this).find('.third').removeClass('hide');
                }
            });
            $('ul.tabs li').on('click', function(event) {
                var tab = $(this).find('a').attr('href'),
                    arrow = $(this).find('.icon-nav-arrow');
                arrow.removeClass('hide').fadeIn('fast');
                $(this).siblings().find('.icon-nav-arrow').addClass('hide');
                $(tab).stop(false, true).fadeIn('fast').siblings().hide();
                return false;
            });
        }
    }
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
    floatCart();
    function floatCart(){
        menuCart = $('.main-cart');
        menuCartItem = $('.cart-item');
        menuCart.hover(
            function(){
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