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
  <ul class="breadcrumb"><li><a href="../index.php">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">行銷活動列表</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search">活動ID / 名稱<input type="text" class="input-search" placeholder="請輸入活動ID或名稱"></label>
    <div class="select-group">
      <span class="select-group-name">活動類型</span>
      <label for="campaignType1"><input type="checkbox" id="campaignType1" name="campaignType">無效</label>
      <label for="campaignType2"><input type="checkbox" id="campaignType2" name="campaignType">有效尚未開始</label>
      <label for="campaignType3"><input type="checkbox" id="campaignType3" name="campaignType">有效進行中</label>
      <label for="campaignType4"><input type="checkbox" id="campaignType4" name="campaignType">過期</label>
      <label for="campaignType5"><input type="checkbox" id="campaignType5" name="campaignType">停用</label>
    </div>
    <div class="select-group">
      <label>活動時間</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <label class="label-search">活動類型<select name="" id="" class="select-search"><option value="">請選擇</option></select></label>
    <label class="label-search">販售平台<select name="" id="" class="select-search"><option value="">請選擇</option></select></label>
    <label class="label-search">看其他人<select name="" id="" class="select-search"><option value="">請選擇</option></select></label>
    <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
    <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  </div>
  <div class="template-function template-button">
    <button class="btn-create go-popup" data-width="600" data-href="popup/campaign-add.php"><i class="fa fa-plus"></i>新增滿額折Y元</button>
    <button class="btn-create go-popup" data-width="600" data-href="popup/campaign-add-coupon.php"><i class="fa fa-plus"></i>新增滿額送購物金</button>
  </div>
  <section class="table-container">
    <div class="table-hd">
      <table class="template-table" width="500">
        <thead>
          <tr>
            <th width="50">活動狀態</th>
            <th width="50">販售平台</th>
            <th>活動ID</th>
            <th width="200">活動名稱</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 5; $x++) {
                echo '
                  <tr>
                    <td>無效</td>
                    <td class="txt break-all">平台平台平台</td>
                    <td>201404C2200000030</td>
                    <td class="txt break-all" title="啦老挨他是賜發戶盲敢上廣情以無些動看可去讓甜非萄這要出決連夜好兄他他瘋明在三對人"><a href="" target="_blank">談輸瘦沒熱達了讓繞仰你另橫兩一險野命...</a></td>
                  </tr>
                  <tr>
                    <td>有效-進行中</td>
                    <td>ASAP</td>
                    <td>201404C2200000031</td>
                    <td class="txt break-all" title="自不血更要好需吃決似狗我比竟我和不堆咖要門團死金一失你跌以勺災裡將甜本餃樣一可在"><a href="" target="_blank">在來鬧辯宵已點金在啊示捲做捨街...</a></td>
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
            <th>活動類型</th>
            <th>活動模式</th>
            <th>活動促銷</th>
            <th>開始時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>結束時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>修改活動</th>
            <th>活動範圍</th>
            <th>活動成本</th>
            <th>活動訊息</th>
            <th>活動商品</th>
            <th>停用</th>
            <th>停用者</th>
            <th>停用時間</th>
            <th>修改者</th>
            <th>修改時間</th>
            <th>新增者</th>
            <th>新增時間</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 11; $x++) {
                echo '
                  <tr>
                    <td>滿額送購物金</td>
                    <td>不可累計</td>
                    <td class="txt">滿1000元折100元</td>
                    <td>2013/05/12 20:59</td>
                    <td>2013/10/27 20:59</td>
                    <td><button class="btn-green go-popup" data-width="600" data-href="popup/campaign-add.php" title="修改"><i class="fa fa-pencil"></i></button></td>
                    <td class="txt"><span class="txt-marking">未設定</span><button class="btn-green go-popup" data-width="600" data-href="popup/campaign-set-conditions.php" title="設定"><i class="fa fa-pencil"></i></button></td>
                    <td class="txt"><span class="txt-marking">未設定</span><button class="btn-green go-popup" data-width="1200" data-href="popup/campaign-cost.php" title="設定"><i class="fa fa-pencil"></i></button></td>
                    <td><button class="btn-green go-popup" data-width="600" data-href="popup/campaign-infr.php" title="設定活動訊息"><i class="fa fa-pencil"></i></button></td>
                    <td><button class="btn-blue" onclick="location.href="campaign-detail.php"" title="查看活動商品"><i class="fa fa-search"></i></button></td>
                    <td><button class="btn-red" onclick="confirm("停用後無法再度啟用，\n確認要立即停用「憶餃台以起閒天始人經」活動？"");" title="停用"><i class="fa fa-times"></i></button></td>
                    <td>夏倫</td>
                    <td>2013/05/01 20:59</td>
                    <td>金霖</td>
                    <td>2013/10/20 20:59</td>
                    <td>孟國芳</td>
                    <td>2013/12/19 20:59</td>
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
    timeFormat: 'HH:mm',
    stepMinute: 10
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>