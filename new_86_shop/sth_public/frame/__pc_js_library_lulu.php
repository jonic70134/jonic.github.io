<?php //全站共用JS?>
<script src="../c/js/jquery/jquery-1.10.2.min.js"></script>
<script src="../c/js/jquery/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../c/js/3rd-party/idangerous.swiper.2.6.1.min.js"></script>
<script src="../c/js/3rd-party/jquery.fancybox.pack.js"></script>
<script src="../c/js/common/rwd_actions_002.js"></script>
<script type="text/js-template" id="quantity-alert">
    <div class="quantity-alert">無法購買這麼多數量</div>
</script>
<script type="text/js-template" id="cart-mark">
    <div class="cart-mark">
        <div class="cm-txt"><i class="fa fa-shopping-cart f-cart"></i>加入購物車</div>
    </div>
</script>
<script>
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
                if ($(this).scrollTop() > 200) {
                    root.fadeIn();
                } else {
                    root.fadeOut();
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
    });
    // Show add cart animate
    $(".btn-addcart").on("click", function(){
        var html = $('#cart-mark').html();
        $('body').append(html);
        var cartNotify = $(".cart-mark");
        cartNotify.fadeIn();
        setTimeout(function () {
            cartNotify.fadeOut();
        }, 300 );
    });
</script>

<?php //單品頁頁專用JS?>
<?php if($sitePage=="item"){?>
<script src="../c/js/common/item.js"></script>
<?php }?>