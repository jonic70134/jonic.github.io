<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
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
          <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">新增商品 (單筆/大量)</li></ul>
        </div>
        <section class="template-content">
          <div class="template-button" style="width:500px; margin:90px auto; text-align:left;">
            <button class="btn-action" onclick="location.href='add-product-vendor.php'"><i class="fa fa-plus"></i>新增單筆商品</button>
            <span class="comment">一次新增一筆商品</span>
            <br><br>
            <button class="btn-action"><i class="fa fa-file-excel-o"></i>Excel大量上稿</button>
            <span class="comment">依照&nbsp;<a href="" target="_blank">匯入範本<i class="fa fa-download"></i></a>&nbsp;編輯商品資訊後，進行批次新增商品</span>
            <br><br>
            <button class="btn-action"><i class="fa fa-refresh"></i>系統自動抓取</button>
            <span class="comment"><a href="" target="_blank">設定抓取網址</a>，系統將自動匯入、更新商品資料。</span>
          </div>
        </section>
    </div><!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/template-action.js"></script>
</body>
</html>