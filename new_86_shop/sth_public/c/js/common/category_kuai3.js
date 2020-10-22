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


var swiper_index_full = new Swiper('.pc_index_full .swiper-container',{
	autoHeight: true,
	loop: true,
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		renderBullet: function (index, className) {
			return '<span class="' + className + '">空氣清淨機大彙整</span>';
		},
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

//館頁左側menu
$('ul.sec-menu').each(function(){
	var LiNum = $(this).find($('ul.sec-menu > li')).length;
	if( LiNum > 5){    //超過5個就截斷
	  $('li', this).eq(4).nextAll().hide().addClass('toggleable');
	  $(this).append('<li class="more">更多<i class="fa fa-plus"></i></li>');    
	}
  });
  //class切換
  $('ul.sec-menu').on('click','.more', function(){
	if( $(this).hasClass('less') ){    
	  $(this).html('更多<i class="fa fa-plus"></i>').removeClass('less');    
	}else{
	  $(this).html('更多<i class="fa fa-minus"></i>').addClass('less'); 
	}
	$(this).siblings('li.toggleable').slideToggle(); 
  }); 