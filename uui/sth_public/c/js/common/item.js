//item main 選規格
$('.value>li').click(function(){
	var img = "<i class='fa fa-check'></i>";
	if($(this).hasClass('disabled')){
		return false;
	}else{
    	$(this).addClass('active').append(img).siblings().removeClass('active').find('.fa-check').remove();
	}
});



(function($){
    //單品頁主圖
    var mySwiper = new Swiper('.item-slider-001',{
        pagination: '.pagination',
        //autoplay: 9000,
        speed: 500,
        loop: false,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        paginationClickable: true,
        //update 201504
        autoplayDisableOnInteraction: false,
//        onInit: function() {
//           if(mySwiper.activeIndex == 0) {
//                $('.arrow-left').hide();
//            }
//            else {
//                $('.arrow-left').show();
//            }
//        },
//        onSlideChangeEnd: function() {
//            if(mySwiper.activeIndex == 0) {
//                $('.arrow-left').hide();
//            }
//            else {
//                $('.arrow-left').show();
//            }
//            if(mySwiper.activeIndex == mySwiper.slides.length - 1) {
//                $('.arrow-right').hide();
//            }
//            else {
//                $('.arrow-right').show();
//            }
//        }
    })
    $(window).resize(function() {
        mySwiper.reInit();
    });

    $(".photo-other").on('click', 'img', function(){
        mySwiper.swipeTo($(this).index(), 500);
    });
    $('.photo-other img').on('click', function(){
		$('.photo-other img').removeClass('active');
		$(this).addClass('active');
	});	

    //update 201504
    //new kv left & right arrow
    $('.arrow-left').on('click', function(e){
        e.preventDefault();
        mySwiper.swipePrev();
    });
    $('.arrow-right').on('click', function(e){
        e.preventDefault();
        mySwiper.swipeNext();
    });


    //單品頁 相關商品
    var mediaWidth = Math.max( $(window).width(), window.innerWidth);
    $(window).resize(function(){
        mediaWidth = Math.max( $(window).width(), window.innerWidth);
    });

    var swiper_carousel = new Swiper('.item-slider-002', {
        slidesPerView: 5,
        slidesPerGroup:5,
        speed: 500,
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        roundLengths: true        
    });
    $('.a-l-1').on('click', function(e){
        e.preventDefault();
        swiper_carousel.swipePrev();
    })
    $('.a-r-1').on('click', function(e){
        e.preventDefault();
        swiper_carousel.swipeNext();
    })
    var swiper_carousel_2 = new Swiper('.item-slider-003', {
        slidesPerView: 5,
        slidesPerGroup:5,
        speed: 500,
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        roundLengths: true,
        resizeReInit: true
    });
    $('.a-l-2').on('click', function(e){
        e.preventDefault();
        swiper_carousel_2.swipePrev();
    })
    $('.a-r-2').on('click', function(e){
        e.preventDefault();
        swiper_carousel_2.swipeNext();
    })
    var swiper_carousel_3 = new Swiper('.item-slider-004', {
        slidesPerView: 5,
        slidesPerGroup:5,
        speed: 500,
        loop: true,
        grabCursor: true,
        calculateHeight: true,
        roundLengths: true,
        resizeReInit: true
    });
    $('.a-l-3').on('click', function(e){
        e.preventDefault();
        swiper_carousel_3.swipePrev();
    })
    $('.a-r-3').on('click', function(e){
        e.preventDefault();
        swiper_carousel_3.swipeNext();
    })

    $(window).resize(function() {
        swiper_carousel.reInit();
        swiper_carousel_2.reInit();
        swiper_carousel_3.reInit();
    });
    if(mediaWidth <= 768){
        swiper_carousel.params.slidesPerView=3;
        swiper_carousel.params.slidesPerGroup=3;
        swiper_carousel_2.params.slidesPerView=3;
        swiper_carousel_2.params.slidesPerGroup=3;
        swiper_carousel_3.params.slidesPerView=3;
        swiper_carousel_3.params.slidesPerGroup=3;
        swiper_carousel.reInit();
        swiper_carousel_2.reInit();
        swiper_carousel_3.reInit();
    }
    if(mediaWidth <= 568){
        swiper_carousel.params.slidesPerView=2;
        swiper_carousel.params.slidesPerGroup=2;
        swiper_carousel_2.params.slidesPerView=2;
        swiper_carousel_2.params.slidesPerGroup=2;
        swiper_carousel_3.params.slidesPerView=2;
        swiper_carousel_3.params.slidesPerGroup=2;
        swiper_carousel.reInit();
        swiper_carousel_2.reInit();
        swiper_carousel_3.reInit();  
    }
    //item-related tab
    item_related();
    function item_related(){
        $('.item-related-tabs li').on('click', function(){
            var tab_id = $(this).attr('data-tab');
            $('.item-related-tabs li').removeClass('active');
            $('.item-related .items').removeClass('active');
            $('.pc-item-related .items').removeClass('active');

            $(this).addClass('active');
            $("."+tab_id).addClass('active');
        })
    }    

})(jQuery);