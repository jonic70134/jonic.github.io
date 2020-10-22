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


        //選單定位調整
        var mol_n = $('.menu-one > li').length;
        for (var i = 0; i < mol_n; i++) {
            var mol_offset = $('.menu-one > li').eq(i).offset().left;
            var mo_Width = $('.menu-one').width()/2;
            if(mol_offset > mo_Width){
                $('.menu-one > li').eq(i).find('.menu-two').css({'left':'initial','right':'0'});
                $('.menu-one > li').eq(i).find('.menu-two').addClass('mt-right');
                $('.menu-one > li').eq(i).find('.menu-three').css({'left':'initial','right':'100%'});
            }else if(mol_offset < mo_Width){
                $('.menu-one > li').eq(i).find('.menu-two').css({'left':'0px','right':'initial'});
                $('.menu-one > li').eq(i).find('.menu-two').removeClass('mt-right');
                $('.menu-one > li').eq(i).find('.menu-three').css({'left':'100%','right':'initial'});
            };
        }


        if(mediaWidth <= 999){
            menuOne.addClass('hide');
            siteSearch.addClass('hide');
            mobileUesr.addClass('hide');
            mobileMenu.on('click', function(){
                menuOne.toggleClass('hide');
            });
            mobileSearch.on('click', function(){
                siteSearch.toggleClass('hide');
            });
            menuOneLi.on('click', function(event){
                if($(this).find(menuTwo).length){
                    event.preventDefault();
                    $(menuTwo).addClass('hide');
                    $(this).find(menuTwo).removeClass('hide');
                }
            });
            menuTwoLi.on('click', function(){
                if($(this).find(menuThree).length){
                    $(this).find(menuThree).removeClass('hide');
                }
            });
            mobileAccount.on('click', function(){
                mobileUesr.toggleClass('hide');
            })
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

    // Show add follow list animate
    $(".btn-follow-list").on("click", function(){
        var html = $('#add-follow-list').html();
        $('body').append(html);
        var cartNotify = $(".add-follow-list");
        cartNotify.fadeIn();
        setTimeout(function () {
            cartNotify.fadeOut();
        }, 700 );
        return false
    });
    // Show 貨到通知 animate
    $(".btn-arrival").on("click", function(){
        var html = $('#arrival-info').html();
        $('body').append(html);
        var cartNotify = $(".arrival-info");
        cartNotify.fadeIn();
        setTimeout(function () {
            cartNotify.fadeOut();
        }, 700 );
        return false
    });
    //追蹤清單 刪除清單
    $('.follow-delete').on('click', function(){
        var item = $(this).closest('.follow-list-content');
        item.fadeOut(250, function(){$(this).remove();});
    });

})(jQuery);
