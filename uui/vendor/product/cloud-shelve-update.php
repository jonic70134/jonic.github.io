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

    <label class="label-search">項目<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">全部</option><option value="">新增</option><option value="">上下架</option><option value="">可賣量</option><option value="">售價</option><option value="">圖片</option><option value="">文字</option></select></label>
    
     <div class="select-group">
      <label>更新觸發時間</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
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
              <th>類別</th>
              <th>項目</th>
              <th>更新的觸發時間</th>
              <th>外站實際更新時間</th>
              <th>狀態</th>
              <th>說明</th>
            </tr>
          </thead>
          <tbody>

             <?php 
              for ($x = 0; $x <= 9; $x++) {
                echo '
                  <tr>
                    <td>一般</td>
                    <td>可賣量</td>
                    <td>2016/01/01 10:10</td>
                    <td>2016/01/01 10:10</td>
                    <td>first_zero</td>
                    <td>外站平台第一次可賣量為0</td>
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