$(function(){
	//頁面scroll
	$(".anchor-link li a").click(function(e){
		e.preventDefault();
		var aid = $(this).attr("href");
		$('html,body').stop(true,false).animate({scrollTop: $(aid).offset().top},500);
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

	$(".visual a").click(function(e){
		e.preventDefault();
	});

	
});
// by Jonic