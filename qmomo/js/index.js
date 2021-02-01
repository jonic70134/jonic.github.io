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
	// tab
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab_content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
});

$("document").ready(function() {
    setTimeout(function() {
        $('#index_ad').trigger('click');
    },10);
});