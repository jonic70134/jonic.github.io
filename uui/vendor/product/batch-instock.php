<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">批次修改可賣量</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="batch-instock.php" class="active">批次修改可賣量</a></dd>
  <dd><a href="batch-price-log.php">查詢修改記錄</a></dd>
</dl>
<section class="template-content template-content-tab">
  <dl class="form-element import-form">
    <dd>
      <label class="form-element-name">直接匯入資料：</label>
      <input type="file" accept=".xls, .xlsx">
      <span class="comment">* 檔案格式為 .xls 或 .xlsx</span>
      <div class="template-button">
        <button class="btn-submit"><i class="fa fa-upload"></i>匯入修改資料</button>
      </div>
      <br><br>
      <div style="text-align:center;">
        還沒有檔案，您可以：<a href="batch-instock-download.php">匯出全部上架商品<i class="fa fa-external-link"></i></a>、<a href="batch-instock-filter.php">篩選商品再匯出<i class="fa fa-external-link"></i></a>、<a href="">下載範例檔案</a> 自行編輯
      </div>
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