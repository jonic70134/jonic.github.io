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