jQuery(function($){
	/* loading 動畫*/
	$('.wpf-loader-two').delay(200).fadeOut('slow'); 

	$(".line_app").hover(function(){
			$(this).find(".line_box").stop().fadeIn(200);
		},function(){
			$(this).find(".line_box").stop().fadeOut(200);
		}
	);
	$(".cart").hover(function(){
			$(this).find(".cartbox").stop().fadeIn(200);
		},function(){
			$(this).find(".cartbox").stop().fadeOut(200);
		}
	);


	$(".member").hover(function(){
			$(this).find(".member_box").stop().fadeIn(200);
		},function(){
			$(this).find(".member_box").stop().fadeOut(200);
		}
	);


// tab
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab_content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

//  下移300px後gotop按鈕出現
	// $(window).scroll(function(){
	// 	if ($(this).scrollTop() > 300) {
	// 		$('.float_block').fadeIn();
	// 	} else {
	// 		$('.float_block').fadeOut();
	// 	}
	// });
	//Click to scroll to top
	$('.fa-chevron-up').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	$('.fa-chevron-down').click(function(){
		$('html, body').animate({scrollTop : $(document).height()},800);
		return false;
	});
	
	// 愛心class切換	
	$('.far.fa-heart').click(function(e){
		e.preventDefault();
		$(this).toggleClass("far fas");
	});

	//選尺寸規格
	$('.value > li').click(function(){
		if($(this).hasClass('disabled')){
			return false;
		}else{
			$(this).addClass('active').siblings().removeClass('active').find('.fa-check').remove();
		}
	});
	// 顏色選項 tab
	$('.color_link > li').click(function(e){
		e.preventDefault();
		var color_conten_id = $(this).attr('data-color');
		$('.color_link > li').removeClass('active');
		$('.color_content').removeClass('active');
		$(this).addClass('active');
		$('#'+color_conten_id).addClass('active');
	});
	// 尺寸選項 tab
	$('.size_link > li').click(function(e){
		e.preventDefault();
		var size_conten_id = $(this).attr('data-size');
		$('.size_link > li').removeClass('active');
		$('.size_content').removeClass('active');
		$(this).addClass('active');
		$('#'+size_conten_id).addClass('active');
	});
	// ciciza連結關閉
	// $('.ciciza_block .fa-times').click(function(){
	// 	$('.ciciza_block').hide();
	// });

	//點選商品圖彈出預覽畫面
	$('.item .photo a').on('click', function(e) {
		e.preventDefault();
		$('.cart_popup').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.pop_close').on('click', function(e) {
		e.preventDefault();
		$('.cart_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});
	// 預覽slider
	var galleryThumbs = new Swiper('.gallery_thumbs', {
		spaceBetween: 5,
		slidesPerView: 5,
		watchOverflow: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		direction: 'vertical',
	});
  
	var galleryTop = new Swiper('.gallery_top', {
		spaceBetween: 10,
		observer:true,
    	observeParents:true,
		navigation: {
			nextEl: '.gallery_top .swiper-button-next',
			prevEl: '.gallery_top .swiper-button-prev',
		},
		thumbs: {
			swiper: galleryThumbs
		}
	});
	// menu開合
	$('.btn_menu').click(function(e) {
		e.preventDefault();
		$('.site-menu').stop(true,false).toggleClass("active");
	});
	$('.main_menu > li > a').click(function() {
		toggleMenu($(this), $('.sub_menu'));
		if($(this).children('i').css( 'transform' ) == 'none'){
			$(this).children('i').css('transform','rotate(90deg)');
		} else {
			$(this).children('i').css('transform','');
		}
	});

	function toggleMenu(obj, nextObj) {
		isNavToggle = false;
		if (!obj.parent().find(nextObj).hasClass('is-expand')) {
			nextObj.removeClass('is-expand');
			obj.parent().find(nextObj).addClass('is-expand');
		}
		else {
			nextObj.removeClass('is-expand');
		}
		setTimeout(function() {
			//when menu expanded, get obj position
			posTarget = obj.offset().top;
			scrollToPosition(obj);
		}, 400);
	};
	// 搜尋框開合
	$('.search .fa-search').click(function(e) {
		e.preventDefault();
		$('.search-input').stop(true,false).toggleClass("active");
	});
});