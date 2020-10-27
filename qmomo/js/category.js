jQuery(function($){
	//選尺寸規格
	$('.value>li').click(function(){
		if($(this).hasClass('disabled')){
			return false;
		}else{
			$(this).addClass('active').siblings().removeClass('active').find('.fa-check').remove();
		}
	});
	
});


