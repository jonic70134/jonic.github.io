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

	// 看更多評價
	$('.review').slice(0, 5).css('display','flex');//一開始顯示5則
    $('.loadmore').click(function (e) {
        e.preventDefault();
        $('.review:hidden').slice(0, 5).slideDown().css('display','flex');//每按一次再多顯示五則
    });
	
});


