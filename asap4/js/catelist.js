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

// 加載更多商品按鈕
$(".brandlist").each(function (index) {
    $(this).find('.items .item:lt(' + $(this).attr('data-brand') + ')').show(); // 取data-brand數字決定一開始要show幾個
});   

$('.btn-load').click(function () {
    var $brandList= $(this).closest('.brandlist');
    var x= parseInt($brandList.attr('data-brand'),10);
    var itemSize=$brandList.find('.items .item').size();        
    x = (x + 10 <= itemSize) ? x + 10 : itemSize;
    $brandList.attr('data-brand',x)
    $brandList.find('.items .item:lt(' + x + ')').slideDown();
});

$('.btn-load').click(function(){
    var html = 
    '<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_09.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>'
    +'<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_01.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>'
    +'<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_02.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>'
    +'<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_08.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>'
    +'<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_03.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>'
    +'<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_06.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>'
    +'<a href="#" class="item"><p class="photo"><span class="float"></span><img src="img/sample/item_07.jpg" alt="商品名稱" title="商品名稱" itemprop="image"/></p>'
    +'<div class="info"><h3 class="name" itemprop="name">商品名稱商品名稱商品商品名稱商品名稱商品</h3><div class="price" itemprop="price">999,999</div></div></a>';

    $(".items").append(html);
    
})
