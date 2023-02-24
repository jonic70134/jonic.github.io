<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/inside-modify.css" rel="stylesheet" type="text/css">
<link href="../css/inside-home-modify.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">網站佈置<span class="divider"> &gt; </span></li> <li class="active">首頁佈置</li></ul>
</div>
<dl class="modify-tabs">
  <dd><a href="modify-wechat-homepage.php" class="active">首頁佈置</a></dd>
</dl>
<div class="modify-content">
  <div class="modify-button">
    <button class="btn-save-only"><i class="fa fa-refresh"></i>更新畫面</button>
    <button class="btn-preview" onclick="window.open('demo/mobile.php','_blank','toolbar=no,scrollbars=yes,resizable=no,top=300,left=100,width=335,height=480');"><i class="fa fa-mobile"></i>預覽</button>
    <button class="btn-submit"><i class="fa fa-check"></i>全頁發佈</button>
  </div>
  <div class="modify-detail" style="width:500px;">
    <!-- template5: wechat -->
    <div class="modify-block template-5">
      <!-- header -->
      <section class="template-row t-header">
        <div class="t-large-text">Header</div>
      </section>
      <!-- kv1 -->
      <section class="template-row t-kv t-kv1">
        <div class="t-col"><img src="http://placehold.it/600x360/"></div>
        <div class="t-kv-dots"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>
        <div class="edit-area">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-eye-slash"></i>隱藏</button>
        </div>
      </section>
      <!-- item 4 -->
      <section class="template-row t-item t-item4">
        
        <figure class="t-col t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/360x360/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/360x360/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/360x360/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <div class="edit-area">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-eye-slash"></i>隱藏</button>
        </div>
      </section>
      <!-- footer: copyright -->
      <section class="template-row t-footer">
        <div class="t-large-text">Footer</div>
      </section>
    </div>
  </div>
  <div class="modify-button">
    <button class="btn-save-only"><i class="fa fa-refresh"></i>更新畫面</button>
    <button class="btn-preview" onclick="window.open('demo/mobile.php','_blank','toolbar=no,scrollbars=yes,resizable=no,top=300,left=100,width=335,height=480');"><i class="fa fa-mobile"></i>預覽</button>
    <button class="btn-submit"><i class="fa fa-check"></i>全頁發佈</button>
  </div>
</div>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/inside-action.js"></script>
</body>
</html>