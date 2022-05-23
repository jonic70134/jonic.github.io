
// 頁首標籤slider
var tagslide = new Swiper('.tag-slide .swiper-container', {
    slidesPerView: 10,
    spaceBetween: 10,
    freeMode: true,
    freeModeSticky:true,
    navigation: {
        nextEl: '.icon-next',
    }
});

// 智慧分類menu開合
$('.nav-menu > a').click(function() {
    $('.menu-one').slideToggle();
});

//item main 選規格
$('.value>li').click(function(){
	var img = "<i class='icon icon_check'></i>";
	if($(this).hasClass('disabled')){
		return false;
	}else{
    	$(this).addClass('active').append(img).siblings().removeClass('active').find('.icon_check').remove();
	}
});



$(function(){
// 數量加減
	$('.quantity-increase').click(function(){
		var html = $('#quantity-alert').html();
		$(this).css('position','relative');
		var input = $(this).prev('.quantity-input');
		if(input.val()>=10){
			$(this).append(html);
			setTimeout(function(){
				$('.quantity-alert').fadeOut('slow');
			}, 2500);   
		}else{
			input.val(parseInt(input.val())+1);
		}
	})
	$('.quantity-decrease').click(function(){
		var input = $(this).next('.quantity-input');
		if(input.val()<=1){
			return false;
		}else{
			input.val(parseInt(input.val())-1);
		}
	});
//單品圖片展示
	var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 0,
      loop: true,
	  loopedSlides: 10,
      navigation: {
        nextEl: '.nextBtn',
        prevEl: '.prevBtn',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      slidesPerView:'auto',
      spaceBetween: 10,
      touchRatio: 0.2,
      slideToClickedSlide: true,
      loop: true,
	  loopedSlides: 10
    });
	
    if($('.gallery-thumbs .swiper-slide').length == 1) {
        $('.gallery-thumbs').hide();
        $('.nextBtn').hide();
        $('.prevBtn').hide();
    }
    else {
        $('.gallery-thumbs').show();
        $('.nextBtn').show();
        $('.prevBtn').show();
    }
	galleryTop.controller.control = galleryThumbs;
	galleryThumbs.controller.control = galleryTop;
    
  
    $(".colorsize li").click(function(){
        var index=$(this).attr('data-href');
        galleryTop.slideTo(index);
     });


// 追蹤商品
$(".btn-fav").click(function(e){
    e.preventDefault();
    $(this).text($(this).text() == '已追蹤' ? '追蹤商品' : '已追蹤');
    $(this).toggleClass('icon_track icon_track_plus');
});


    //item-related tab
        $('.item-related-tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');
            $('.item-related-tabs li').removeClass('active');
            $('.item-related .items').removeClass('active');
            $('.pc-item-related .items').removeClass('active');

            $(this).addClass('active');
            $("."+tab_id).addClass('active');
        });
        
        $('.item_tab_t').click(function(){
            var tab_id = $(this).attr('data-tab');
            $('.item_tab_t').removeClass('active');
            //$('.item-related .items').removeClass('active');
            $('.item_detail .item').removeClass('active');

            $(this).addClass('active');
            $("."+tab_id).addClass('active');
        });
    //請選擇尺寸按下去滑動到規格品區塊
    $(".btn-select-pink").click(function() {
        $('html, body').animate({
            scrollTop: $(".buy_product_style").offset().top
        }, 1000);
    });



  //贈品
  var item_add = new Swiper('.pc-item-add .swiper-container', {
    slidesPerView: 5,
    spaceBetween: 5,
    slidesPerGroup: 1,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.fa-angle-right',
      prevEl: '.fa-angle-left',
    },
  });


