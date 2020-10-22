var mediaWidth = Math.max( $(window).width(), window.innerWidth);
$(window).resize(function(){
    mediaWidth = Math.max( $(window).width(), window.innerWidth);
});

//item slider
md_item_sliders();
function md_item_sliders(){
    var swiper = new Swiper('.swiper-container',{
        pagination: '.swiper-pagination',
        autoplay: 0,
        speed: 500,
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        paginationClickable: true,
        autoplayDisableOnInteraction: false,
        preloadImages: false,
        lazyLoading: true
    })
    $(window).resize(function() {
        swiper.reInit();
    });
}

//單品頁下方選單
itemDetail();
function itemDetail(){
    node = {};
    prepare();
    if(mediaWidth <= 1220){
        observe();
    }else{
        node.root.find('.content').removeClass('hide');
        node.key.addClass('active');
    }
    function prepare(){
        node.root = $('.md-item-detail');
        node.key = node.root.find('.key');
        node.headerHeight = $('.site-header').height(); 
    }
    function observe(){
        node.key.on('click', function(){
            var top = $(this).offset().top;
            $(this).toggleClass('active');
            $(this).find('.fa').toggleClass('fa-angle-double-right fa-angle-double-down');
            $(this).next('.content').slideToggle();
            if($(this).hasClass('active')){
                $("html, body").animate({
                    scrollTop: top - node.headerHeight
                }, 300);
            }
        });
    }
}

//贈品
$('.gift-select').on('click', function() {
    $(this).parents('.gift').find('.input-size').prop('checked',true);
});

//toggle discount
$('.btn-discount').each(function(){
    $(this).on('click', function(){
        $('body').css('overflow','hidden');
        $('.site-header').addClass('is-hide');
        $('.select-dialog').addClass('is-show');
    });
});
$('.select-dialog .btn-close').on('click', function(){
    $('body').css('overflow','auto');
    $('.select-dialog').removeClass('is-show');
});

// $('a#add_cart, a#select_spec').fancybox({
//         type : 'inline',
//         href : '#itemspec',
//         padding: 0,
//         margin: [20, 20, 20, 20],
//         beforeShow: function(){
//             $('html').css({'overflow': 'hidden !important'});
//         },
//         afterClose: function(){
//             $('html').css({'overflow': ''});
//         },
// 		helpers: {
// 	        overlay: {
//           		locked: true
//         	}
//       	}
//     });

    
// $('a#add_cart, a#select_spec, a#to_cart').fancybox({
//     width:300,
//     type : 'inline',
//     href : '#itemspec',
//     padding: 0,
//     margin: [20, 20, 20, 20],
//     afterShow: function(){
//         $('html').css({'overflow': 'hidden !important'});
//     },
//     afterClose: function(){
//         $('html').css({'overflow': ''});
//     },
//     helpers:{
//         overlay:{
//             locked: true
//         }
//     }
// });






// 加購品,贈品設定
$('.addcart').fancybox({
    width:'100%',
    height:'auto',
    wrapCSS:'fancybox-bottom',
    padding:0,
    margin: [ 0,0,0,0 ],
    autoSize: false,
    helpers: {
        overlay: {
              locked: true
        }
    }
});
// 選擇加購品視窗
$('.addalert').fancybox({
    width:250,
    height:'auto',
    padding:0,
    margin: [ 20,20,20,20 ],
    autoSize: false,
    closeBtn: false,
    helpers: {
        overlay: {
            locked: true,
            css:{
                'background' : 'rgba(0, 0, 0, 0)'
            }
        }
    }
});
// bibi鳥
$('.item-bird').fancybox({
    width:300,
    padding:0,
    margin: [ 20,20,20,20 ],
    closeBtn: false,
    helpers: {
        overlay: {
              locked: true
        }
    }
});