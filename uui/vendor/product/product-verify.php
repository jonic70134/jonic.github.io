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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active"><a href="product-verify.php">商品審核</a></li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="product-verify.php" class="active">分類</a></dd>
  <dd><a href="product-verify-attr.php">屬性</a></dd>
</dl>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search"><input type="text" size="50" placeholder="商品名稱/商品ID/賣場ID/廠商自用料號"></label>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    </div>
    <div class="">
    <label class="label-search">分類<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label>商品新增日</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <br>
    <label class="label-search">廠商<input type="text" size="20" placeholder="廠商名稱/廠商ID"></label>

    <label class="label-search">分類審核狀態<select name="" id="" class="select-search"><option value="">全部</option><option value="">未審核</option><option value="">尚未確認</option><option value="">已審核</option></select></label>

    <label class="label-search">審核人<select name="" id="" class="select-search"><option value="">張先生</option><option value="">張大哥</option><option value="">張張的</option><option value="">我好餓</option></select></label>

    <label class="label-search">審核時間
    <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""></label>
  </div>
  </div>
  <div>
    <button class="btn-action" onclick="reFresh_status()"><i class="fa fa-refresh"></i>更新審核狀態</button>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="cloud-product-table template-table">
        <thead>
          <tr>
            <th>審核通過</th>
            <th>尚未確認</th>
            <th>審核狀態</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_1"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_1"/></td>
            <td>尚未確認</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_2"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_2"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_3"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_3"/></td>
            <td><span class="alert_red">未審核</span></td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_4"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_4"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_5"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_5"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_6"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_6"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_7"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_7"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_8"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_8"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_9"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_9"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
            <td><input type="radio" id="checkstatus_1" name="checkstatus_10"/></td>
            <td><input type="radio" id="checkstatus_2" name="checkstatus_10"/></td>
            <td>審核通過</td>
          </tr>
          <tr>
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="cloud-product-table template-table scroll-content">
          <thead>
            <tr>
              <th>商品ID</th>
              <th>商品圖片</th>
              <th>商品名稱</th>
              <th>顏色</th>
              <th>尺寸</th>
              <th>分類</th>
              <th>審核時間</th>
              <th>審核人</th>
              <th>廠商</th>
              <th>商品新增日</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白、黑、橘</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td></td>
              <td></td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
            <tr>
              <td><a  title="商品ID">2015AM999999999</a></td>
              <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
              <td>台灣南波萬馬克杯</td>
              <td>白</td>
              <td>M</td>
              <td><div class="table-breadcrumb">文具 > 辦公用具 > 沖泡 > 杯子/馬克杯</div> <a class="go-popup" data-href="popup/product-verify-category.php" data-width="1000">可修改</a></td>
              <td>2016/01/01 19:00:00</td>
              <td>張先生</td>
              <td>AJ2222 別說了</td>
              <td>2016/01/01 19:00:00</td>
            </tr>
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

function reFresh_status() {
    alert("審核狀態更新成功！");
}
</script>
</body>
</html>