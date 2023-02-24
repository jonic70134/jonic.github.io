(function($){ 

    //往上的按鈕
    navToTop();
    function navToTop(){
        var root = $('.nav-to-top');
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
//                    root.fadeIn();
                    root.addClass('show');
                } else {
//                    root.fadeOut();
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
    //fancybox 套用
    $('.fancybox').fancybox({
        padding:0,
          helpers: {
            overlay: {
              locked: false
            }
          }
    });
    $('.btn-close').click(function(){
        $(this).fancybox.close();
    });    

    //user address
    $('.md-user-address').click(function(){
        $('.md-user-address').removeClass('is-active');
        $(this).addClass('is-active');
    });

    //follow list
    $('.follow-delete').on('click', function(){
        var item = $(this).closest('.follow-list-content');
        item.fadeOut(250, function(){$(this).remove();});
    });

    //order edm
    $(".order_edm_001 .contact-submit").click(function(){
        alert("設定成功");
    });

    //bonus exchange
    $(".bonus_exchange_001 .contact-submit").click(function(){
        alert("設定成功");
        $(this).attr("href","bonus_list.php");
    });

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

    
//bouns list
    $('.bonus-more').on('click', function(){        
        var arrow = $(this).find('.b-arrow') ;
        var b_detail = $(this).siblings('.bonus-list-detail');

        $('.bonus-more').find('.b-arrow').removeClass("fa-caret-down").addClass("fa-caret-right");

        if (arrow.hasClass("fa-caret-right")) {
            arrow.removeClass("fa-caret-right");
            arrow.addClass("fa-caret-down");
        }else if(arrow.hasClass("fa-caret-down")) {
            arrow.removeClass("fa-caret-down");
            arrow.addClass("fa-caret-right");
        }

        $('.bonus-list-detail').slideUp(300);

        b_detail.slideDown(300);
    });


//退訂清單
    var o_check = $('.order-check > :checkbox');
    var o_check_all = $('.order-check-all > :checkbox');
    o_check_all.on('click',function() { 
        if(o_check_all.prop("checked")){            
            o_check.each(function() {
                $(this).prop("checked", true);                    
            });
        }else{
            o_check.each(function() {
                $(this).prop("checked", false);                   
            });           
        }
    });
     $(window).resize(function() {
        if($(window).width() <= 568) {
            o_check.on('click',function(){
                var list_rr = $(this).parents('label').siblings('.order-list-rr');
                if ($(this).prop('checked')) {
                    list_rr.show();
                }else{
                    list_rr.hide();
                }
            })

            o_check_all.on('click',function() { 
                if(o_check_all.prop("checked")){            
                    o_check.each(function() {
                        $(this).prop("checked", true);
                        $(this).parents('label').siblings('.order-list-rr').show();
                    });
                }else{
                    o_check.each(function() {
                        $(this).prop("checked", false);
                        $(this).parents('label').siblings('.order-list-rr').hide()
                    });           
                }
            });
        }else{
            $('.order-list-rr').show();        
        }
    }).resize();


//退訂確認清單
    $('.o-list-more').on('click',function(){
        $('.o-list-all').toggleClass('o-list-show');

        var arrow = $(this).find('.m-arrow');
        if (arrow.hasClass("fa-chevron-down")) {
            arrow.removeClass("fa-chevron-down");
            arrow.addClass("fa-chevron-up");
        }else if(arrow.hasClass("fa-chevron-up")) {
            arrow.removeClass("fa-chevron-up");
            arrow.addClass("fa-chevron-down");
        }
    });

    
//手機觸控事件
    var touchevent  = function(){$(this).addClass('on-touch');}
    var touchevent2 = function(){$(this).removeClass('on-touch');}
    $('a')
    .on('touchstart mouseenter click', touchevent)
    .on('touchend mouseleave click', touchevent2);

})(jQuery);


//alert
function dele_alert(){
    alert("請再次確認是否要刪除")
};