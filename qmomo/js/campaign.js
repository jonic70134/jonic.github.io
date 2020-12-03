jQuery(function($){
	//點選購物車彈出視窗選規格
	$('.item .fa-shopping-cart').on('click', function(e) {
		e.preventDefault();
		$.fancybox.open({
			src  : 'qmomo_fancybox.html#cart_popup',
			type : 'ajax',
		});
	});

	var slider = new Swiper('.act-cart .swiper-container', {
		slidesPerView: 3,
    	spaceBetween: 0,
		navigation: {
			nextEl: '.swiper-right',
			prevEl: '.swiper-left',
		},
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


