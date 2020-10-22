jQuery(function($){
	var itemSlider = new Swiper('.item_top_left .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	$(".photo-other").on('click', '.thumb', function(){
		itemSlider.slideTo($(this).index()+1);
    });
    $('.photo-other .thumb').on('click', function(){
		$('.photo-other .thumb').removeClass('active');
		$(this).addClass('active');
	});	


	//選尺寸規格
	$('.value>li').click(function(){
		if($(this).hasClass('disabled')){
			return false;
		}else{
			$(this).addClass('active').siblings().removeClass('active').find('.fa-check').remove();
		}
	});

	//商品詳細內容tab
	$('.item_detail a').click(function(e){
		e.preventDefault();
		var detail_id = $(this).attr('data-detail');

		$('.item_detail a').removeClass('current');
		$('.detail_content').removeClass('current');

		$(this).addClass('current');
		$("#"+detail_id).addClass('current');
	})
	
});


