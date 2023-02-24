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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">報品列表</li></ul>
</div>
<section class="template-content">
    <dl class="cloud-translate-fix">
      <dt>商品ID：</dt>
      <dd>201601AM99999999</dd>
      <dt>賣場ID：</dt>
      <dd>201601AM99999999</dd>
      <dt>廠商自用料號：</dt>
      <dd>31232154QQAAFF</dd>
      <dt>商品名稱：</dt>
      <dd>襯衫 / 黃色 / XL</dd>
      <dt>原始售價 / 進貨價 (毛利率)：</dt>
      <dd>1000 / 850 (15%)</dd>
      <dt>特賣變價售價成本 (毛利率)：</dt>
      <dd>900 / 800 (11.11%)</dd>
      <dt>特賣變價時間：</dt>
      <dd>2016/01/01~2016/09/09 </dd>
      <dt>可賣量：</dt>
      <dd>999</dd>
      <dt>預計備貨量：</dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt>預計進貨時間：</dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt>備註：</dt>
      <dd><textarea name="" id="" cols="100" rows="10"></textarea></dd>
    </dl>
    <div class="template-button">
      <button class="btn-cancel"><i class="fa fa-times"></i>上一步</button>
      <button class="btn-submit" onclick="alert('網頁設定完成');"><i class="fa fa-check"></i>確認送出</button>
    </div>
    <div class="clearfix"></div>
  </section>
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
<script src="../js/double-scroll.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false,
    minDate: -180,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>