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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">外站賣商品列表</li></ul>
</div>
<div class="select-site" style="display:block;">
  <button class="btn-switch" onclick="location.href = 'cloud-shelve-list.php';"><i class="fa fa-share"></i>回外站賣商品列表</button>
</div>
  <div class="form-element search-filter">
    <label class="label-search">Uitox 賣場 ID <input type="text" size="30"></label>
    <div id="check-market-name" class="select-group">
      <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup" checked>排除已停用</label>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    </div>
  </div>
  
  <section class="table-container">
    <div class="table-body">
        <table class="template-table scroll-content">
          <thead>
            <tr>
              <th>Uitox 賣場ID</th>
              <th>Uitox 賣場名稱</th>
              <th>新增日期</th>
              <th>是否停用</th>
              <th>停用日期</th>
            </tr>
          </thead>
          <tbody>

             <?php 
              for ($x = 0; $x <= 9; $x++) {
                echo '
                  <tr>
                    <td>201601AM0999999</td>
                    <td>GARMIN nüvi 2567T 聲控導航聰明夥伴機</td>
                    <td>2016/01/01 10:10</td>
                    <td>Y</td>
                    <td>2016/01/01 10:10</td>
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