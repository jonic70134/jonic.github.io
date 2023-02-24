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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="import-data.php">批次匯入商品</a></li><span class="divider"> &gt; </span></li> <li class="active">匯入商品資料</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="import-data.php" class="active">匯入商品資料</a></dd>
  <dd><a href="import-image.php">匯入商品圖檔</a></dd>
  <dd><a href="import-log.php">查詢上傳記錄</a></dd>
</dl>
<section class="template-content template-content-tab">
  <dl class="form-element import-form">
    <dd>
      <label class="form-element-name">選擇要匯入的商品資料：</label>
      <input type="file" accept=".csv, .xls, .xlsx">
    </dd>
    <dd>
      <label class="form-element-name">商品對應的廠商：</label>
      <input type="text" class="input-search" placeholder="請輸入廠商名">
      <dl class="related-searches">
        <dd>們繼不點國外興真上袖要看 (non)</dd>
        <dd>麼的上北決這想的一決棄家些不得頓次 (velit)</dd>
      </dl>
    </dd>
    <dd>
      <label class="form-element-name">商品對應的分類：</label>
      <dl class="select-group">
        <dd><label for="radio1_1"><input type="radio" id="radio1_1" name="radio1">自動拆分類</label></dd>
        <dd><label for="radio1_2"><input type="radio" id="radio1_2" name="radio1">匯入商品的分類是：</label><select name="" id="" class="select-in-option"><option value="">請選擇</option><option value="">aaa</option></select></dd>
      </dl>
    </dd>
    <dd>
      <label class="form-element-name">商品販售的平台：</label>
      <dl class="select-group">
        <dd><label for="checkbox1_1"><input type="checkbox" id="checkbox1_1" name="checkbox1" checked>平台1</label></dd>
        <dd><label for="checkbox1_2"><input type="checkbox" id="checkbox1_2" name="checkbox1" checked>平台2</label></dd>
        <dd><label for="checkbox1_3"><input type="checkbox" id="checkbox1_3" name="checkbox1" checked disabled>平台3</dd>
      </dl>
    </dd>
  </dl>
  <div class="template-button">
    <button class="btn-submit go-popup" data-width="300" data-href="popup/import-result.php"><i class="fa fa-upload"></i>匯入商品</button>
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
<script src="../js/template-action.js"></script>
<script>
  //related
  $('.input-search').bind('keyup change', function() {
      $('.related-searches').slideDown(100);
      if ($(this).val() == '') {
          $('.related-searches').slideUp(50);
      };
  }).blur(function() {
      $('.related-searches').slideUp(50);
  });
  //select
  $('.select-in-option').change(function() {
    $(this).parent('dd').find('input').prop('checked',true);
  });
</script>
</body>
</html>