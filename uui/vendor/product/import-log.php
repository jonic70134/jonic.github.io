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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="import-data.php">批次匯入商品</a></li><span class="divider"> &gt; </span></li> <li class="active">查詢上傳記錄</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="import-data.php">匯入商品資料</a></dd>
  <dd><a href="import-image.php">匯入商品圖檔</a></dd>
  <dd><a href="import-log.php" class="active">查詢上傳記錄</a></dd>
</dl>
<section class="template-content">
  <div class="form-element search-filter">
    <div class="select-group">
      <label>上傳日期</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始日期">~<input type="text" class="input-datepicker" placeholder="請輸入結束日期" value=""><span class="comment"> (查詢區間最長90天，可查詢6個月內資料)</span>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead>
          <tr>
            <th>Excel上傳時間</th>
            <th>上傳批號</th>
            <th>上傳者</th>
            <th>廠商編號</th>
            <th>廠商簡稱</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 10; $x++) {
                echo '
                  <tr>
                    <td>2013/12/15 20:59:59</td>
                    <td>201408A12000001</td>
                    <td>康瑜明</td>
                    <td>AJ4023</td>
                    <td>街七領</td>
                  </tr>
               ';
          }?>
          
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="template-table scroll-content">
          <thead>
            <tr>
              <th>上傳筆數</th>
              <th>產生商品筆數</th>
              <th>差異筆數</th>
              <th>開始處理時間</th>
              <th>完成處理時間</th>
              <th>需要配圖數量</th>
              <th>已完成配圖數量</th>
              <th>未完成配圖數量</th>
              <th>找不到圖數量</th>
              <th>逾時不再處理數量</th>
              <th>其他未完成數量</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for ($x = 0; $x <= 10; $x++) {
                echo '
                  <tr>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num"><a class="go-popup" data-width="800" data-href="popup/import-different.php" title="查看差異筆數">65,535</a></td>
                    <td>2013/01/28 20:59:59</td>
                    <td>2013/02/18 20:59:59</td>
                    <td class="num"><a class="go-popup" data-width="1000" data-href="popup/import-unfinished.php" title="查看未完成配圖明細">65,535</a></td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                  </tr>
               ';
          }?>
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