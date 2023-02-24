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
    <button class="btn-preview go-popup" data-width="500" data-href="popup/mobile-preview.php"><i class="fa fa-mobile"></i>手機版預覽</button>
    <button class="btn-submit"><i class="fa fa-check"></i>全頁發佈</button>
  </div>
  <div class="modify-detail">
    <!-- template2: asap -->
    <div class="modify-block template-2">
      <!-- ad1 -->
      <section class="template-row t-ad t-ad1">
        <div class="t-col"><img src="http://placehold.it/1220x60/" width="1000"></div>
        <div class="edit-area" data-name="版頭橫幅AD">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
          <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
          <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
        </div>
      </section>
      <!-- header -->
      <section class="template-row t-header">
        <div class="t-large-text">Header</div>
      </section>
      <!-- left -->
      <section class="template-left-col">
        <!--  hotsale    -->
       <section class="template-row t-hotsale">
          <div class="t-large-text">HOT<br>SALE</div>
          <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-hotsale.php"><i class="fa fa-pencil"></i>編輯</button>     
            </div>
        </section>
        <!-- menu -->
        <section class="template-row t-menu">
          <div class="t-large-text">Menu</div>
          <div class="edit-area" data-name="網站MENU">
            <button class="btn-edit" onclick="location.href='modify-menu.php'"><i class="fa fa-sitemap"></i>編輯MENU</button>
          </div>
        </section>
        <!-- ad2 -->
        <section class="template-row t-ad t-ad2">
          <div class="t-bloc-title">Title Title Title</div>
          
          <div class="t-col"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col"><img src="http://placehold.it/180x112/"></div>
          
          <div class="edit-area" data-name="每館廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
        <!-- txt ad -->
        <section class="template-row t-txtad">
          <div class="t-bloc-title">Title Title Title</div>
          <ul>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
            <li>Text text text</li>
            
          </ul>
          <div class="edit-area" data-name="文字廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-txtad.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
      </section>
      <!-- right -->
      <section class="template-right-col">
        <!-- nav -->
        <section class="template-row t-nav">
          <div class="t-large-text">Nav</div>
          <div class="edit-area" data-name="導航欄">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-nav.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
        </section>
        <!-- kv1 -->
        <section class="template-row t-kv t-kv1">
          <div class="t-left">
            <div class="t-large-text">2HR<br>Group</div>
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>     
            </div>
          </div>
          <div class="t-middle">
            <div class="t-col"><img src="http://placehold.it/600x360/"></div>
            <div class="t-kv-dots"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
              <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
              <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
              <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
            </div>
          </div>
          <div class="t-right">
            
            <div class="t-col t-kv-small"><img src="http://placehold.it/180x110/"></div>
            
            <div class="t-col t-kv-small"><img src="http://placehold.it/180x110/"></div>
            
            <div class="t-col t-kv-small"><img src="http://placehold.it/180x110/"></div>
            
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>     
            </div>
          </div>
        </section>
        <!-- kv3 -->
        <section class="template-row t-kv t-kv1">
          <div class="t-left">
            <div class="t-col"><img src="http://placehold.it/180x362/"></div>
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            </div>
          </div>
          <div class="t-middle">
            <div class="t-col"><img src="http://placehold.it/600x360/"></div>
            <div class="t-kv-dots"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
              <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
              <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
              <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
            </div>
          </div>
          <div class="t-right">
            <div class="t-large-text">Ontime<br>Sale</div>
          </div>
        </section>
        <!-- kv2 -->
        <section class="template-row t-kv t-kv2">
          <div class="t-left">
            <div class="t-col"><img src="http://placehold.it/805x360/"></div>
            <div class="t-kv-dots"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
              <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
              <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
              <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
            </div>
          </div>
          <div class="t-right">
            
            <div class="t-col t-kv-small"><img src="http://placehold.it/180x110/"></div>
            
            <div class="t-col t-kv-small"><img src="http://placehold.it/180x110/"></div>
            
            <div class="t-col t-kv-small"><img src="http://placehold.it/180x110/"></div>
            
            <div class="edit-area" data-name="輪播廣告">
              <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            </div>
          </div>
        </section>
        <!-- item1 -->
        <section class="template-row t-item t-item1">
          <dl class="t-tabs">
            
            <dd class="t-col-6">
              Tab 1
              <div class="edit-area" data-name="廣告頁1">
                <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-custom.php"><i class="fa fa-pencil"></i>編輯</button>
              </div>
            </dd>
            
            <dd class="t-col-6">
              Tab 2
              <div class="edit-area" data-name="廣告頁2">
                <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-custom.php"><i class="fa fa-pencil"></i>編輯</button>
              </div>
            </dd>
            
            <dd class="t-col-6">
              Tab 3
              <div class="edit-area" data-name="廣告頁3">
                <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-custom.php"><i class="fa fa-pencil"></i>編輯</button>
              </div>
            </dd>
            
            <dd class="t-col-6">
              Tab 4
              <div class="edit-area" data-name="廣告頁4">
                <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-custom.php"><i class="fa fa-pencil"></i>編輯</button>
              </div>
            </dd>
            
            <dd class="t-col-6">
              Tab 5
              <div class="edit-area" data-name="廣告頁5">
                <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-custom.php"><i class="fa fa-pencil"></i>編輯</button>
              </div>
            </dd>
            
            <dd class="t-col-6">
              Tab 6
              <div class="edit-area" data-name="廣告頁6">
                <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item-custom.php"><i class="fa fa-pencil"></i>編輯</button>
              </div>
            </dd>
            
          </dl>
          <div class="t-tabs-content">
            
            <figure class="t-col t-col-5 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/180x180/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-5 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/180x180/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-5 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/180x180/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-5 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/180x180/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-5 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/180x180/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <div class="edit-area" data-name="6頁廣告區">
              <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
              <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
              <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
            </div>
          </div>
        </section>
        <!-- title1 -->
        <section class="template-row t-title t-ad1">
          <div class="t-col t-bloc-title">Title Title Title</div>
          <div class="t-col t-subtitle">Subtitle Subtitle Subtitle</div>
          <dl class="t-col t-keywords">
            
            <dd>Keyword 1</dd>
            
            <dd>Keyword 2</dd>
            
            <dd>Keyword 3</dd>
            
            <dd>Keyword 4</dd>
            
          </dl>
          <div class="edit-area" data-name="標題">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-title.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
        <!-- item2 -->
        <section class="template-row t-item t-item2">
          <div class="t-left">
            <div class="t-col"><img src="http://placehold.it/200x540/"></div>
          </div>
          <div class="t-right">
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
          </div>
          <div class="edit-area" data-name="每館廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-item.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
        <!-- item3 -->
        <section class="template-row t-item t-item3">
          <div class="t-left">
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
            <figure class="t-col t-col-4 t-product t-product-st">
              <div class="t-col t-item-image">
                <img src="http://placehold.it/178x178/">
              </div>
              <figcaption class="t-col t-item-info">
                <div class="t-item-feature">Product intro product intro product intro.</div>
                <span class="t-item-price"><span class="t-currency">$</span>99,999</span>
                <button class="t-buy-button">Buy!</button>
              </figcaption>
            </figure>
            
          </div>
          <div class="t-right">
            <div class="t-col"><img src="http://placehold.it/200x540/"></div>
          </div>
          <div class="edit-area" data-name="每館廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
        <!-- ad3 -->
        <section class="template-row t-ad t-ad3">
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="t-col t-col-5"><img src="http://placehold.it/180x112/"></div>
          
          <div class="edit-area" data-name="廣告">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
        <!-- ad4 -->
        <section class="template-row t-ad t-ad4">
          <div class="t-col"><img src="http://placehold.it/1000x250/"></div>
          <div class="edit-area" data-name="橫幅AD">
            <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-edit-ad.php"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
          </div>
        </section>
      </section>
      <div class="clearfix"></div>
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
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd><dd><a>Page Name3</a></dd><dd><a>Page Name4</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap4</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd><dd><a>Page Name3</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap5</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd>
          </dl>
          
          <dl>
            <dt>Sitemap6</dt>
            <dd><a>Page Name1</a></dd><dd><a>Page Name2</a></dd>
          </dl>
          
        </div>
        <div class="edit-area" data-name="網站導覽">
          <button class="btn-edit go-popup" data-width="800" data-href="popup/modify-sitemap.php"><i class="fa fa-pencil"></i>編輯</button>
        </div>
      </section>
      <!-- footer: copyright -->
      <section class="template-row t-footer">
        <div class="t-copyright">
          <div class="t-large-text">Footer</div>
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
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/inside-action.js"></script>
<script>
(function($){
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
</script>
</body>
</html>