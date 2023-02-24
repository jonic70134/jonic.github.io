<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("../frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("../frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="/product/add-product.html">新增商品 (單筆/大量)</a><span class="divider"> &gt; </span></li> <li class="active">新增單筆商品</li></ul>
</div>
<section class="template-content">
  <div class="add-product">
    <h1 class="title">填寫商品名稱</h1>
    <dl class="form-element add-product-form">
      <dd>
        <input type="text" class="input-exlarge input-product-name" size="50" placeholder="商品名稱">
        <span class="product-brand hide">
          <input type="text" class="input-exlarge input-product-brand input-search" size="11" placeholder="品牌(可不填)">
          <dl class="related-searches" style="top: 29px; left: 6px;">
            
            <dd>dignissimos ut</dd>
            
            <dd>ut illo</dd>
            
            <dd>nesciunt pariatur</dd>
            
          </dl>
        </span>
        <span class="product-size hide"><input type="text" class="input-exlarge input-product-size" size="17" placeholder="型號/容量(可不填)"></span>
        <a class="link-tiny go-add-brand">我要加品牌</a>
        <a class="link-tiny go-add-size">我要加型號或容量</a>
      </dd>
      <dd>
        <input type="radio" id="radio1" name="radiogroup" checked>
        <label for="radio1">商品要自行出貨</label>
        &nbsp;&nbsp;
        <input type="radio" id="radio2" name="radiogroup">
        <label for="radio2">商品要寄倉在uitox</label>
        <a class="link-question">
          <i class="fa fa-question-circle"></i>
          <div class="tip-add-product">
            <p>商品要自行出貨：<br>可以將商品入uitox倉庫，由uitox幫忙安排寄送</p>
            <p>商品要寄倉在uitox：<br>不用將商品入uitox倉庫，由廠商自己安排寄送</p>
          </div>
        </a>
      </dd>
    </dl>
    <div class="template-button">
      <button class="btn-save-only" onclick="location.href='add-product-detail.php'">下一步&nbsp;&nbsp;<i class="fa fa-caret-right"></i></button>
    </div>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/template-action.js"></script>
<script>
var inputProductBrand = $('.product-brand');
var inputProductSize = $('.product-size');
//+品牌
$('body').on('click','.go-add-brand',function() {
  $(this).hide();
  inputProductBrand.removeClass('hide');
  $('.input-product-name').after(inputProductBrand);
  if (!inputProductSize.hasClass('hide')) {
    $('.add-product').width(650);
  }
  else {
    $('.add-product').width(600);
  }
});
//+型號或容量
$('body').on('click','.go-add-size',function() {
  $(this).hide();
  inputProductSize.removeClass('hide');
  if (!inputProductBrand.hasClass('hide')) {
    $('.input-product-brand').after(inputProductSize);
    $('.add-product').width(650);
  }
  else {
    $('.input-product-name').after(inputProductSize);
    $('.add-product').width(600);
  };
});
//品牌下拉
$('.input-search').bind('keyup change',function(){
    $(this).next('.related-searches').slideDown(100);
    if ($(this).val() == '') {
        $(this).next('.related-searches').slideUp(50);
    };
}).blur(function() {
    $(this).next('.related-searches').slideUp(50);
});
</script>
</body>
</html>