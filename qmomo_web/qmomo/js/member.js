jQuery(function($){
	//根據點選的連結增加class=active
	$('.mem_link a[href^="' + location.pathname.slice(7,16) + '"]').addClass('active');
	//新增收件人&統一編號彈出視窗
	$('#mem_point').click(function(e){
		e.preventDefault();
		$('.mem_point_pop').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.location_pop_btn').click(function(e){
		e.preventDefault();
		$('#recipient_pop').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.mem_pop_btn').click(function(e){
		e.preventDefault();
		$('#mem_data_pop').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.location_pop .bot_func a').click(function(e) {
		e.preventDefault();
		$('.location_pop').css('visibility','hidden');
		$('body').css('overflow','auto');
	});

	// 優惠券tab
	$('.coupon_detail a').click(function(e){
		e.preventDefault();
		var detail_id = $(this).attr('data-detail');

		$('.coupon_detail a').removeClass('active');
		$('.detail_content').removeClass('active');

		$(this).addClass('active');
		$("#"+detail_id).addClass('active');
	}); 

	// 訂單查詢tab
	$('.mem_od_detail a').click(function(e){
		e.preventDefault();
		var detail_id = $(this).attr('data-detail');

		$('.mem_od_detail a').removeClass('active');
		$('.detail_content').removeClass('active');

		$(this).addClass('active');
		$("#"+detail_id).addClass('active');
	}); 

	//會員權益tab
	$('.mem_pra_detail a').click(function(e){
		e.preventDefault();
		var detail_id = $(this).attr('data-detail');

		$('.mem_pra_detail a').removeClass('active');
		$('.detail_content').removeClass('active');

		$(this).addClass('active');
		$("#"+detail_id).addClass('active');
	}); 

	// 會員資料tab
	$('.mem_info_detail a').click(function(e){
		e.preventDefault();
		var detail_id = $(this).attr('data-detail');

		$('.mem_info_detail a').removeClass('active');
		$('.detail_content').removeClass('active');

		$(this).addClass('active');
		$("#"+detail_id).addClass('active');
	}); 
});