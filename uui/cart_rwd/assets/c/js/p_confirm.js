//CONFIRM JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
    //vat
    $('.checkbox-vat').click(function(){
        $('.md-enter-vat').toggleClass('is-show');
    });
    //vat
    $('.checkbox-cn-invoice').click(function(){
        $('.md-enter-cn-invoice').toggleClass('is-show');
    });
    //authorization and jump
    window.authorizeComplite = function() {
    	timerJump = setTimeout(function() {
	    location.href='final.html';
	},3000,function() {
	    clearTimeout(timerJump);
	});
    };
})(jQuery);