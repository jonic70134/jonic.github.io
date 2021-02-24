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
	});

	
	
});



/* search */
var search = (function(){
	var _input = $('.search input'),
		_query_keyword = '',_input_focus = function(){
            alert('請輸入搜尋關鍵字');
            _input.focus();
        },_do_search = function(){
    		var q = $('.search input').val();
            if (q == undefined || q.trim() == ''){
                _input_focus();
            }else{
     			document.location = '/query?q=' + encodeURIComponent(q);
            }
        }, _split_search_word = function(){
            var query = document.location.search,
        		params = query.split('&');
    			for(var key in params){
                	var pair = params[key].split('='),str = decodeURIComponent(pair[1]);
                    /* 檢查是否來自搜尋關鍵字 */
                    if (pair[0] !== '?q') return '';
                    if (str.trim() == ''){
                        _input_focus();
                        return '';
                    }
                    _query_keyword = str;
                    return str;
                }
                return '';
        };

        /* init once */
        if ( ! String.prototype.trim){
        	String.prototype.trim = function(){
            	return this.replace(/^\s+|\s+$/g, '');
        	};
        }
    	return {
            'action': function(){
            	_do_search();
            },
            'get_search_word': function(){
                if (_query_keyword !== ''){
                    return _query_keyword;
                }
            	return _split_search_word();
            }
        };
})();

$(document).ready(function(){
    /* search enter */
    $('.search input').keydown(function(e){
        if (e.which == 13)
        {
            search.action();
        }
    });

    /* search button */
    $('.search a').click(function () {
        search.action();
    });

    if (document.location.search !== ''){
        var key_word = search.get_search_word();
        if (key_word !== ''){
            $('.search input').val(key_word);
        }
	}
});