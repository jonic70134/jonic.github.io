<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">網站管理<span class="divider"> &gt; </span></li> <li class="active">首頁佈置</li></ul>
</div>
<div class="select-site">
  <button class="btn-switch" onclick="openCover();"><i class="fa fa-share"></i>切換至我的其他網站</button>
</div>
<dl class="modify-tabs">
  <dd><a href="modify-homepage.php" class="active">首頁佈置</a></dd>
  <dd><a href="#" class="go-popup" data-width="800" data-href="popup/modify-head.php">版面設定</a></dd>
  <dd><a href="#" class="go-popup" data-width="800" data-href="popup/modify-sitemap-global.php">編輯網站導覽</a></dd>
  <dd><a href="modify-homepage-permission.php">權限設定</a></dd>
  <dd><a href="#" class="go-popup" data-width="800" data-href="popup/modify-log.php">修改記錄</a></dd>
</dl>
<div class="modify-content">
  <div class="modify-button">
    <button class="btn-save-only"><i class="fa fa-refresh"></i>更新畫面</button>
    <button class="btn-preview" onclick="window.open('demo/index.php')"><i class="fa fa-desktop"></i>網頁版預覽</button>
    <button class="btn-preview" onclick="window.open('demo/mobile.php','_blank','toolbar=no,scrollbars=yes,resizable=no,top=300,left=100,width=335,height=480');"><i class="fa fa-mobile"></i>手機版預覽</button>
    <button class="btn-submit"><i class="fa fa-check"></i>全頁發佈</button>
  </div>
  <div class="modify-detail">
    <!-- template1: adi -->
    <div class="modify-block template-1">
      <!-- ad1 -->
      <section class="template-row t-ad t-ad1">
        <div class="t-col"><img src="http://placehold.it/1220x60/" width="1000"></div>
        <div class="edit-area" data-name="版頭橫幅AD">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
          <!--div class="tooltip">版頭橫幅AD：可設定1組版頭橫幅</div-->
        </div>
      </section>
      <!-- header -->
      <section class="template-row t-header">
        <div class="t-large-text">Header</div>
        <div class="edit-area" data-name="網站MENU">
          <button class="btn-edit" onclick="location.href='modify-menu.php'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </div>
      </section>
      <!-- header1 -->
      <!--section class="template-row t-header t-header1">
        <div class="t-logo"><img src="/img/template-logo.png" width="200"></div>
        <div class="t-search">
          <span class="t-search-input">商品搜尋</span><i class="t-button fa fa-search"></i>
          <div class="t-keywords"><a>Keyword1</a><a>Keyword2</a><a>Keyword3</a></div>
        </div>
        <ul class="t-nav">
          
          <li><a>Navigation1</a></li>
          
          <li><a>Navigation2</a></li>
          
          <li><a>Navigation3</a></li>
          
          <li><a>Navigation4</a></li>
          
          <li><a>Navigation5</a></li>
          
        </ul>
        <div class="t-user-function">
          <a>登入</a>
          <a>註冊</a>
          <a>查訂單</a>
          <a>帳戶</a>
          <a class="t-cart"><span class="quantity">99</span><i class="fa fa-shopping-cart fa-flip-horizontal"></i>購物車</a>
        </div>
        <div class="edit-area" data-name="網站MENU">
          <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </div>
      </section-->
      <!-- header2 -->
      <!--section class="template-row t-header t-header2">
        <div class="t-logo"><img src="/img/template-logo.png" width="200"></div>
        <div class="t-cart"><span class="quantity">99</span><i class="fa fa-shopping-cart fa-flip-horizontal"></i></div>
        <div class="t-user-function"><i class="fa fa-user"></i></div>
        <div class="t-search">
          <span class="t-search-input">商品搜尋</span><i class="t-button fa fa-search"></i>
          <div class="t-keywords"><a>Keyword1</a><a>Keyword2</a><a>Keyword3</a></div>
        </div>
        <ul class="t-nav">
          
          <li><a>Navigation1</a></li>
          
          <li><a>Navigation2</a></li>
          
          <li><a>Navigation3</a></li>
          
          <li><a>Navigation4</a></li>
          
          <li><a>Navigation5</a></li>
          
        </ul>
        <div class="edit-area" data-name="網站MENU">
          <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </div>
      </section-->
      <!-- kv1 -->
      <section class="template-row t-kv t-kv1">
        <div class="t-col"><img src="http://placehold.it/1220x530/"></div>
        <div class="t-kv-dots"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>
        <div class="edit-area" data-name="輪播廣告">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">輪播廣告：可設定6組圖輪播</div-->
        </div>
      </section>
      <!-- kv2 -->
      <section class="template-row t-kv t-kv2">
        <div class="t-col"><img src="http://placehold.it/1220x549/"></div>
        <div class="t-kv-dots"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>
        <div class="edit-area" data-name="輪播廣告">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">輪播廣告：可設定6組圖輪播</div-->
        </div>
      </section>
      <!-- kv3 -->
      <section class="template-row t-kv t-kv3">
        <div class="t-kv3-left">
          <div class="t-col t-kv-large"><img src="http://placehold.it/820x500/"></div>
          <div class="edit-area" data-name="輪播廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
            <!--div class="tooltip">輪播廣告：可設定6組圖輪播</div-->
          </div>
        </div>
        <div class="t-kv3-right">
          
          <div class="t-col t-kv-small"><img src="http://placehold.it/380x150/"></div>
          
          <div class="t-col t-kv-small"><img src="http://placehold.it/380x150/"></div>
          
          <div class="t-col t-kv-small"><img src="http://placehold.it/380x150/"></div>
          
          <div class="edit-area" data-name="輪播廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>     
          </div>
        </div>
      </section>
      <!-- ad2 -->
      <section class="template-row t-ad t-ad2">
        <div class="t-col t-col-2"><img src="http://placehold.it/600x300/"></div><div class="t-col t-col-2"><img src="http://placehold.it/600x300/"></div>
        <div class="edit-area" data-name="版頭橫幅AD">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">版頭橫幅AD：可設定1組版頭橫幅</div-->
        </div>
      </section>
      <!-- ad3 -->
      <section class="template-row t-ad t-ad3">
        <div class="t-bloc-title">Title Title Title</div>
        <div class="t-col t-col-5"><img src="http://placehold.it/220x220/"></div><div class="t-col t-col-5"><img src="http://placehold.it/220x220/"></div><div class="t-col t-col-5"><img src="http://placehold.it/220x220/"></div><div class="t-col t-col-5"><img src="http://placehold.it/220x220/"></div><div class="t-col t-col-5"><img src="http://placehold.it/220x220/"></div>
        <div class="edit-area" data-name="版頭橫幅AD">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">版頭橫幅AD：可設定1組版頭橫幅</div-->
        </div>
      </section>
      <!-- ad4 -->
      <section class="template-row t-ad t-ad4">
        <div class="t-bloc-title">Title Title Title</div>
        <div class="t-col t-col-6"><img src="http://placehold.it/180x60/"></div><div class="t-col t-col-6"><img src="http://placehold.it/180x60/"></div><div class="t-col t-col-6"><img src="http://placehold.it/180x60/"></div><div class="t-col t-col-6"><img src="http://placehold.it/180x60/"></div><div class="t-col t-col-6"><img src="http://placehold.it/180x60/"></div><div class="t-col t-col-6"><img src="http://placehold.it/180x60/"></div>
        <div class="edit-area" data-name="版頭橫幅AD">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">版頭橫幅AD：可設定1組版頭橫幅</div-->
        </div>
      </section>
      <!-- item1 -->
      <section class="template-row t-item t-item1">
        <div class="t-bloc-title">Title Title Title</div>
        
        <figure class="t-col t-col-2 t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/350x500/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-2 t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/350x500/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- item2 -->
      <section class="template-row t-item t-item2">
        <div class="t-bloc-title">Title Title Title</div>
        
        <figure class="t-col t-col-2 t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/350x300/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-2 t-product">
          <div class="t-col-2 t-item-image">
            <img src="http://placehold.it/350x300/">
          </div>
          <figcaption class="t-col-2 t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- item3 -->
      <section class="template-row t-item t-item3">
        <div class="t-bloc-title">Title Title Title</div>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- item4 -->
      <section class="template-row t-item t-item4">
        <div class="t-bloc-title">Title Title Title</div>
        <figure class="t-col t-col-2 t-product">
          <div class="t-col-4 t-item-image">
            <img src="http://placehold.it/350x500/">
          </div>
          <figcaption class="t-col-4 t-item-info">
            <div class="t-item-name">Product Name</div>
            <div class="t-item-feature">Product intro product intro product intro product intro product intro product intro product intro.</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/160x160/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/160x160/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/160x160/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/160x160/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- item5 -->
      <section class="template-row t-item t-item5">
        <div class="t-bloc-title">Title Title Title</div>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-4 t-product t-product-st">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/" class="t-image-normal">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
            <button class="t-buy-button">Buy Now!</button>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- item6 -->
      <section class="template-row t-item t-item6">
        <div class="t-bloc-title">Title Title Title</div>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-cv">
          <div class="t-item-image">
            <img src="http://placehold.it/220x220/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- item7 -->
      <section class="template-row t-item t-item7">
        <div class="t-bloc-title">Title Title Title</div>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <figure class="t-col t-col-5 t-product t-product-st">
          <div class="t-col t-item-image">
            <img src="http://placehold.it/210x210/">
          </div>
          <figcaption class="t-col t-item-info">
            <div class="t-item-name">Product Name</div>
            <span class="t-item-original-price"><span class="t-currency">$</span>99,999</span>
            <br>
            <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
          </figcaption>
        </figure>
        
        <div class="edit-area" data-name="熱門主題廣告區">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
          <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          <!--div class="tooltip">熱門主題廣告區：可設定4組商品</div-->
        </div>
      </section>
      <!-- html -->
      <section class="template-row t-html">
        <div class="t-large-text">HTML</div>
        <div class="edit-area" data-name="HTML">
          <button class="btn-edit go-popup" data-width="600" data-href="popup/modify-edit-html.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        </div>
      </section>
      <!-- footer: sitemap -->
      <section class="template-row t-footer">
        <div class="t-sitemap">
          
          <dl>
            <dt>Sitemap1</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd><dd><a>Page Name3</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap2</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap3</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd><dd><a>Page Name3</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap4</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap5</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd><dd><a>Page Name3</a></dd><dd><a>Page Name4</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap6</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd><dd><a>Page Name3</a></dd><dd><a>Page Name4</a></dd>
          </dl>
          
        </div>
        <div class="edit-area" data-name="網站導覽">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-sitemap.php"><i class="fa fa-pencil"></i>編輯</button>
          <!--div class="tooltip">網站導覽設定</div-->
        </div>
      </section>
      <!-- footer: copyright -->
      <section class="template-row t-footer">
        <div class="t-copyright">
          <div class="t-large-text">Footer</div>
          <!--span class="t-uitox">uitox inside提供服務</span>
          Copyright &copy; uitox Corporation All rights reserved.
          <a class="t-privacy">隱私權政策</a-->
        </div>
      </section>
    </div>
  </div>
  <div class="modify-button">
    <button class="btn-save-only"><i class="fa fa-refresh"></i>更新畫面</button>
    <button class="btn-preview" onclick="window.open('demo/index.php')"><i class="fa fa-desktop"></i>網頁版預覽</button>
    <button class="btn-preview go-popup" data-width="500" data-href="popup/mobile-preview.php"><i class="fa fa-mobile"></i>手機版預覽</button>
    <button class="btn-submit"><i class="fa fa-check"></i>全頁發佈</button>
  </div>
</div>
<!--section class="cover">
  <dl class="plateforms">
    <dt class="title">請選擇要進入編輯的網站：</dt>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
  </dl>
</section-->
    </div>
    <!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/inside-action.js"></script>
<script>
(function($){
  //$('body').css('overflow','hidden');
  //sort spinner
  $('.input-sort').spinner();
  //dialog
  $('.modify-block .btn-delete').each(function() {
    var sectionName = $(this).parent().data('name');
    $(this).click(function() {
      confirm('即將刪除' + sectionName + '\n您所編輯過的內容將不會保留');
    });
  });
})(jQuery);
//cover
function closeCover() {
  $('.cover').fadeOut(100);
  $('body').css('overflow','auto');
  $('.select-site').show();
};
function openCover() {
  $('.cover').fadeIn(100);
  $('body').css('overflow','hidden');
  $('.select-site').hide();
};
</script>
</body>
</html>