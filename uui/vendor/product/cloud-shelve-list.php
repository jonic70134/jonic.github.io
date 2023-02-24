<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">外站賣商品列表</li></ul>
</div>
<div class="select-site">
  <button class="btn-switch" onclick="openCover();"><i class="fa fa-share"></i>Lazada</button>
</div>
  <div class="form-element search-filter">
    <label class="label-search"><input type="text" size="50" placeholder="商品名稱/商品ID/賣場ID/廠商自用料號/廠商自用欄位"><select name="" id="select-market-name" class="select-search"><option value="">請選擇</option><option value="1">賣場 ID</option><option value="2">賣場名稱</option><option value="3">外站商品 ID</option><option value="4">外站分類名稱</option><option value="5">外站分類 ID</option></select></label>
    <div id="check-market-name" class="select-group" style="display:none;">
      <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup">外站賣場名稱</label>
      <label for="checkBox2"><input type="checkbox" id="checkBox2" name="checkboxGroup">Uitox 賣場名稱</label>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
    <label for="checkboxAdv"><input type="checkbox" id="checkboxAdv" class="checkbox-advsearch">進階查詢</label>
  </div>
  <div class="form-element search-filter advanced-search" style="display:none;">
    <label class="label-search">分類<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <label class="label-search">特定廠商<input type="text" size="20" placeholder="請輸入廠商名稱"></label>
    <label class="label-search">外站商品ID<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>

    <div class="select-group">
      <label>中介表建立時間</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>進階查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="template-function template-button">
    <button class="btn-action site-set">
      外站設定
      <div class="site-set-list">
        <a href="cloud-shelve-white-black-list.php">黑名單</a>
        <a href="cloud-shelve-white-black-list.php">白名單</a>
      </div>
    </button>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="cloud-market-table template-table">
        <thead>
          <tr>
            <th>Uitox 賣場 ID</th>
            <th>外站賣場名稱</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">【HSP連續供墨系統】Brother DCP-J105【短匣滿水+黑色防水】</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span><p class="product-intro">文案狀態：自訂</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
          <tr>
            <td>201601AM99999999</td>
            <td><div class="product-detail"><p class="product-name">GARMIN nüvi 2567T 聲控導航聰明夥伴機</p><p class="product-attr"><span class="attr">顏色：黑色</span><span class="attr">尺寸：128G</span></p><p class="product-intro">文案狀態：原始</p></div></td>
          </tr>
        </tbody>
      </table>

    </div>
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="cloud-market-table template-table scroll-content">
          <thead>
            <tr>
              <th>Uitox 可賣量</th>
              <th>商品資訊</th>
              <th>標準外賣售價<br/>(商品國賺多少)</th>
              <th>自訂外賣售價<br/>(商品國賺賠)</th>
              <th>編輯</th>
              <th>黑名單</th>
              <th>白名單</th>
              <th>外站商品 ID</th>
              <th>外站規格 ID</th>
              <th>外站更新狀態</th>
              <th>修改紀錄</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>MYR 5,622<br/><a href="#" class="alert_red">MYR -200</a></td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            <tr>
              <td>0</td>
              <td><a class="go-popup" href="popup/cloud-shelve-info.php">詳</a></td>
              <td>MYR 7,028<br/><a href="popup/cloud-shelve-price.php" class="go-popup">MYR 100</a></td>
              <td>-</td>
              <td><button class="btn-green btn-txt go-popup" data-href="popup/cloud-shelve-descript.php">文案</button><button class="btn-red btn-txt go-popup" data-href="popup/cloud-shelve-sale.php">售價</button></td>
              <td>Y</td>
              <td>N</td>
              <td>123456</td>
              <td>1</td>
              <td><a href="cloud-shelve-update.php">詳</a></td>
              <td><a class="go-popup" href="popup/cloud-shelve-info-log.php">詳</a></td>
            </tr>
            
          </tbody>
        </table>
      </section>
      </div>
    <div class="clearfix"></div>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
<section class="cover">
  <dl class="plateforms">
    <dt class="title">請選擇要進入編輯的外站：</dt>
    <dd onclick="closeCover();">
      <h2>Yahoo</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>天貓</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>11 street</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>Lazada</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>Wechat</h2>
    </dd>
  </dl>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/template-action.js"></script>
<script src="../js/lib/jquery.mousewheel.js"></script>
<script src="../js/double-scroll.js"></script>
<script>
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
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false,
    minDate: -180,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);


$('#check-market-name').hide();
$('#select-market-name').change(function(){
  if($('#select-market-name').val() == '1') {
    $('#check-market-name').show(); 
  } else {
    $('#check-market-name').hide(); 
  } 
});
</script>
<script>
    $(document).ready(function () {
        $('.double-scroll-bottom').mousewheel(function(e, delta) {
            this.scrollLeft -= (delta * 40);
            e.preventDefault();
        });
    });
</script>
</body>
</html>