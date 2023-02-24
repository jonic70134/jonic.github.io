$('.num-cart').hide();
$('.value li').click(function(){
	if($(this).hasClass('disabled')){
		return false;
	}else{
    	$(this).addClass('active').siblings().removeClass('active');
	}
	if ($(this).hasClass('active')){
        $('.select-atr').hide();
        $('.num-cart').show();
    }        
});
$('.select-atr').click(function(){
	alert('請選擇商品規格(顏色/尺寸)')
});