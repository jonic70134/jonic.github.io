var swiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
});


// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});

$('.search').click(function(){
  $('body').removeClass();
  $('body').addClass('scrollno');
});
$('.close').click(function(){
  $('body').removeClass();
  $('body').addClass('scrollyes');
});