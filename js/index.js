$(function(){
	//頁面scroll
	$(".home").click(function(){
		$("html,body").stop(true,false).animate({scrollTop: ($('#content_one').offset().top)},500);
		return false;	
	});
	
	$(".work").click(function(){
		$("html,body").stop(true,false).animate({scrollTop: ($('#content_two').offset().top)},500);
		return false;	
	});
	
	$(".video").click(function(){
		$("html,body").stop(true,false).animate({scrollTop: ($('#content_three').offset().top)},500);
		return false;	
	});

	//回到頂端
	$(window).scroll(function(){
		var topHeight = $(window).scrollTop() + $(window).innerHeight()-120;
		if($(window).scrollTop()>10){
			$("#backtop").stop(true,false).animate({top:topHeight},800);
		}else{
			$("#backtop").stop(true,false).animate({top:-100},800);
		};
	});

	$("#backtop").click(function(){
		$("html,body").stop(true,false).animate({scrollTop:0},300);
	});
	$("#backtop").hover(function(){
		$(this).animate(200);
	},function(){
		$(this).animate(200);
	});
});
// by Jonic