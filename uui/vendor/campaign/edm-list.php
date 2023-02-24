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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">行銷EDM</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search">條件狀態<select name="" id=""><option value="">全部</option></select></label>
    <label class="label-search">新增人<select name="" id=""><option value="">全部</option></select></label>
    <div class="select-group">
      <label>活動時間</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <label class="label-search">活動網頁編號<input type="text" class="input-search" placeholder="請輸入活動網頁編號"></label>
    <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  </div>
  <div class="template-function template-button">
    <button class="btn-create go-popup" data-width="600" data-href="popup/edm-add.php"><i class="fa fa-plus"></i>新增活動網頁</button>
  </div>
  <section class="table-container">
    <div class="table-hd">
      <table class="template-table" width="400">
        <thead>
          <tr>
            <th width="50">狀態</th>
            <th>活動網頁編號</th>
            <th width="200">活動網頁名稱</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 9; $x++) {
                echo '
                  <tr>
                    <td>停止曝光</td>
                    <td>201404C2200000030</td>
                    <td class="txt break-all" title="也晚要走盲瘋是放的見的些會容拿鬧波的以如啡一人腳就腕的前亡所的皮趁啦就.啡陣鍊憑"><a href="" target="_blank">說老真內教棄看來啡歲年不悠總和...</a></td>
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
            <th>開始曝光時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>結束時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>停止曝光</th>
            <th>預覽</th>
            <th>修改</th>
            <th>EDM</th>
            <th>新增人</th>
            <th>新增時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>修改人</th>
            <th>修改時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
          </tr>
        </thead>
        <tbody>

          <?php 
            for ($x = 0; $x <= 4; $x++) {
                echo '
                  <tr>
                    <td>2013/03/02 20:59</td>
                    <td>2013/08/30 20:59</td>
                    <td><button class="btn-green btn-txt"><i class="fa fa-refresh"></i>重新曝光</button></td>
                    <td><button class="btn-blue" title="預覽"><i class="fa fa-search"></i></button></td>
                    <td><button class="btn-green go-popup" data-width="600" data-href="popup/edm-add.php" title="修改"><i class="fa fa-pencil"></i></button></td>
                    <td><button class="btn-green" onclick="location.href="edm-edit.php"" title="編輯"><i class="fa fa-pencil"></i></button><span class="comment">(未完成)</span></td>
                    <td>吳婷</td>
                    <td>2013/07/20 20:59</td>
                    <td>王立</td>
                    <td>2013/12/20 20:59</td>
                  </tr>

                  <tr>
                    <td>2013/10/11 20:59</td>
                    <td>2013/05/30 20:59</td>
                    <td><button class="btn-red btn-txt"><i class="fa fa-times"></i>強制停止</button></td>
                    <td><button class="btn-blue" title="預覽"><i class="fa fa-search"></i></button></td>
                    <td><button class="btn-green go-popup" data-width="600" data-href="popup/edm-add.php" title="修改"><i class="fa fa-pencil"></i></button></td>
                    <td><button class="btn-green" onclick="location.href="edm-edit.php"" title="編輯"><i class="fa fa-pencil"></i></button></td>
                    <td>崔豪如</td>
                    <td>2013/05/24 20:59</td>
                    <td>傅子</td>
                    <td>2013/12/07 20:59</td>
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
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/campaign-action.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>