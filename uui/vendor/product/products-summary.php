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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="products-summary.php">商品數量小計</a></li><span class="divider"> &gt; </span></li> <li class="active">PM</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="products-summary.php" class="active">PM</a></dd>
  <dd><a href="products-summary-vendor.php">廠商</a></dd>
  <dd><a href="products-summary-daily.php">每日統計</a></dd>
</dl>
<section class="template-content">
  <div class="form-element search-filter">
    <div class="select-group">
      <label>商品購買模式</label>
      <label for="radio1"><input type="radio" id="radio1" name="radioGroup" checked>借貨</label>
      <label for="radio2"><input type="radio" id="radio2" name="radioGroup">轉單</label>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="template-function template-button">
    <button class="btn-action"><i class="fa fa-download"></i>匯出</button>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead>
          <tr>
            <th colspan="2">&nbsp;</th>
          </tr>
          <tr>
            <th>#</th>
            <th>PM名稱</th>
          </tr>
        </thead>
        <tbody>
          
          <tr> <td>1</td> <td>謝婷佩</td> </tr>
          <tr> <td>2</td> <td>賴智</td> </tr>
          <tr> <td>3</td> <td>崔慶銘</td> </tr>
          <tr> <td>4</td> <td>高世英</td> </tr>
          <tr> <td>5</td> <td>錢瑞</td> </tr>
          <tr> <td>6</td> <td>劉立</td> </tr> 
          <tr> <td>7</td> <td>嚴韻聖</td> </tr>
          <tr> <td>8</td> <td>餘蓉正</td> </tr>
          <tr> <td>9</td> <td>沈強偉</td> </tr>
          <tr> <td>10</td> <td>戴彥強</td> </tr>
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
              <th colspan="12">商品</th>
              <th colspan="4">賣場</th>
            </tr>
            <tr>
              <th>SKU數</th>
              <th>廠商新增</th>
              <th>廠商新增百分比</th>
              <th>PM新增</th>
              <th>PM新增百分比</th>
              <th>有進過貨</th>
              <th>沒進過貨</th>
              <th>庫存&gt;0</th>
              <th>庫存=0</th>
              <th>可賣量&gt;0</th>
              <th>可賣量&lt;=0</th>
              <th>垃圾筒</th>
              <th>賣場數</th>
              <th>有顯示</th>
              <th>沒顯示</th>
              <th>垃圾筒</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              for ($x = 0; $x <= 9; $x++) {
                  echo '
                    <tr>
                      <td class="num">65,535</td>
                      <td class="num">65,535</td>
                      <td class="num">100.00%</td>
                      <td class="num">65,535</td>
                      <td class="num">100.00%</td>
                      <td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td>
                    </tr>
                  ';
              } 
            ?>
            
          </tbody>
        </table>
      </section>
    </div>
    <div class="clearfix"></div>
  </section>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead>
          <tr>
            <th colspan="2">&nbsp;</th>
          </tr>
          <tr>
            <th>#</th>
            <th>PM名稱</th>
          </tr>
        </thead>
        <tbody>
          
          <tr> <td>1</td> <td>梁玲</td> </tr>
          <tr> <td>2</td> <td>龍銘</td> </tr>
          <tr> <td>3</td> <td>秦冠菁</td> </tr>
          <tr> <td>4</td> <td>張慧</td> </tr>
          <tr> <td>5</td> <td>於俊瑩</td> </tr>
          <tr> <td>6</td> <td>萬國</td> </tr> 
          <tr> <td>7</td> <td>梁德</td> </tr>
          <tr> <td>8</td> <td>尹民</td> </tr>
          <tr> <td>9</td> <td>葉蓉如</td> </tr>
          <tr> <td>10</td> <td>郭瑩忠</td> </tr>
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
              <th colspan="8">商品</th>
              <th colspan="4">賣場</th>
            </tr>
            <tr>
              <th>SKU數</th>
              <th>廠商新增</th>
              <th>廠商新增百分比</th>
              <th>PM新增</th>
              <th>PM新增百分比</th>
              <th>可賣量&gt;0</th>
              <th>可賣量&lt;=0</th>
              <th>垃圾筒</th>
              <th>賣場數</th>
              <th>有顯示</th>
              <th>沒顯示</th>
              <th>垃圾筒</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              for ($x = 0; $x <= 10; $x++) {
                  echo '
                    <tr>
                      <td class="num">65,535</td>
                      <td class="num">65,535</td>
                      <td class="num">100.00%</td>
                      <td class="num">65,535</td>
                      <td class="num">100.00%</td>
                      <td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td><td class="num">65,535</td>
                    </tr>
                  ';
                } 
              ?>
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
<script src="../js/template-action.js"></script>
<script src="../js/double-scroll.js"></script>
</body>
</html>