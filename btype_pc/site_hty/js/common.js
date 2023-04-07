// 分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});

// 標籤雲
var tagslide = new Swiper('.tag-cloud', {
    slidesPerView: 'auto',
    slidesPerGroup: 3,
    loop:true,
    navigation: {
        nextEl: ".tagcloud_btn_r",
    },
});

$(function() {
    var $img = $('.logo img');
    var blockSize = 5;
    var defaultRGB = {r:0,g:0,b:0};
    var canvas = document.createElement('canvas');
    var context = canvas.getContext && canvas.getContext('2d');
    var data, width, height, i = -4, length, rgb = {r:0,g:0,b:0}, count = 0;
    var $pby = $('.pby');
    var $pbybtn = $('.pbybtn');
    if (!context) {
      return defaultRGB;
    }
  
    height = canvas.height = $img[0].naturalHeight || $img[0].offsetHeight || $img[0].height;
    width = canvas.width = $img[0].naturalWidth || $img[0].offsetWidth || $img[0].width;
  
    context.drawImage($img[0], 0, 0);
  
    try {
      data = context.getImageData(0, 0, width, height);
    } catch(e) {
      /* security error, img on diff domain */
    //   alert('x');
      return defaultRGB;
    }
  
    length = data.data.length;
  
    var maxArea = 0;
    var maxRGB = {r:0,g:0,b:0};
    var areas = {};
  
    while ( (i += blockSize * 4) < length ) {
        var area = Math.floor((i + 4) / (blockSize * 4));
        var red = data.data[i];
        var green = data.data[i + 1];
        var blue = data.data[i + 2];
        var alpha = data.data[i + 3];
    
        if (alpha > 0) {
            if (!areas[area]) {
                areas[area] = {r:0,g:0,b:0,count:0};
            }
    
            areas[area].r += red;
            areas[area].g += green;
            areas[area].b += blue;
            areas[area].count++;
    
            if (areas[area].count > maxArea) {
                maxArea = areas[area].count;
                maxRGB = areas[area];
            }
        }
    }
  
    // ~~ used to floor values
    maxRGB.r = ~~(maxRGB.r / maxRGB.count);
    maxRGB.g = ~~(maxRGB.g / maxRGB.count);
    maxRGB.b = ~~(maxRGB.b / maxRGB.count);
  
    $pby.css('color', 'rgb('+maxRGB.r+','+maxRGB.g+','+maxRGB.b+')');
    $pbybtn.css('color', 'rgb('+maxRGB.r+','+maxRGB.g+','+maxRGB.b+')');
  });
  

// power by
var removeClass = true;
$('.pbybtn').click(function(e) {
    e.preventDefault();
    $('.pby_detail').addClass('active');
    removeClass = false;
});
$('.pbyclose').click(function(e) {
    e.preventDefault();
    $('.pby_detail').removeClass('active');
    removeClass = false;
});
$('html').click(function () {
    if (removeClass) {
        $(".pby_detail").removeClass('active');
    }
    removeClass = true;
});

// gotop
$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('.gotop').fadeIn(500);
    } else {
        $('.gotop').stop().fadeOut(500);
    }
});
$('.gotop').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 500);
    return false;
});