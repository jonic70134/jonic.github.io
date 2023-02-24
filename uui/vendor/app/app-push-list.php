<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="/css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/layout.css" rel="stylesheet" type="text/css">
<link href="/css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="/css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="/css/template.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="/js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="/css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <header id="header" class="clearfix">
      <div class="logo"><a href="#" title="回到首頁"><span>平台管理系統</span></a></div>
      <!-- User -->
      <div class="user">
        <div class="btn-group">
          <a class="btn-group-user go-popup" data-width="400" data-href="/index/popup/supply-only.html" data-type="iframe"><i class="fa fa-truck"></i>純出貨</a>
        </div>
        <div class="btn-group">
          <a class="btn-group-user" href="/data/site-setting.html"><i class="fa fa-cogs"></i>平台設定</a>
        </div>
        <div class="btn-group">
          <!-- if annoucement -->
          <a class="dropdown-toggle btn-group-user" data-toggle="dropdown" href="#"><i class="fa fa-bullhorn animate-rubberBand animated"></i><span class="quantity">99</span><span class="caret"></span></a>
          <!-- if no annoucement -->
          <!--a class="dropdown-toggle btn-group-user" data-toggle="dropdown" href="#"><i class="fa fa-bullhorn"></i><span class="quantity quantity-zero">0</span><span class="caret"></span></a-->
          <ul class="dropdown-menu">
            <li><a href="#">系統公告<span class="quantity">55</span></a></li>
            <li><a href="#">ASAP<span class="quantity">99+</span></a></li>
            <li><a href="#">ADI<span class="quantity">99+</span></a></li>
          </ul>
        </div>
        <div class="btn-group">
          <!-- if notification -->
          <!--a class="dropdown-toggle btn-group-user" data-toggle="dropdown" href="#"><i class="fa fa-bell animate-swing animated"></i><span class="quantity">99</span><span class="caret"></span></a-->
          <!-- if no notification -->
          <a class="dropdown-toggle btn-group-user" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i><span class="quantity quantity-zero">0</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><span class="notification-summary"><i class="fa fa-exclamation-triangle"></i>99 項新通知</span></li>
            <li><a href="#">新品尚未開單<span class="quantity">55</span></a></li>
            <li><a href="#">新品尚未開單新品尚未開單<span class="quantity">99+</span></a></li>
            <li><a href="#" class="more-notification">更多通知<i class="fa fa-arrow-circle-right"></i></a></li>
          </ul>
        </div>
        <div class="btn-group">
          <a class="dropdown-toggle btn-group-user" data-toggle="dropdown" href="#"><i class="fa fa-user"></i>userName<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/user/my-account.html">個人資料修改</a></li>
            <li><a href="#">登出</a></li>
          </ul>
        </div>
      </div>
      <!-- User /-->
    </header>
    <!--Header /-->    <!-- BEGIN Menu -->
    <div class="nav-bg"></div>
    <nav id="nav">
     <ul>
      <li class="dis-dropdown"><a href="/" ><i class="fa fa-home"></i>首頁</a></li>
      <li><span ><i class="fa fa-archive"></i>商品管理</span>
          <ul>
            <li><a href="/product/add-product.html">新增商品 (單筆/大量)</a></li>
            <li><a href="/product/import-data.html">批次匯入商品</a></li>
            <li><a href="/product/batch-instock.html">批次修改可賣量</a></li>
            <li><a href="/product/batch-price.html">批次修改售價</a></li>
            <li><a href="#">商品有可賣量不能賣清單</a></li>
            <li><a href="#">前台可賣量已缺貨清單</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-th"></i>前端賣場佈置/管理</span>
          <ul>
            <li><a href="/inside/modify-theme.html">網站風格設定(選版型)</a></li>
            <li><a href="/inside/modify-homepage.html">首頁佈置</a></li>
            <li><a href="/inside/modify-asap-homepage.html">ASAP首頁佈置</a></li>
            <li><a href="/inside/modify-menu.html">新增區館(分類)/列表</a></li>
            <li><a href="#">維護各賣場商品</a></li>
            <li><a href="#">活動品變價管理</a></li>
            <li><a href="/search/search-keywords.html">站內熱門字搜尋設定</a></li>
            <li><a href="#">網站設定(購買上限/公告等)</a></li>
            <li><a href="/inside/modify-terms.html">自訂購物需知</a></li>
            <li><a href="/inside/modify-privacy.html">自訂隱私權</a></li>
            <li><a href="/inside/modify-custom.html">自訂頁面管理</a></li>
          </ul>
      </li>
      <li><span class="active"><i class="fa fa-mobile"></i>App專區</span>
          <ul>
            <li><a href="/app/app-modify-homepage.html">App首頁佈置</a></li>
            <li><a href="/app/app-push-list.html">App推播設定</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-briefcase"></i>行銷活動管理</span>
          <ul>
            <li><a href="/campaign/campaign-list.html">行銷活動設定/查詢</a></li>
            <li><a href="/campaign/additional-purchase.html">結帳頁下加購商品</a></li>
            <li><a href="/campaign/edm-list.html">eDM編輯/發送</a></li>
            <li><a href="/campaign/coupon-apply-list.html">購物金申請</a></li>
            <li><a href="/campaign/coupon-list.html">購物金使用報表</a></li>
            <li><a href="/campaign/sale-ontime-list.html">整點特賣</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-tasks"></i>業績報表</span>
          <ul>
            <li><a href="/achievement/achievement.html">平台即時業績查詢</a></li>
            <li><a href="/achievement/orders-charts.html">訂單魚群</a></li>
            <li><a href="#">訂單查詢</a></li>
            <li><a href="#">平台退訂明細查詢</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-exchange"></i>進還貨管理</span>
          <ul>
            <li><a href="#">申請/刪除寄倉單</a></li>
            <li><a href="#">申請/刪除退倉單</a></li>
            <li><a href="#">列印寄倉單→進貨到uitox</a></li>
            <li><a href="#">新品未開單列表</a></li>
            <li><a href="#">進貨被驗退商品</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-cubes"></i>庫存報表</span>
          <ul>
            <li><a href="#">商品即時庫存</a></li>
            <li><a href="#">商品區間進銷存</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-paste"></i>訂單出貨狀況</span>
          <ul>
            <li><a href="#">全部未出訂單</a></li>
            <li><a href="#">超過24H未出貨訂單</a></li>
            <li><a href="#">已出貨回填異常訂單</a></li>
            <li><a href="#">查所有訂單</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-share"></i>訂單出貨</span>
          <ul>
            <li><a href="">下載匯入範例</a></li>
            <li><a href="">下載匯入範例 - 宅配</a></li>
            <li><a href="">下載匯入範例 - 超取</a></li>
            <li><a href="/orders/delivery.html">匯入訂單</a></li>
            <li><a href="">查詢訂單匯入結果</a></li>
            <li><a href="/orders/delivery-feedback.html">查看訂單出貨狀態</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-reply"></i>訂單退訂</span>
          <ul>
            <li><a href="">下載退訂範例</a></li>
            <li><a href="/orders/returns.html">匯入退訂</a></li>
            <li><a href="">查詢退訂匯入結果</a></li>
            <li><a href="">查看退訂收回狀態</a></li>
          </ul>
      </li>
      <li><span><i class="fa u-icon-u"></i>對uitox帳款</span>
          <ul>
            <li><a href="#">即時對帳</a></li>
            <li><a href="#">已請款歷史帳款明細</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-puzzle-piece"></i>與供應商對帳</span>
          <ul>
            <li><a href="/account/table.html">即時對帳</a></li>
            <li><a href="#">已請款歷史帳款明細</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-phone"></i>營管/客服</span>
          <ul>
            <li><a href="">審訂單價格</a></li>
            <li><a href="/customer/cs-orders.html">訂單查詢</a></li>
            <li><a href="/customer/cs-returns.html">退訂查詢</a></li>
            <li><a href="">購物金查詢</a></li>
            <li><a href="">購物金審核</a></li>
            <li><a href="/data/table.html">簡訊及e-mail設定</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-building"></i>供應商管理</span>
          <ul>
            <li><a href="#">供應商資料與合約</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-user"></i>會員管理</span>
          <ul>
            <li><a href="#">會員資料修改/補發帳密</a></li>
          </ul>
      </li>
      <li><span ><i class="fa fa-lock"></i>權限設定</span>
          <ul>
            <li><a href="/user/user-list.html">新增人員權限/查詢</a></li>
            <li><a href="/user/user-group-list.html">看所有權限列表</a></li>
            <li><a href="">從系統匯出資料紀錄</a></li>
            <li><a href="">對uitox窗口資料維護</a></li>
          </ul>
      </li>
      <li><span><i class="fa fa-envelope"></i>聯絡uitox</span>
          <ul>
            <li><a href="#">聯絡uitox</a></li>
          </ul>
      </li>     
     </ul>
    </nav>
    <!-- END Menu -->    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">App專區<span class="divider"> &gt; </span></li> <li class="active">App推播</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <div class="select-group">
      <label class="label-search">推播類型</label>
      <select name="" id="" class="select-search"><option value="">系統</option><option value="">自訂</option></select>
    </div>
    <div class="select-group">
      <label class="label-search">狀態</label>
      <select name="" id="" class="select-search"><option value="">啟用</option><option value="">停用</option><option value="">未發送</option><option value="">已發送</option></select>
    </div>
    <div class="select-group">
      <label class="label-search">推播時間</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <br>
    <div class="select-group">
      <label class="label-search">推播名稱</label>
      <input type="text" size="30" placeholder="輸入關鍵字">
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="template-function template-button">
    <button class="btn-create go-popup" data-width="600" data-href="/app/popup/add-push.html"><i class="fa fa-plus"></i>新增推播</button>
  </div>
  <section class="table-container">
    <table class="template-table">
      <thead>
        <tr>
          <th>推播類型</th>
          <th>推播名稱</th>
          <th>訊息類型</th>
          <th>狀態</th>
          <th>推播週期</th>
          <th>推播數</th>
          <th>推播時間</th>
          <th>管理</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td>系統</td>
          <td class="txt">憑輸你論子不的溪拜的后</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/06/30 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">甜這現買宵了用接向月片晚哈</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/05/18 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">咖終月何不回的過子去不氣</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/06/18 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">和裡混有何一走進一知這一</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/09/21 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">兄了到也掉便水了下住很</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/11/26 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">沒慢暫了們抱差顆命人難正其</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/11/14 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">區用子也攜晨能能又這啊他</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/03/23 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">樣和再要貴這一上團萄</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/11/08 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">☆行面的疲Q亦雙一便</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/08/26 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
        <tr>
          <td>系統</td>
          <td class="txt">完啊愈不樣地再亂上太城</td>
          <td>文案</td>
          <td>啟用</td>
          <td>週期</td>
          <td class="num">65,535</td>
          <td>2013/07/11 20:59</td>
          <td>
            <a>啟用</a>&nbsp;
            <a>停用</a>&nbsp;
            <a class="go-popup" data-width="650" data-href="/app/popup/add-push-new.html">編輯</a>&nbsp;
            <a>刪除</a>
          </td>
        </tr>
        
      </tbody>
    </table>
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
<script src="/js/lib/jquery-1.9.1.js" ></script>
<script src="/js/lib/bootstrap-dropdown.js"></script>
<script src="/js/nav-action.js"></script>
<script src="/js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="/js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="/js/lib/jquery-ui-sliderAccess.js"></script>
<script src="/js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="/js/template-action.js"></script>
<script src="/js/double-scroll.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    timeFormat: 'HH:mm',
    stepMinute: 10,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>