<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/product.css" rel="stylesheet" type="text/css">
<style>
.import-form .form-element-name {width: 45%;}
</style>
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="batch-price.php">批次修改售價</a><span class="divider"> &gt; </span></li> <li class="active">匯出全部上架賣場</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="batch-price.php" class="active">批次修改售價</a></dd>
  <dd><a href="batch-price-log.php">查詢修改記錄</a></dd>
</dl>
<section class="template-content template-content-tab">
  <dl class="form-element import-form">
    <dd>
      <label class="form-element-name">選擇匯出平台：</label>
      <select name="" id=""><option value="">ASAP閃電購物網</option></select>
      <div class="template-button">
        <button class="btn-action"><i class="fa fa-download"></i>匯出平台全部上架賣場</button>
      </div>
      <br><br>
      <label class="form-element-name">其他取得檔案方式：</label>
      <a href="batch-price-filter.php">篩選賣場再匯出<i class="fa fa-external-link"></i></a>、<a href="">下載範例檔案</a> 自行編輯
      <br><br>
      <label class="form-element-name">已經有檔案：</label>
      <a href="batch-price.php">匯入修改資料進行修改<i class="fa fa-external-link"></i></a>
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
<script src="../js/template-action.js"></script>
</body>
</html>