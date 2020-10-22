//menu
$('.global-menu .menu-one > li >.menu-item').on('click', function() {
    toggleMenu($(this), $('.menu-two'));
});
$('.global-menu .menu-two > li > .menu-item').on('click', function() {   
    toggleMenu($(this), $('.menu-three'));
});
var posTarget;
function toggleMenu(obj, nextObj) {
    isNavToggle = false;
    if (!obj.parent().find(nextObj).hasClass('is-expand')) {
        nextObj.removeClass('is-expand');
        obj.parent().find(nextObj).addClass('is-expand');
    }
    else {
        nextObj.removeClass('is-expand');
    }
    setTimeout(function() {
        //when menu expanded, get obj position
        posTarget = obj.offset().top;
        scrollToPosition(obj);
    }, 400);
};
//function scrollToPosition(obj) {
//    $('html, body').animate({
//        scrollTop: posTarget
//    }, 300);
//}

//quantity spinner
quantityCtrl();
function quantityCtrl() {
    var isAlertShow = false;
    //無法購買這麼多數量
    $('.quantity-input').each(function() {
        //if qty >= max, "+" disabled
        if (parseInt($(this).val(),10) >= $(this).attr('max')) {
            $(this).parent().find('.btn-quantity.btn-increase').addClass('is-disabled').prop('disabled',true);
        };
        $(this).bind('input change keyup',function() {
            qtyControl($(this),$(this));
        });
    });
    //btn "-"
    $('.btn-quantity.btn-decrease').each(function() {
        var input_quantity = $(this).parent().find('.quantity-input');
        $(this).click(function() {
            if (input_quantity.val() > 1) {
                input_quantity.val(parseInt(input_quantity.val(),10) - 1);
                qtyControl($(this),input_quantity);
            }
            else {
                input_quantity.val(1);
            }
        }); 
    });
    //btn "+"
    $('.btn-quantity.btn-increase').each(function() {
        var input_quantity = $(this).parent().find('.quantity-input');
        $(this).click(function() {
            input_quantity.val(parseInt(input_quantity.val(),10) + 1);
            qtyControl($(this),input_quantity);
        }); 
    });
    function qtyControl(obj,input) {
        var tipAlert = $('#quantity-alert').html();
        if (parseInt(input.val(),10) > input.attr('max')) {
            obj.parent().find('.btn-quantity.btn-increase').addClass('is-disabled').prop('disabled',true);
            //input.val(input.attr('max'));
            if (!isAlertShow) {
                obj.parents('.quantity').append(tipAlert);
                isAlertShow = true;
                timerFadeOut = setTimeout(function() {
                    $('.quantity-alert').fadeOut(500);
                    timerRemove = setTimeout(function() {
                        $('.quantity-alert').remove();
                        isAlertShow = false;
                    },500,function() {
                        clearTimeout(timerRemove);
                    });
                },1500,function() {
                    clearTimeout(timerFadeOut);
                });
            }
        }
        else if (parseInt(input.val(),10) == input.attr('max')) {
            obj.parent().find('.btn-quantity.btn-increase').addClass('is-disabled').prop('disabled',true);
            $('.quantity-alert').remove();
            isAlertShow = false;
        }
        else {
            obj.parent().find('.btn-quantity.btn-increase').removeClass('is-disabled').prop('disabled',false);
            $('.quantity-alert').remove();
            isAlertShow = false;
        };
    };
}

// Show add cart animate
$('.btn-addcart').on('click', function(){
    var cartAlert = $('#cart-alert').html();
    $('body').append(cartAlert).css('overflow','auto');
    $('.select-dialog').removeClass('is-show');//請選擇尺寸
    $('.cart-alert').fadeIn();
    $('.site-header .btn-cart .fa-shopping-cart').addClass('is-animate');
    $('.site-header .btn-cart .number').addClass('is-animate');
    timerFadeOut = setTimeout(function() {
        $('.cart-alert').fadeOut();
        timerRemove = setTimeout(function() {
            $('.cart-alert').remove();
            $('.site-header .btn-cart .fa-shopping-cart').removeClass('is-animate');
            $('.site-header .btn-cart .number').removeClass('is-animate');
        },500,function() {
            clearTimeout(timerRemove);
        });
    },1500,function() {
        clearTimeout(timerFadeOut);
    });
});

//go to top
navToTop();
function navToTop() {
    var root = $('.nav-to-top');
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                root.fadeIn();
            } else {
                root.fadeOut();
            }
        });
        root.on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 300);
            return false;
        });
    });
    var headerBtn = $('.site-header .title-h2');
    headerBtn.on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 300);
    });
    var headerBtn = $('.btn-addcart');
    headerBtn.on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 300);
    })
}

//replace all SVG images with inline SVG
$('img.img-svg').each(function() {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);
    }, 'xml');
});

//img lazyload
$('.img-lazyload').unveil(200, function() {
    $(this).load(function() {
        this.style.opacity = 1;
    });
});

$( ".md-top-menu .top" ).click(function() {
  $( ".sec-menu" ).stop(true,false).slideToggle(100);
});

// $('.fancybox').fancybox({
//     width:300,
//     padding:0,
//     margin: [ 20,20,20,20 ],
//     beforeShow: function(){
//         $('html').css({'overflow': 'hidden !important'});
//     },
//     afterClose: function(){
//         $('html').css({'overflow': ''});
//     },
//     helpers: {
//         overlay: {
//               locked: true
//         }
//     }
// });

//首頁 menu 開合跳
$('.btn-menu').click(function(e) {
    e.preventDefault();
    $('.md_nav_menu_collapse').stop(true,false).toggleClass("active");
    $(".site-outter").toggleClass("fixed");
    $("body").toggleClass("o_hidden");
    return false;
});

$('.btn-search').click(function(e) {
    e.preventDefault();
    $(".search-bar").toggle();
    return false;
});


$(".addcart").on("click", function(){
    var html = $('#cart-alert').html();
    $('body').append(html);
    
});
    

// app區塊關閉
$('.app_close').click(function(e) {
    e.preventDefault();
    $('.app_banner').hide();
    return false;
});
// 滑動後切換導覽列
$(window).scroll(function(){
    var topHeight = $(window).scrollTop() + $(window).innerHeight()-120;
    if($(window).scrollTop()>30){
        $(".head_con").hide();
        $(".head_scroll").show();
        $(".site-body").css('padding-top','142px');
    }else{
        $(".head_con").show();
        $(".head_scroll").hide();
        $(".site-body").css('padding-top','0');
    };
});