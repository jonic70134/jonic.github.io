//FINAL JS @ UITOX CART: Cart action (c) 2015 by Arashis Shen @ UITOX Corp.
(function($){
	window.paperInvoice = function() {
		if(!confirm('您的發票將會隨貨寄送。\n\n提醒您：個人戶(二聯式)發票一經開立，不得任意更改為公司戶(三聯式)發票。')) {
		    elecInvoice();
		};
	};
	window.elecInvoice = function() {
		alert('出貨後將開立電子發票。');
	};
})(jQuery);