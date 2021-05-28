jQuery(function($){

	// 首頁Slider
	var bigslider = new Swiper('.big_slider .swiper-container', {
		slidesPerView: 1,
    	spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	
	//浮動廣告slider
	var popSlider = new Swiper('.pop_slider .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 30,
	});
	$(".pop-other").on('click', '.thumb', function(){
		popSlider.slideTo($(this).index());	
    });
    $('.pop-other .thumb').on('click', function(){
		$('.pop-other .thumb').removeClass('active');
		$(this).addClass('active');
	});	
	$('.pop_slider .thumb').hover(function() {
		$( this ).trigger( "click" );
	});
	$('.close_pop').click(function(){
		$('.pop_slider').hide();
	});


	$('.foot_link_open').click(function(){
		$('.float_block').slideDown();
	});
	// 商品分頁tab
	$('.nav_page_num').click(function(e){
		e.preventDefault();
		var tab_id = $(this).attr('data-page');

		$('.nav_page_num').removeClass('active');
		$('.index_items .items').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');

	});
	// 下一個tab
	$('.nav .next').click(function (e) {
		e.preventDefault();
        var currentTab = $(".nav_page_num.active");
        var newTab = currentTab.next();
        if(newTab.length > 0) {
            currentTab.removeClass('active');
            newTab.addClass('active');
        }
    });
	// 上一個tab
	$('.nav .prev').click(function (e) {
		e.preventDefault();
        var currentTab = $(".nav_page_num.active");
        var newTab = currentTab.prev();
        if(newTab.length > 0) {
            currentTab.removeClass('active');
            newTab.addClass('active');
        }
    });
});

$("document").ready(function() {
    setTimeout(function() {
        $('#index_ad').trigger('click');
    },10);
});