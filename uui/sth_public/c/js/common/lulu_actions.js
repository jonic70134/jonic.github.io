/*
 *  Anthor      Ken.huang
 *  Mail        ken.huang@uitox.com
 *  Create date 2014/04/25 14:30 Ken Huang
 *  Last update 2014/08/18 15:06 Ken Huang
 *
 * function     1.topMenu() - header main navigation
 *              2.sideMenu() - help center navigation
 *              3.floatCart() - the cart in header, only visible when desktop mode
 *              4.goTop() - go top button actions
*/
(function($){
    var mediaWidth = Math.max( $(window).width(), window.innerWidth);
    $(window).resize(function(){
        mediaWidth = Math.max( $(window).width(), window.innerWidth);
        //when screen resize, call function again
        topMenu();
    });
    topMenu();
    function topMenu(){
        var menuOne =       $('.menu-one'),
            menuOneLi =     menuOne.find('li'),
            menuTwo =       menuOne.find('.menu-two'),
            menuThree =     menuOne.find('.menu-three'),
            menuTwoLi =     menuTwo.find('li'),
            mobileNav =     $('.nav-menu-mobile'),
            mobileMenu =    $('.icon-menu'),
            mobileSearch =  $('.icon-search'),
            mobileAccount = mobileNav.find('.icon-account'),
            siteSearch =    $('.site-search'),
            mobileUesr = $('.nav-user');
        if(mediaWidth >= 1000){
            menuOne.removeClass('hide');
            siteSearch.removeClass('hide');
            mobileUesr.removeClass('hide');
            menuOneLi.hover(function(){
               if($(this).find(menuTwo).length){
                    $(this).find(menuTwo).removeClass('hide');
                }
            },function(){
                $(this).find(menuTwo).addClass('hide');
            });
            menuTwoLi.hover(function(){
                if($(this).find(menuThree).length){
                    $(this).find(menuThree).removeClass('hide');
                }
            },function(){
                $(this).find(menuThree).addClass('hide');
            });
        }

    }
    floatCart();
    function floatCart(){
        menuCart = $('.cart-btn');
        menuCartItem = $('.site-cart');
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
        $('.item-main .btn-addcart,.item-add .btn-addcart,.item-buy .btn-addcart').on('click', function(){
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });
    }
    //sideMenu
    sideMenu();
    function sideMenu(){
        var mainnav = $('.side-menu'),
            mainli = $('.side-menu li'),
            mainlifirst = $('.side-menu >li:first-child');
        if(mediaWidth <= 999){
            mainlifirst.find('h4').addClass('active');
            mainlifirst.find('.sec-menu').show();
            mainli.on('click',function(){
                var mainli = $(this),
                    title = mainli.find('h4'),
                    sibTitle = mainli.siblings().find('h4'),
                    secMenu = mainli.find('.sec-menu');
                sibTitle.removeClass('active').next().slideUp();
                secMenu.slideToggle();
                title.toggleClass('active');
                return false;
            });
        }
    }
    quantityCtrl();
    function quantityCtrl(){
        //無法購買這麼多數量
        $('.quantity-increase').on('click', function(){
            var html = $('#quantity-alert').html();
            $(this).css('position','relative');
            var input = $(this).prev('.quantity-input');
            if(input.val()>=10){
                $(this).append(html);
                setTimeout(function(){
                    $('.quantity-alert').fadeOut('slow');
                }, 2500);   
            }else{
                input.val(parseInt(input.val())+1);
            }
        })
        $('.quantity-decrease').on('click', function(){
            var input = $(this).next('.quantity-input');
            if(input.val()<=1){
                return false;
            }else{
                input.val(parseInt(input.val())-1);
            }
        });
    }
    $('.fancybox').fancybox({
        padding:0,
    });
    // Show add cart animate
    $(".btn-addcart").on("click",function(){
        var html = $('#cart-mark').html();
        $('body').append(html);
        var cartNotify = $(".cart-mark");
        cartNotify.fadeIn();
        setTimeout(function () {
            cartNotify.fadeOut();
        }, 800 );
    });

    //site-float-bar
    $('.site-float-bar').hide();

    $(window).scroll(
        function (e) {
            if ($(this).scrollTop() > 150) {
                $('.site-float-bar').slideDown(450);
            } else {
                $('.site-float-bar').slideUp(400);
        }
    });
    $(window).on('resize', function(){
        if ($(this).width() <= 767){
            $('.site-float-bar').hide(); 
            $(window).unbind("scroll");
        }else if ($(this).width() > 767){
            $(window).bind("scroll",(function(){
                if ($(this).scrollTop() > 150) {
                    $('.site-float-bar').slideDown(450);
                } else {
                    $('.site-float-bar').slideUp(400);
                }
            }));
        }
    });
    if ($(this).width() <= 767){
        $('.site-float-bar').hide(); 
        $(window).unbind("scroll");
    }

    //lulu menu
    navMenu();
    function navMenu(){
        var node = {};
        prepare();
        fopen();
        function prepare(){
            node.open = $('.site-header .m-menu');
            node.root = $('#navMenu');
            node.siteOutter = $('.site-outter');
            node.block = node.root.find('.block');
            node.menuOne = node.root.find('.menu-one>li>a');
            node.menuTwo = node.root.find('.menu-two>li>a');
            node.header = $('.site-header');
            node.siteBody = $('.site-body');
        }
        function fopen(){
            node.open.on('click', function(){
                node.root.slideToggle(300);
            });
        }
    }
    luluMenu();
    function luluMenu(){
        var node = {};
        node.root = $('.nav-menu');
        node.menuOne = node.root.find('.menu-one');
        node.menuOneLi = node.menuOne.find('li');
        node.menuOneLi.hover(
            function(){
                $(this).find('a').addClass('active');
                $(this).find('.menu-two').slideDown('fast').removeClass('hide');
            },function(){
                $(this).find('a').removeClass('active');
                $(this).find('.menu-two').slideUp('fast').addClass('hide');
            }
        );
    }
    //選單圖示變更
    $(".left-btn").click(function() {
       if ($(".m-menu").hasClass("fa-bars")) {
            $(".m-menu").removeClass("fa-bars");
            $(".m-menu").addClass("fa-times");
        }else if($(".m-menu").hasClass("fa-times")) {
            $(".m-menu").removeClass("fa-times");
            $(".m-menu").addClass("fa-bars");
        }       
    });

    //單品頁 描述收合
    $('.i-d-title').on('click', function(e) {
        e.preventDefault();
        var nextContent = $(this).next('.i-d-content');

        $('.i-d-title').removeClass('i-d-active');
        $('.i-d-content').slideUp(200);  
        if(nextContent.css('display') == 'block'){
            nextContent.slideUp(200);
            $(this).removeClass('i-d-active');
        }else{
            nextContent.slideDown(200);
            $(this).addClass('i-d-active');
        }
    });

    

})(jQuery);
