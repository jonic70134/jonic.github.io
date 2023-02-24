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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">跨境管理<span class="divider"> &gt; </span></li> <li class="active">雲端商品列表</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search"><input type="text" size="50" placeholder="商品名稱/商品ID/賣場ID/廠商自用料號/廠商自用欄位"></label>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
    <label for="checkboxAdv"><input type="checkbox" id="checkboxAdv" class="checkbox-advsearch">進階查詢</label>
  </div>
  <div class="form-element search-filter advanced-search" style="display:none;">
    <label class="label-search">分類<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label>商品新增日</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <br>
    <label class="label-search">可賣量<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup">沒有主商品圖的商品</label>
      <label for="checkBox2"><input type="checkbox" id="checkBox2" name="checkboxGroup">預購商品</label>
      <label for="checkBox3"><input type="checkbox" id="checkBox3" name="checkboxGroup">大材積</label>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>進階查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="pages right clearfix">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
    <span class="item-count">總筆數：65,535</span>
  </div>
  <div class="template-function template-button">
    <span class="cloud-location title">來源國家區域：<span class="show-location">日本 區域1</span></span>
    <button class="btn-action"><i class="fa fa-share"></i>其他國家區域</button>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="cloud-product-table template-table">
        <thead>
          <tr>
            <th>商品圖片</th>
            <th>商品名稱<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>英文名稱</th>
            <th>顏色</th>
            <th>尺寸</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          for ($x = 0; $x <= 10; $x++) {
            echo '
              <tr>
                <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
                <td class="txt"><p class="vertical-middle"><span class="product-name">勺也來好憑覺和和得雙了子台</span></p></td>
                <td class="txt"><p class="vertical-middle"><span class="product-name">et id in nisi cupiditate ab et odio voluptas molestiae</span></p></td>
                <td>黑色</td>
                <td>M</td>           
              </tr>
            ';
          } 
        ?>
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
              <th>可賣量<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>預購商品</th>
              <th>商品資訊</th>
              <th>分類</th>
              <th>屬性</th>
              <th>商品ID<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>新增時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>修改時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>其他<br>顏色尺寸</th>
              <th>商品賣場</th>
              <th>來源國家區域</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              for ($x = 0; $x <= 10; $x++) {
                echo '
                  <tr>
                    <td><a class="go-popup" data-width="800" data-href="popup/cloud-product-max.php">0</a><br><a class="go-popup" data-width="800" data-href="popup/cloud-product-inmarket-max.php">賣場最大<br>銷售量</a></td>
                    <td>否<br><a class="go-popup" data-width="800" data-href="popup/cloud-product-preorder.php">預購紀錄</a></td>
                    <td><a class="go-popup" data-width="800" data-href="popup/cloud-product-detail.php">詳</a></td>
                    <td>全部手機</td>
                    <td><a class="go-popup highlight" data-width="700" data-href="popup/cloud-product-attr.php">缺</a></td>
                    <td>201502AG240000244</td>
                    <td>2013/01/04 20:59</td>
                    <td>2013/12/02 20:59</td>
                    <td><a class="go-popup" data-width="800" data-href="popup/cloud-product-color.php">65,535</a></td>
                    <td><a href="cloud-product-market-single.php">65,535</a></td>
                    <td>日本 區域1</td>
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