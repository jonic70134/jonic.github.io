jQuery(function($){
	var itemSlider = new Swiper('.item_top_left .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
	});
	$(".photo-other").on('click', '.thumb', function(){
		itemSlider.slideTo($(this).index()+1);
    });
    $('.photo-other .thumb').on('click', function(){
		$('.photo-other .thumb').removeClass('active');
		$(this).addClass('active');
	});	

	var detailSlider = new Swiper('.detail_slider .swiper-container', {
		slidesPerView: 5,
		slidesPerColumn: 1,
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	//商品詳細內容tab
	$('.item_detail a').click(function(e){
		e.preventDefault();
		var detail_id = $(this).attr('data-detail');

		$('.item_detail a').removeClass('current');
		$('.detail_content').removeClass('current');

		$(this).addClass('current');
		$("#"+detail_id).addClass('current');
	});
	
	// 顏色選項 tab
	$('.color > li').click(function(e){
		e.preventDefault();
		var color_conten_id = $(this).attr('data-color');
		$('.color > li').removeClass('active');
		$('.color_block > ul').removeClass('active');
		$(this).addClass('active');
		$("#"+color_conten_id).addClass('active');
	});

	// 尺寸選項 tab
	$('.size_link > li').click(function(e){
		e.preventDefault();
		var size_conten_id = $(this).attr('data-size');
		$('.size_link > li').removeClass('active');
		$('.size_content').removeClass('active');
		$(this).addClass('active');
		$("#"+size_conten_id).addClass('active');
	});
	

	// 商品數量加減
	$('.quantity-decrease').click(function () {
		var $input = $(this).parent().find('.quantity-input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.quantity-increase').click(function () {
		var $input = $(this).parent().find('.quantity-input');
		var count = parseInt($input.val()) + 1;
		count = count > 5 ? 5 : count;
		$input.val(count);
		$input.change();
		return false;
	});

});


