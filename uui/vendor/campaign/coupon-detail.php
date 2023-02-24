<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
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
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="link">購物金使用報表<span class="divider"> &gt; </span></li> <li class="active">詳細訊息</li></ul>
</div>
<section class="template-content">
  <dl class="coupon-infr">
    <dd>購物金活動編號：AG100126</dd>
    <dd>購物金活動名稱：下載360防毒即得序號</dd>
  </dl>
  <button class="btn-back-prev" onclick="location.href='coupon-list.php'"><i class="fa fa-reply"></i>返回列表</button>
  <div class="template-function template-button">
    <button class="btn-export"><i class="fa fa-share"></i>匯出Excel</button>
  </div>
  <section class="table-container">
    <div class="table-hd">
      <table class="template-table">
        <thead>
          <tr>
            <th>日期</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 9; $x++) {
                echo '
                  <tr>
                    <td>2014/7/1</td>
                  </tr>
                ';
            } 
          ?>
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <table class="template-table">
        <thead>
          <tr>
            <th>累計發送組數</th>
            <th>累計發送<br>總點數</th>
            <th>累計歸戶<br>總點數</th>
            <th>歸戶率</th>
            <th>累計使用<br>總點數</th>
            <th>使用率</th>
            <th>歸戶後使用率</th>
            <th>累計使用<br>會員總數</th>
            <th>累計使用購物金<br>消費訂單數</th>
            <th>累計使用<br>新客總數</th>
            <th>累計新客使用購物金<br>消費訂單總額</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 9; $x++) {
                echo '
                  <tr>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">100.00%</td>
                    <td class="num">65,535</td>
                    <td class="num">100.00%</td>
                    <td class="num">100.00%</td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">65,535</td>
                    <td class="num">$65,535</td>
                  </tr>
                ';
            } 
          ?>
        </tbody>
      </table>
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
<script src="../js/campaign-action.js"></script>
</body>
</html>