//   贈品勾選連動
$(".gift_view input[type='checkbox']").change(function () {
    var btnCart = "選擇";
    var btnNotselect = "已選擇";    
    var gift_view_chkid = $(this).attr('id').slice(5);
    var checkedLength = $(".gift_view input[type='checkbox']:checked").length;
    var gift_text = $(this).closest(".item").find("h1").text();
    var gifthtml = '<div class="add_line"><div class="add_chk_block"><input type="checkbox" id="gift_chk_'+gift_view_chkid+'" class="add_chk" checked="checked"><label for="gift_chk_'+gift_view_chkid+'" class="add_label"></label> <p>'+gift_text+'</p></div></div>';
    if($(this).is(":checked")){
        $(".gift_chk_area .add_list").show();
        $(".gift_chk_area .emp_info").hide();
        $("#gift_chk_" + gift_view_chkid).prop( "checked", true );
        $("#gift_" + gift_view_chkid).parent(".item").addClass("active");
        $("#gift_"+ gift_view_chkid + "~.info .btn-notselect").removeClass("btn-notselect").addClass("btn-carted").text(btnNotselect);
        $(".gift_chk_area .add_list dt").after(gifthtml);
    }
    else{
        $("#gift_chk_" + gift_view_chkid).prop( "checked", false );
        $("#gift_" + gift_view_chkid).parent(".item").removeClass("active");
        $("#gift_"+ gift_view_chkid + " ~.info .btn-carted").removeClass("btn-carted").addClass("btn-notselect").text(btnCart);
        $("#gift_chk_00"+this.id.slice(7)).closest(".addline").remove();
    };

    if (checkedLength > 0){
        $(".gift_chk_area .add_list").show();
        $(".gift_chk_area .emp_info").hide();
      }
      else{
        $(".gift_chk_area .add_list").hide();
        $(".gift_chk_area .emp_info").show();
      }
});


//   加購勾選連動
$(".add_view input[type='checkbox']").change(function () {
    var btnCart = "加入選購";
    var btnNotselect = "已加入";    
    var add_view_chkid = $(this).attr('id').slice(4);
    var checkedLength = $(".add_view input[type='checkbox']:checked").length;
    var add_text = $(this).closest(".item").find("h1").text();
    var addhtml =
     '<div class="add_line"><div class="add_chk_block"><input type="checkbox" id="add_chk_'+add_view_chkid+'" class="add_chk" checked="checked"><label for="add_chk_'+add_view_chkid+'" class="add_label"></label> <p>'+add_text+'</p></div>'
    +'<div class="quantity">'
    +'<span class="quantity-decrease"><i class="icon icon_minus"></i></span>'
    +'<input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">    '
    +'<span class="quantity-increase"><i class="icon icon_plus"></i></span></div></div>';
    if($(this).is(":checked")){
        $(".add_chk_area .add_list").show();
        $(".add_chk_area .emp_info").hide();
        $("#add_chk_" + add_view_chkid).prop( "checked", true );
        $("#add_" + add_view_chkid).parent(".item").addClass("active");
        $("#add_"+ add_view_chkid + "~.info .btn-notselect").removeClass("btn-notselect").addClass("btn-carted").text(btnNotselect);
        $(".add_chk_area .add_list dt").after(addhtml);
    }else{
        $("#add_chk_" + add_view_chkid).prop( "checked", false );
        $("#add_" + add_view_chkid).parent(".item").removeClass("active");
        $("#add_"+ add_view_chkid + " ~.info .btn-carted").removeClass("btn-carted").addClass("btn-notselect").text(btnCart);
        $("#add_chk_00"+this.id.slice(6)).closest(".add").remove();
    };

    if (checkedLength > 0){
        $(".add_chk_area .add_list").show();
        $(".add_chk_area .emp_info").hide();
    }else{
        $(".add_chk_area .add_list").hide();
        $(".add_chk_area .emp_info").show();
    }
});


//  加購的看更多
$(".add_list .more").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".add_view").offset().top
    }, 1000);
});

// 看贈品
$(".btn-notgift").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".gift_view").offset().top
    }, 1000);
});

// 看加購品
$(".btn-notadd").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".add_view").offset().top
    }, 1000);
});

// 加購看更多折疊
$('.add_view .items').each(function(){
    var addNum = $(this).find($('.add_view .item')).length;
    var moreBlock= '<a href="#" class="more"><span class="more_txt">看更多</span><i class="icon icon_more"></i></a>';
	if( addNum > 5){    //超過3個就截斷
	  $('.item', this).eq(4).nextAll().hide().addClass('toggleable');
	  $(this).append(moreBlock);    
	}
  });
  $('.add_view .items .more').click(function(e){
      e.preventDefault();
	$(this).hide();    
	$(this).siblings('.item.toggleable').slideToggle(); 
  }); 


});



