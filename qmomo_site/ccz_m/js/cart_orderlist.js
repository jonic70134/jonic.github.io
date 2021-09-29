jQuery(function($){
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
		count = count > 10 ? 10 : count;
		$input.val(count);
		$input.change();
		return false;
	});


	//訊息提示小視窗
	$('.quantity-add .quantity-increase').click(function () {
		var maxItemNum=$('.quantity-add .quantity-input').val();
		if(maxItemNum >= 10){
			$('.alert_window').fadeIn('fast');
			setTimeout(function(){	
				$('.alert_window').fadeOut('fast');
			}, 2000);
		}else{
			$('.alert_window').hide();
		}
	});
	
	$('.alert_close').click(function () {
		$('.alert_window').hide();
	});

	//7-11選擇門市
	$('.deliver_711').on('click', function(e) {
		e.preventDefault();
		$('.deliver_711_popup').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.pop_close').on('click', function(e) {
		e.preventDefault();
		$('.deliver_711_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});
	$('.deliver_complete').on('click', function(e) {
		e.preventDefault();
		$('.deliver_711_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});

	// 全家選擇門市
	$('.deliver_family').on('click', function(e) {
		e.preventDefault();
		$('.deliver_family_popup').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.pop_close').on('click', function(e) {
		e.preventDefault();
		$('.deliver_family_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});
	$('.deliver_complete').on('click', function(e) {
		e.preventDefault();
		$('.deliver_family_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});

	// 選擇常用收件人
	$('.deliver_pop').on('click', function(e) {
		e.preventDefault();
		$('.deliver_use_popup').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.pop_close').on('click', function(e) {
		e.preventDefault();
		$('.deliver_use_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});
	$('.deliver_complete').on('click', function(e) {
		e.preventDefault();
		$('.deliver_use_popup').css('visibility','hidden');
		$('body').css('overflow','auto');
	});

	// 選擇常用統一編號
	$('.invoice_pop').on('click', function(e) {
		e.preventDefault();
		$('.com_invoice_pop').css('visibility','visible');
		$('body').css('overflow','hidden');
	});
	$('.pop_close').on('click', function(e) {
		e.preventDefault();
		$('.com_invoice_pop').css('visibility','hidden');
		$('body').css('overflow','auto');
	});
	$('.deliver_complete').on('click', function(e) {
		e.preventDefault();
		$('.com_invoice_pop').css('visibility','hidden');
		$('body').css('overflow','auto');
	});

	// 三聯式發票div開合
	$("input[name$='invoice']").click(function() {	
		var radio_status = $('#invoice2').is(':checked');
		if (radio_status){
			$(".com_invoice").show();
		}else{
			$(".com_invoice").hide();
		}
    });
});