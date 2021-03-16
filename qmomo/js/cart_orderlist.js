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
	
});