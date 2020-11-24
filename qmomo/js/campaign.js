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
		loop: true,
		navigation: {
			nextEl: '.swiper-right',
			prevEl: '.swiper-left',
		},
	});
});


