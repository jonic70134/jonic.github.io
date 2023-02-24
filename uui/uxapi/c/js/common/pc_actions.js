/*
 *  Anthor      Ken.huang
 *  Mail        ken.huang@uitox.com
 *  Create date 2014/10/25 14:30 Ken Huang
 *  Last update 2014/12/11 15:06 Ken Huang
 *
*/
(function($){
    floatCart();
    function floatCart(){
        menuCart = $('.cart-btn');
        menuCartItem = $('.site-header .site-cart');
        menuCart.hover(
            function(){
                menuCartItem.removeClass('hide');
            },function(){
                menuCartItem.addClass('hide');
            }
        );
    }
    floatCart_top();
    function floatCart_top(){
        menuCart_top = $('.cart-btn-top');
        menuCartItem_top = $('.nav-user .site-cart');
        menuCart_top.hover(
            function(){
                menuCartItem_top.removeClass('hide');
            },function(){
                menuCartItem_top.addClass('hide');
            }
        );
        $(window).scroll(function () {
            if ($(this).scrollTop() > 115) {
                 // $('.cart-btn-top').fadeIn();
                $('.cart-btn-top').css('display','block');
            } else {
                $('.cart-btn-top').hide();
            }
        });
    }
    //pc_left_002 sideMenu
    pc_left_002();
    function pc_left_002(){
        var mainnav = $('.side-menu'),
            mainli = $('.side-menu .fa'),
            mainlifirst = $('.side-menu >li:first-child');
            mainlifirst.find('h4 .fa').addClass('fa-minus-square-o');
            mainlifirst.find('.sec-menu').show();
        mainli.on('click',function(){
            var mainli = $(this).parent(),
                secMenu = mainli.find('.sec-menu');
            mainli.next('.sec-menu').slideToggle();
            mainli.find('.fa').toggleClass('fa-plus-square-o').toggleClass('fa-minus-square-o');
        });
    }
    //pc_left_006 sideMenu
    pc_left_006();
    function pc_left_006(){
        $('.pc_left_006 .side-menu > li:first-child').find('.sec-menu').show();
        $('.pc_left_006 .side-menu .title-h3').on('click',function(){
            var pl6Nav = $(this).next('.sec-menu');
            $('.pc_left_006 .side-menu .title-h3').removeClass('s-active');
            $('.pc_left_006 .sec-menu').slideUp(300); 
            if (pl6Nav.css('display') == 'block') {
                pl6Nav.slideUp(300);
                $(this).removeClass('s-active');
            }else if (pl6Nav.css('display') == 'none') {
                pl6Nav.slideDown(300);
                $(this).addClass('s-active');
            };
        });
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
    //往上的按鈕
    navToTop();
    function navToTop(){
        var root = $('.nav-to-top');
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    root.addClass('show');
                } else {
                    root.removeClass('show');
                }
            });
            root.click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 300);
                return false;
            });
        });
    }
    //翻譯按鈕
//    trans();
//    function trans(){
//        var root = $('.trans-block-03');
//        $(document).ready(function () {
//            $(window).scroll(function () {
//                if ($(this).scrollTop() > 150) {
//                    root.addClass('show');
//                } else {
//                    root.removeClass('show');
//                }
//            });            
//        });
//    }
    //fancybox 套用
    $('.fancybox').fancybox({
        padding:0,
          helpers: {
            overlay: {
              locked: false
            }
          }
    });
    // Show add cart animate
    $(".btn-addcart").on("click", function(){
        var html = $('#cart-mark').html();
        $('body').append(html);
        var cartNotify = $(".cart-mark");
        cartNotify.fadeIn();
        setTimeout(function () {
            cartNotify.fadeOut();
        }, 700 );
    });

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

    //搜尋跨境按鈕切換
    $('.btn-switching a').on('click',function(){
        $('.btn-switching a').removeClass('active');
        $(this).addClass('active');
    });

    //篩選按鈕
    $('.site-filter .attr-adv-btn').on('click',function(){  
        $(this).toggleClass('a-c-active');
        $('.attr').slideToggle(300);
    });

    //商品清單區塊顯示切換
    $('.list-switch-btn a').on('click',function(){
        $('.list-switch-btn a').removeClass('active');
        $(this).addClass('active');
    });

})(jQuery);