jQuery(function($){

	/* loading 動畫*/
	$('.wpf-loader-two').delay(200).fadeOut('slow'); 
	// $(window).load(function() { 
	// 	$('#wpf-loader-two').delay(200).fadeOut('slow'); // will fade out    
	// });

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
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.gotop').fadeIn();
		} else {
			$('.gotop').fadeOut();
		}
	});
//Click to scroll to top
	$('.gotop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	


	// 愛心class切換	
	$('.far.fa-heart').click(function(e){
		e.preventDefault();
		$(this).toggleClass("far fas");
	});
	


	//選尺寸規格
	$('.value>li').click(function(){
		if($(this).hasClass('disabled')){
			return false;
		}else{
			$(this).addClass('active').siblings().removeClass('active').find('.fa-check').remove();
		}
	});
});