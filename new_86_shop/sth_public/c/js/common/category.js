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


var swiper = new Swiper('.swiper-container', {
	// slidesPerView: 1,
 //    spaceBetween: 0,
 	loop: false,
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
			return '<span class="' + className + '">' + (index + 1) + '</span>';
		},
	},
	navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var $swiperSlideNum = $('.pc_category_banner_carousel .swiper-wrapper .swiper-slide').size(),
    $itemWidth = String(100/$swiperSlideNum)+'%';
$('.pc_category_banner_carousel .swiper-pagination-bullet').css({'width': $itemWidth});
