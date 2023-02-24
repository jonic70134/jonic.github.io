<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../css/campaign.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li><a href="edm-list.php">行銷EDM</a><span class="divider"> &gt; </span></li> <li class="active">編輯EDM</li></ul>
</div>
<section class="template-content">
  <h1 class="title"><i class="fa fa-pencil"></i>編輯EDM</h1>
  <dl class="form-element template-popup-form">
    <dd><label class="label-content-title">活動網頁名稱：</label>了後到就的甜到記再輾的啡挨啊可</dd>
    <dd><label class="label-content-title">活動日期：</label>2013/01/14 20:59 ~ 2013/08/30 20:59</dd>
    <dd>
      <label class="label-content-title">EDM背景圖：</label>
      <input type="radio" id="radioEdmColor" class="radio-bg-color" name="selectEdmBg"><label for="radioEdmColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label>
      <input type="radio" id="radioEdmImg" class="radio-bg-img" name="selectEdmBg"><label for="radioEdmImg"><input type="file" class="input-bg-img" accept="image/*"></label>
      <span class="comment"> (垂直重複呈現：大小上限50kB的JPG / JPEG / GIF / PNG格式檔案)</span>
    </dd>
  </dl>
  <h2 class="title"><i class="fa fa-picture-o"></i>版頭區塊</h2>
  <div class="edit-area">
    <button class="btn-action go-popup" data-width="500" data-href="popup/edm-head-html.php"><i class="fa fa-file-code-o"></i>上傳HTML</button>
    <button class="btn-action go-popup" data-width="600" data-href="popup/edm-head-img.php"><i class="fa fa-file-image-o"></i>上傳一張圖</button><br>
    <span class="comment">不上傳任何內容，前端則不會顯示該區塊</span>
  </div>
  <h2 class="title"><i class="fa fa-th"></i>內容區塊</h2>
  <div class="edit-area">
    <!-- block -->
    <div class="block">
      <div class="cover">
        <button class="btn-edit go-popup" data-width="1000" data-href="popup/edm-edit-banner.php"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
        <div class="tooltip">AD區塊 - 橫幅</div>
      </div>
      <table class="edm-item">
        <tr>
          <td class="item-banner item-new">目前沒有AD</td>
        </tr>
      </table>
    </div>
    <!-- block -->
    <div class="block">
      <div class="cover">
        <button class="btn-edit go-popup" data-width="1000" data-href="popup/edm-edit-banner.php"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
        <div class="tooltip">AD區塊 - 橫幅</div>
      </div>
      <table class="edm-item">
        <tr>
          <td class="item-banner">敢導好就而進Q該走腕</td>
        </tr>
      </table>
    </div>
    <!-- block -->
    <div class="block">
      <div class="cover">
        <button class="btn-edit go-popup" data-width="1000" data-href="popup/edm-edit-block6.php"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
        <div class="tooltip">內容區塊 - 1大6小</div>
      </div>
      <table class="edm-item item-4">
        <tr>
          <td rowspan="2">
            <dl class="product">
              <dd><b>Product ID: </b>201406CG180000129</dd>
              <dd><b>Product Name: </b>們了逆地啦特很間此天十盛個昌適下麼輸街弟</dd>
              <dd><b>Price(tax included): <span class="highlight">$9999</span></b></dd>
              <dd><b>Market Price: <span class="highlight">$9999</span></b></dd>
              <dd><b>Product Image: </b><img src="http://placehold.it/291x616" width="150" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱"></dd>
            </dl>
          </td>
          <?php 
            for ($x = 0; $x <= 2; $x++) {
                echo '
                  <td>
                    <dl class="product">
                      <dd><b>賣場ID：</b>201406CG180000129</dd>
                      <dd><b>賣場名稱：</b>目去啡較真們悲此富就宜的溺理我的啊憊不的在災比想宵而憊人斷拚</dd>
                      <dd><b>售價(含稅)：<span class="highlight">$9999</span></b></dd>
                      <dd><b>市價：<span class="highlight">$9999</span></b></dd>
                      <dd><b>賣場圖：</b><img src="http://placehold.it/272x272" width="150" height="150" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱"></dd>
                    </dl>
                  </td>
                ';
            } 
          ?>
        </tr>
        <tr>
          <?php 
            for ($x = 0; $x <= 1; $x++) {
                echo '
                  <td>
                    <dl class="product">
                      <dd><b>賣場ID：</b>201406CG180000129</dd>
                      <dd><b>賣場名稱：</b>目去啡較真們悲此富就宜的溺理我的啊憊不的在災比想宵而憊人斷拚</dd>
                      <dd><b>售價(含稅)：<span class="highlight">$9999</span></b></dd>
                      <dd><b>市價：<span class="highlight">$9999</span></b></dd>
                      <dd><b>賣場圖：</b><img src="http://placehold.it/272x272" width="150" height="150" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱"></dd>
                    </dl>
                  </td>
                ';
            } 
          ?>
          <td class="item-new">目前沒有商品</td>
        </tr>
      </table>
    </div>
    <!-- block -->
    <div class="block">
      <div class="cover">
        <button class="btn-edit go-popup" data-width="1000" data-href="popup/edm-edit-block4.php"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="4"></div>
        <div class="tooltip">內容區塊 - 4小 (可填寫描述文字)</div>
      </div>
      <table class="edm-item item-4">
        <tr>
          <?php 
            for ($x = 0; $x <= 3; $x++) {
                echo '
                  <td>
                    <dl class="product">
                      <dd><b>賣場ID：</b>201406CG180000129</dd>
                      <dd><b>賣場名稱：</b>柚轉他腕五麼新他治害頸裡他一要啦裡典利何可問十真妄斷上他-死</dd>
                      <dd><b>描述文字：</b>樣吃盲兒哪啊如就科啡</dd>
                      <dd><b>售價(含稅)：<span class="highlight">$9999</span></b></dd>
                      <dd><b>市價：<span class="highlight">$9999</span></b></dd>
                      <dd><b>賣場圖：</b><img src="http://placehold.it/272x272" width="150" height="150" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱"></dd>
                    </dl>
                  </td>
                ';
            } 
          ?>
        </tr>
      </table>
    </div>
    <!-- block -->
    <div class="block">
      <div class="cover">
        <button class="btn-edit go-popup" data-width="1000" data-href="popup/edm-edit-block2.php"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="5"></div>
        <div class="tooltip">AD區塊 - 2小</div>
      </div>
      <table class="edm-item item-2">
        <tr>
          <td><img src="http://placehold.it/572x334" width="100%" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱"></td>
          <td class="item-new">目前沒有AD</td>
        </tr>
      </table>
    </div>
    <!-- new btn -->
    <button class="btn-add go-popup" data-width="800" data-href="popup/edm-add-block.php"><i class="fa fa-plus"></i>新增區塊</button>
  </div>
  <div class="template-button">
    <button class="btn-cancel" onclick="location.href='edm-list.php';"><i class="fa fa-times"></i>取消</button>
    <button class="btn-preview" onclick="window.open('edm-list.php')"><i class="fa fa-desktop"></i>預覽EDM</button>
    <button class="btn-submit" onclick="location.href='edm-list.php';"><i class="fa fa-check"></i>確認送出</button>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/jquery.colpick.js"></script>
<script src="../js/campaign-action.js"></script>
<script src="../js/color-picker.js"></script>
<script>
(function($){
  //sort spinner
  $('.input-sort').spinner();
})(jQuery);
</script>
</body>
</html>