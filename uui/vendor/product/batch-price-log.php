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
  <ul class="breadcrumb"><li><a href="../index.php">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="/product/batch-price.html">批次修改售價</a><span class="divider"> &gt; </span></li> <li class="active">查詢修改記錄</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="batch-price.php">批次修改售價</a></dd>
  <dd><a href="batch-price-log.php" class="active">查詢修改記錄</a></dd>
</dl>
<section class="template-content">
  <div class="form-element search-filter">
    <div class="select-group">
      <label>修改日期</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始日期">~<input type="text" class="input-datepicker" placeholder="請輸入結束日期" value=""><span class="comment"> (可查詢1個月內資料)</span>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <section class="table-container">
    <table class="template-table">
      <thead>
        <tr>
          <th>修改人</th>
          <th>設定時間</th>
          <th>更新完成時間</th>
          <th>上傳總筆數</th>
          <th>已更新筆數</th>
          <th>未更新筆數</th>
          <th>查看未更新記錄</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          for ($x = 0; $x <= 10; $x++) {
              echo '
                <tr>
                  <td>戴維凱</td>
                  <td>2013/06/20 20:59:59</td>
                  <td>2013/06/16 20:59:59</td>
                  <td>65,535</td>
                  <td>65,535</td>
                  <td>65,535</td>
                  <td><button class="btn-blue" title="下載記錄"><i class="fa fa-download"></i></button></td>
                </tr>
              ';
          } 
        ?>
      </tbody>
    </table>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
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
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false,
    minDate: -31,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>