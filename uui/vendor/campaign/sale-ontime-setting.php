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
    <!-- END Menu --><!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">活動管理<span class="divider"> &gt; </span></li> <li class="active">整點特賣</li></ul>
</div>
<div class="select-site">
  <button class="btn-switch"><i class="fa fa-share"></i>切換至我的其他網站</button>
</div>
<dl class="template-tabs">
  <dd><a href="sale-ontime-list.php">特賣活動設定</a></dd>
  <dd><a href="sale-ontime-setting.php" class="active">基本設定</a></dd>
</dl>
<section class="template-content template-content-tab">
  <h1 class="title"><i class="fa fa-caret-right"></i>特賣頁版頭設定</h1>
  <dl class="form-element sale-ontime-setting">
    <dd>
      <label class="form-element-name txt">選擇上傳圖片</label>
      <dl class="form-element-content">
        <dd><label for="radio1_1"><input type="radio" id="radio1_1" name="radio1" checked>使用預設圖<a href="" target="_blank" class="preview"><i class="fa fa-picture-o"></i>預覽圖片</a></label></dd>
        <dd><label for="radio1_2"><input type="radio" id="radio1_2" class="radio-upload" name="radio1">自行上傳圖片 <input type="file" class="input-upload" accept="image/*"><a href="" target="_blank" class="preview"><i class="fa fa-picture-o"></i>預覽圖片</a></label></dd>
      </dl>
      <div class="comment">限為1220*300px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案</div>
    </dd>
    <dd>
      <label class="form-element-name">設定圖片連結</label>
      <input type="text" size="60" placeholder="http://www.yourdomain.com/product.html">
    </dd>
  </dl>
  <h1 class="title"><i class="fa fa-caret-right"></i>首頁曝光商品底圖設定 <span class="comment">(僅部分主題支援)</span></h1>
  <dl class="form-element sale-ontime-setting">
    <dd>
      <label class="form-element-name txt">選擇上傳圖片</label>
      <dl class="form-element-content">
        <dd><label for="radio2_1"><input type="radio" id="radio2_1" name="radio2" checked>使用預設圖<a href="" target="_blank" class="preview"><i class="fa fa-picture-o"></i>預覽圖片</a></label></dd>
        <dd><label for="radio2_2"><input type="radio" id="radio2_2" class="radio-upload" name="radio2">自行上傳圖片 <input type="file" class="input-upload" accept="image/*"><a href="" target="_blank" class="preview"><i class="fa fa-picture-o"></i>預覽圖片</a></label></dd>
      </dl>
      <div class="comment">限為190*360px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案</div>
    </dd>
  </dl>
  <h1 class="title"><i class="fa fa-caret-right"></i>首頁無活動時顯示設定 <span class="comment">(僅部分主題支援)</span></h1>
  <dl class="form-element sale-ontime-setting">
    <dd>
      <label class="form-element-name txt">選擇上傳圖片</label>
      <dl class="form-element-content">
        <dd><label for="radio3_1"><input type="radio" id="radio3_1" name="radio3" checked>使用預設圖<a href="" target="_blank" class="preview"><i class="fa fa-picture-o"></i>預覽圖片</a></label></dd>
        <dd><label for="radio3_2"><input type="radio" id="radio3_2" class="radio-upload" name="radio3">自行上傳圖片 <input type="file" class="input-upload" accept="image/*"><a href="" target="_blank" class="preview"><i class="fa fa-picture-o"></i>預覽圖片</a></label></dd>
      </dl>
      <div class="comment">限為190*360px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案</div>
    </dd>
    <dd>
      <label class="form-element-name">設定圖片連結</label>
      <input type="text" size="60" placeholder="http://www.yourdomain.com/product.html">
    </dd>
  </dl>
  <div class="template-button">
    <button class="btn-cancel"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('整點特賣基本設定完成');"><i class="fa fa-check"></i>儲存並送出</button>
  </div>
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
//address
$('.input-upload').each(function() {
  $(this).click(function() {
    $(this).parent().find('.radio-upload').prop('checked',true);
  });
});
</script>
</body>
</html>