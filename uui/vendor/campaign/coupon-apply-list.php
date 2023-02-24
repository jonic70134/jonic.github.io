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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">購物金申請</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search">活動名稱/活動編號<input type="text" class="input-search" placeholder="請輸入活動名稱/活動編號"></label>
    <label for="checkAdvSearch"><input type="checkbox" id="checkAdvSearch" class="checkbox-advsearch">進階查詢</label>
    <div class="adv-search" style="display:none;">
      <label class="label-search">申請類型<select name="" id="" class="select-search"><option value="">請選擇</option></select></label>
      <div class="select-group">
        <label>活動狀態</label>
        <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup" checked>待審核</label>
        <label for="checkBox2"><input type="checkbox" id="checkBox2" name="checkboxGroup" checked>通過</label>
        <label for="checkBox3"><input type="checkbox" id="checkBox3" name="checkboxGroup">停用</label>
        <label for="checkBox4"><input type="checkbox" id="checkBox4" name="checkboxGroup">未通過</label>
        <label for="checkBox5"><input type="checkbox" id="checkBox5" name="checkboxGroup">未審核已過期</label>
      </div>
      <div class="select-group">
        <label>申請時間</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
      </div>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="template-function template-button">
    <button class="btn-create go-popup" data-width="700" data-href="popup/coupon-apply-edit.php"><i class="fa fa-pencil-square-o"></i>申請購物金</button>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead>
          <tr>
            <th>審核</th>
            <th>活動狀態</th>
            <th>發出平台</th>
            <th>購物金活動編號</th>
            <th>購物金活動名稱</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><button class="btn-red go-popup" data-width="450" data-href="popup/coupon-apply-verify.php" title="審核"><i class="fa fa-gavel"></i></button></td>
            <td><span class="highlight">待審核</span></td>
            <td>ASAP</td>
            <td>AG000016</td>
            <td class="txt">了褲是去反奮子疼龍掉</td>
          </tr>
          <?php 
            for ($x = 0; $x <= 8; $x++) {
                echo '
                  <tr>
                    <td>&nbsp;</td>
                    <td>未審核已過期</td>
                    <td>ASAP</td>
                    <td>AG000016</td>
                    <td class="txt">遲了不地變皮拚命做疑總浩</td>
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
        <table class="template-table scroll-content">
        <thead>
          <tr>
            <th>申請類型</th>
            <th>申請內容</th>
            <th>下載序號</th>
            <th>贈點名單</th>
            <th>停用</th>
            <th>停用者</th>
            <th>停用時間</th>
            <th>審核者</th>
            <th>審核時間</th>
            <th>修改者</th>
            <th>修改時間</th>
            <th>申請者</th>
            <th>申請時間</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>序號申請</td>
            <td><button class="btn-green go-popup" data-width="700" data-href="popup/coupon-apply-edit.php" title="修改"><i class="fa fa-pencil"></i></button></td>
            <td><button class="btn-blue" title="下載序號"><i class="fa fa-download"></i></button></td>
            <td>&nbsp;</td>
            <td><button class="btn-grey" onclick="confirm('確認要停用「心歲容中閃的煩一些疲禮在中」活動?')" title="停用"><i class="fa fa-times"></i></button></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>韋仁</td>
            <td>2013/07/28 20:59</td>
            <td>程芳</td>
            <td>2013/09/24 20:59</td>
            <td>牛儀佩</td>
            <td>2013/03/19 20:59</td>
          </tr>
          <?php 
            for ($x = 0; $x <= 8; $x++) {
                echo '
                  <tr>
                    <td>序號申請</td>
                    <td><button class="btn-blue go-popup" data-width="600" data-href="popup/coupon-apply-confirm.php" title="瀏覽"><i class="fa fa-search"></i></button></td>
                    <td>&nbsp;</td>
                    <td><button class="btn-blue go-popup" data-width="600" data-href="popup/coupon-apply-users.php" title="瀏覽"><i class="fa fa-search"></i></button></td>
                    <td>&nbsp;</td>
                    <td>林芳華</td>
                    <td>2013/03/03 20:59</td>
                    <td>賀瑋</td>
                    <td>2013/12/29 20:59</td>
                    <td>常芬正</td>
                    <td>2013/07/29 20:59</td>
                    <td>段士珮</td>
                    <td>2013/04/20 20:59</td>
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
<script src="../js/double-scroll.js"></script>
<script>
//date time picker
var timeOption = {
  dateFormat: 'yy/mm/dd',
  timeFormat: 'HH:mm',
  stepMinute: 10
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>