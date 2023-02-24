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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">跨境翻譯調整<span class="divider"> &gt; </span></li> <li class="active">修改</li></ul>
</div>
<section class="template-content">
    <dl class="cloud-translate-fix">
      <dt>商品名稱：</dt>
      <dd><label class="label-search"><select name="" id="" class="select-search tran-input"><option value="">請選擇</option><option value="">zh-TW</option><option value="">en-US</option><option value="">jp-JP</option></select></label>
      </dd>
      <dt>賣場ID：</dt>
      <dd><input class="tran-input" id="" type="text" value="請輸入賣場ID"/><button class="btn-active search-translate">查詢</button><a href="#" class="tran-now">點我立即翻譯</a></dd>
      <dt>商品名稱：</dt>
      <dd><input class="tran-input" id="" type="text" size="100" value="[歐洲站] 冬季熱身賽韓國保暖外套單件899"/></dd>
      <dt>賣場名稱：</dt>
      <dd><input class="tran-input" id="" type="text" size="100" value="[歐洲站] 冬季熱身賽韓國保暖外套單件899"/></dd>
      <dt>顏色：</dt>
      <dd><span><input class="tran-input" id="" type="text" size="5" value="紅色"/></span><span>尺寸：<input class="tran-input" id="" type="text" size="5" value="XXXL"/><input class="tran-input" type="text" size="5" value="XXXL"/><input class="tran-input" type="text" size="5" value="XXXL"/></span></dd>
      <dt>顏色：</dt>
      <dd><span><input class="tran-input" id="" type="text" size="5" value="紅色"/></span><span>尺寸：<input class="tran-input" id="" type="text" size="5" value="XXXL"/><input class="tran-input" type="text" size="5" value="XXXL"/><input class="tran-input" type="text" size="5" value="XXXL"/></span></dd>
      <dt>顏色：</dt>
      <dd><span><input class="tran-input" id="" type="text" size="5" value="紅色"/></span><span>尺寸：<input class="tran-input" id="" type="text" size="5" value="XXXL"/><input class="tran-input" type="text" size="5" value="XXXL"/><input class="tran-input" type="text" size="5" value="XXXL"/></span></dd>
      <dt>賣點：</dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt></dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt></dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt></dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt></dt>
      <dd><input class="tran-input" id="" type="text" size="70" value=""/></dd>
      <dt>商品說明：</dt>
      <dd><textarea name="" id="" cols="100" rows="10"></textarea></dd>
      <dt></dt>
      <dd><textarea name="" id="" cols="100" rows="10"></textarea></dd>
      <dt>規格：</dt>
      <dd><textarea name="" id="" cols="100" rows="10"></textarea></dd>
      <dt>標準配備：</dt>
      <dd><textarea name="" id="" cols="100" rows="10"></textarea></dd>
    </dl>
    <div class="template-button">
      <button class="btn-cancel"><i class="fa fa-times"></i>取消</button>
      <button class="btn-submit" onclick="alert('網頁設定完成');"><i class="fa fa-check"></i>儲存並送出</button>
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