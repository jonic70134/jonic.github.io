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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">活動管理<span class="divider"> &gt; </span></li> <li class="active">整點特賣</li></ul>
</div>
<div class="select-site">
  <button class="btn-switch" onclick="openCover();"><i class="fa fa-share"></i>切換至我的其他網站</button>
</div>
<dl class="template-tabs">
  <dd><a href="sale-ontime-list.php" class="active">特賣活動設定</a></dd>
  <dd><a href="sale-ontime-setting.php">基本設定</a></dd>
</dl>
<section class="template-content template-content-tab">
  <div class="form-element search-filter">
    <label class="label-search">狀態<select name="" id=""><option value="">全部</option></select></label>
    <div class="select-group">
      <label>活動日期</label><input type="text" class="input-datepicker" placeholder="請輸入開始日期">~<input type="text" class="input-datepicker" placeholder="請輸入結束日期" value="">
    </div>
    <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  </div>
  <section class="table-container table-container-tab">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead>
          <tr>
            <th>狀態</th>
            <th>日期</th>
            <th>星期</th>
            <th>設定檔次</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td>未啟用</td>
            <td>2013/03/15</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/07/31</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/01/29</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/04/12</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/07/07</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/11/29</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/07/25</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/11/16</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/06/30</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
          <tr>
            <td>未啟用</td>
            <td>2013/02/17</td>
            <td>日</td>
            <td>15</td>
          </tr>
          
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
              <th>編輯</th>
              <th>預覽</th>
              <th>活動頁連結</th>
              <th>活動頁有效時間</th>
              <th>停用</th>
              <th>最後編輯者</th>
              <th>最後編輯時間</th>
              <th>發佈者</th>
              <th>發佈時間</th>
              <th>停用者</th>
              <th>停用時間</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><button class="btn-green go-popup" data-width="600" data-href="popup/index-4-edit.php" title="編輯"><i class="fa fa-pencil"></i
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td>--</td>
              <td>--</td>
              <td><button class="btn-green btn-txt"><i class="fa fa-refresh"></i>重新曝光</button></td>
              <td>鄒欣</td>
              <td>2013/09/13 23:59</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/04/30 23:59<br>2013/04/24 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>施秋鴻</td>
              <td>2013/01/08 23:59</td>
              <td>呂聖銘</td>
              <td>2013/05/04 23:59</td>
              <td>洪真民</td>
              <td>2013/06/03 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/11/02 23:59<br>2013/03/16 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>江芳</td>
              <td>2013/10/21 23:59</td>
              <td>尹良銘</td>
              <td>2013/04/07 23:59</td>
              <td>史國安</td>
              <td>2013/09/09 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/03/21 23:59<br>2013/06/22 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>韋宇</td>
              <td>2013/09/14 23:59</td>
              <td>任敏</td>
              <td>2013/04/01 23:59</td>
              <td>任秀</td>
              <td>2013/08/11 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/04/26 23:59<br>2013/06/06 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>萬敏信</td>
              <td>2013/11/25 23:59</td>
              <td>白柏瑜</td>
              <td>2013/06/05 23:59</td>
              <td>何秀</td>
              <td>2013/05/29 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/04/10 23:59<br>2013/12/08 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>譚強慶</td>
              <td>2013/06/19 23:59</td>
              <td>蔣宏</td>
              <td>2013/01/21 23:59</td>
              <td>謝強</td>
              <td>2013/02/05 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/12/27 23:59<br>2013/06/11 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>龍心彥</td>
              <td>2013/07/24 23:59</td>
              <td>方正佩</td>
              <td>2013/01/24 23:59</td>
              <td>郝雅</td>
              <td>2013/03/26 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/10/03 23:59<br>2013/12/05 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>施安真</td>
              <td>2013/10/07 23:59</td>
              <td>劉宗萍</td>
              <td>2013/10/06 23:59</td>
              <td>尹柏</td>
              <td>2013/10/01 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/05/26 23:59<br>2013/12/27 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>謝明</td>
              <td>2013/05/20 23:59</td>
              <td>鄧霖</td>
              <td>2013/02/07 23:59</td>
              <td>袁柏盈</td>
              <td>2013/11/06 23:59</td>
            </tr>
            
            <tr>
              <td><button class="btn-blue" onclick="location.href='sale-ontime-edit.php'" title="詳情"><i class="fa fa-search"></i></button></td>
              <td><button class="btn-blue" title="預覽"><i class="fa fa-desktop"></i></button></td>
              <td><button class="btn-grey go-popup" data-width="600" data-href="popup/sale-ontime-link.php" title="活動頁連結"><i class="fa fa-link"></i></button></td>
              <td>2013/08/10 23:59<br>2013/01/24 23:59</td>
              <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
              <td>郭珮</td>
              <td>2013/08/30 23:59</td>
              <td>王儀</td>
              <td>2013/09/01 23:59</td>
              <td>孫裕</td>
              <td>2013/02/28 23:59</td>
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
<section class="cover">
  <dl class="plateforms">
    <dt class="title">請選擇要進入編輯的網站：</dt>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
  </dl>
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
function closeCover() {
  $('.cover').fadeOut(100);
  $('body').css('overflow','auto');
  $('.select-site').show();
};
function openCover() {
  $('.cover').fadeIn(100);
  $('body').css('overflow','hidden');
  $('.select-site').hide();
};
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