jQuery(function($){
	//點選購物車彈出視窗選規格
	$('.item .fa-shopping-cart').on('click', function(e) {
		e.preventDefault();
		$.fancybox.open({
			src  : 'qmomo_fancybox.html#cart_popup',
			type : 'ajax',
			// opts : {
			// 	afterShow : function( instance, current ) {
			// 	console.info( 'done!' );
			// 	}
			// }
		});
	});

	// tab
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab_content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
	
});
