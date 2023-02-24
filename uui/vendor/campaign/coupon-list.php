<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
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
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">購物金使用報表</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search">購物金活動編號<input type="text" class="input-search" placeholder="請輸入購物金活動編號"></label>
    <label class="label-search">使用平台<select name="" id="" class="select-search"><option value="">請選擇</option></select></label>
    <div class="select-group">
      <label>建立時間</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""><span class="comment"> (查詢區間最長90天，可查詢6個月內資料)</span>
    </div>
    <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  </div>
  <div class="template-function template-button">
    <button class="btn-export"><i class="fa fa-share"></i>匯出Excel</button>
  </div>
  <section class="table-container">
    <div class="table-hd">
      <table class="template-table">
        <thead>
          <tr>
            <th>建立時間</th>
            <th>購物金活動編號</th>
            <th>購物金活動名稱</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 20; $x++) {
                echo '
                  <tr>
                    <td>2013/08/16 20:59</td>
                    <td>AG100126</td>
                    <td class="txt">無身不或死８無部你沒甜</td>
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
            <th>發送每組點數</th>
            <th>發送組數</th>
            <th>發送總點數</th>
            <th>歸戶總點數</th>
            <th>歸戶率</th>
            <th>使用總點數</th>
            <th>使用率</th>
            <th>歸戶後使用率</th>
            <th>使用會員總數</th>
            <th>使用購物金<br>消費訂單數</th>
            <th>使用新客總數</th>
            <th>新客使用購物金<br>消費訂單總額</th>
            <th>發出平台</th>
            <th>類型</th>
            <th>詳細訊息</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 19; $x++) {
                echo '
                  <tr>
                    <td class="num">65,535</td>
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
                    <td>STAYREAL</td>
                    <td>非序號</td>
                    <td><button class="btn-blue" onclick="location.href="coupon-detail.php"" title="詳細訊息"><i class="fa fa-search"></i></button></td>
                  </tr>
                ';
            } 
          ?>
          
          <tr class="summary">
            <td class="num">&nbsp;</td>
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
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
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/campaign-action.js"></script>
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