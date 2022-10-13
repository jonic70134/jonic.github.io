//menu
$('.btn-menu').click(function(e) {
    e.preventDefault();
    $('.md_nav_menu').stop(true,false).toggleClass("active");
    $(".body_container").toggleClass("fixed");
    $("body").toggleClass("o_hidden");
    return false;
});

var itemswiper = new Swiper('.md-site-sliders > .swiper-container',{
    loop: true,
    loopedSlides: 10,
    pagination: {
        el: '.md-site-sliders .swiper-pagination',
        clickable: true,
    },
})
// 相關商品
var relateslide = new Swiper('.related-slide > .swiper-container',{
    slidesPerView: 3,
    spaceBetween: 5 ,
    freeMode: true,
    pagination: {
        el: '.md-item-related .swiper-pagination',
        clickable: true,
    },
})

//選擇規格視窗
$('#colorsize').click(function(e){
    e.preventDefault();
    $.fancybox.open({
        href : '#popup_colorsize',
        height:'auto',
        wrapCSS:'fancybox-colorsize',
        'closeBtn' : false ,
        padding:0,
        margin: [ 0,0,0,0 ],
    });
});

$('#warranty').click(function(e){
    e.preventDefault();
    $.fancybox.open({
        href : '#popup_warranty',
        height:'300px',
        wrapCSS:'fancybox-warranty',
        height:'auto',
        padding:0,
        margin: [ 0,0,0,0 ],
    });
});

$('.chos_colorsize').click(colorsizeSlide,function(){
    colorsizeSlide.slideTo(1);
});
$('#slide2').click(colorsizeSlide,function(){
    colorsizeSlide.slideTo(2);
});ˋ
$('#slide3').click(colorsizeSlide,function(){
    colorsizeSlide.slideTo(3);
});

//選規格
$('.value>li').click(function(){
	var img = "<i class='fa fa-check'></i>";
	if($(this).hasClass('disabled')){
		return false;
	}else{
    	$(this).addClass('active').append(img).siblings().removeClass('active').find('.fa-check').remove();
	}
});


// // 選擇贈品視窗
// $('.spec_sec .gift').fancybox({
//     width:250,
//     height:'auto',
//     padding:0,
//     margin: [ 20,20,20,20 ],
//     autoSize: false,
//     closeBtn: false,
//     helpers: {
//         overlay: {
//             locked: true,
//             css:{
//                 'background' : 'rgba(0, 0, 0, 0)'
//             }
//         }
//     }
// });
// // 選擇加購品視窗
// $('.spec_sec .gift').fancybox({
//     width:250,
//     height:'auto',
//     padding:0,
//     margin: [ 20,20,20,20 ],
//     autoSize: false,
//     closeBtn: false,
//     helpers: {
//         overlay: {
//             locked: true,
//             css:{
//                 'background' : 'rgba(0, 0, 0, 0)'
//             }
//         }
//     }
// });


