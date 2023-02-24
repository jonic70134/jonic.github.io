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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動管理<span class="divider"> &gt; </span></li> <li class="active">首頁頭條設定</li></ul>
</div>
<section class="template-content template-content-tab">
  <div class="form-element search-filter">
    <div class="select-group">
      <label>活動日期</label><input type="text" class="input-datepicker" placeholder="請輸入開始日期">~<input type="text" class="input-datepicker" placeholder="請輸入結束日期" value="">
    </div>
    <label class="label-search">狀態<select name="" id=""><option value="">全部</option></select></label>
    <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  </div>
  <section class="table-container table-container-tab">
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="template-table">
          <thead>
            <tr>
              <th>狀態</th>
              <th>顯示日期</th>
              <th>星期</th>
              <th>編輯</th>
              <th>最後編輯者</th>
              <th>最後編輯時間</th>
              <th>預覽＆發佈</th>
              <th>發佈狀態</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>未設定</td>
              <td>2016/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i></button></td>
              <td>--</td>
              <td>--</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><span class="highlight">未發佈</span></td>
            </tr>
            
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
            </tr>
            <tr>
             <td>已設定</td>
              <td>2013/07/25</td>
              <td>日</td>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td><button class="btn-blue go-popup" data-width="1220" data-href="../inside/demo/index.php" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>已發佈</td>
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
(function($){
  $('body').css('overflow','hidden');
})(jQuery);
//cover
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