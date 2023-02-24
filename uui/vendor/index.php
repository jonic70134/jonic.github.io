<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<link href="css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="css/index.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <dl class="uitox-annoucement">
  <dt class="title"><i class="fa fa-bomb"></i>重要公告</dt>
  <dd><span class="annouce-highlight">&lt;系統維護公告&gt;</span>目前廠商服務平台維護中，部分功能暫時無法使用，特此公告</dd>
  <a href="annoucement-list.php" class="more">more...</a>
  <div class="clearfix"></div>
</dl>
<div class="check-third-pay">
    <a href="" target="_blank" class="title"><i class="fa fa-arrow-circle-right"></i> 查第三方支付(uitox)餘額、提款</a>
</div>
<div class="index-catagory clearfix">
  <dl class="c-common">
    <dt><i class="fa fa-archive"></i>商品管理</dt>
    <dd class="highlight"><a href="product/add-product.php">新增商品 (單筆/大量)</a></dd>
    <dd class="sub grey"><a href="#">商品統計資料</a></dd>
    <dd><a href="product/import-data.php">批次匯入商品</a></dd>
    <dd><a href="#">單一銷售網頁維護</a></dd>
    <dd><a href="product/sign-up-page.php">報品列表</a></dd>
    <dd><a href="product/batch-instock.php">批次修改可賣量</a></dd>
    <dd><a href="product/batch-price.php">批次修改售價</a></dd>
    <dd><a href="product/product-verify.php">商品審核</a></dd>
    <dd class="grey"><a href="#">商品統計資料</a></dd>
    <dd class="grey"><a href="#">有貨未開賣清單</a></dd>

    <dt><i class="fa fa-th"></i>網站佈置</dt>
    <dd><a href="inside/modify-theme.php">選版型</a></dd>
    <dd><a href="inside/modify-menu.php">分類選單設定</a></dd>
    <dd><a href="inside/modify-homepage.php">首頁佈置</a></dd>
    <dd><a href="inside/modify-asap-homepage.php">(ASAP)首頁佈置</a></dd>
    <dd><a href="inside/modify-asap-mobile-homepage.php">(ASAP)手機版首頁佈置</a></dd>
    <dd><a href="inside/modify-wechat-homepage.php">(WeChat)首頁佈置</a></dd>
    <dd class="grey"><a href="inside/modify-custom.php">站內客制內容產生器</a></dd>
    <dd class="grey"><a href="inside/modify-terms.php">網站定型化企業內容維護</a></dd>

    <dt><i class="fa fa-briefcase"></i>行銷活動管理</dt>
    <dd><a href="">特賣變價</a></dd>
    <dd><a href="campaign/campaign-list.php">行銷活動</a></dd>
    <dd><a href="campaign/coupon-apply-list.php">購物金申請</a></dd>
    <dd><a href="campaign/coupon-list.php">購物金使用報表</a></dd>
    <dd><a href="campaign/additional-purchase.php">購物車加購</a></dd>
    <dd><a href="campaign/edm-list.php">行銷EDM</a></dd>
    <dd><a href="">發送電子報</a></dd>
    <dd><a href="campaign/sale-ontime-list.php">整點特賣</a></dd>
    <dd><a href="campaign/index-4-list.php">首頁頭條設定</a></dd>
  </dl>
  <dl class="c-common">
    <dt><i class="fa fa-plane"></i>跨境與外站管理</dt>
    <dd><a href="#">跨境選項管理</a></dd>
    <dd><a href="#">雲端賣場列表</a></dd>
    <dd><a href="product/cloud-shelve-list.php">外站賣商品列表</a></dd>
  </dl>
  <dl class="c-common">
    <dt><i class="fa fa-search"></i>站內搜尋管理</dt>
    <dd><a href="search/search-keywords.php">熱門與默認關鍵字管理</a></dd>
    <dd><a href="#">搜尋後推薦關鍵字</a></dd>
    <dd><a href="#">搜尋後跳轉</a></dd>
    <dd><a href="#">人工干預搜尋結果</a></dd>
  </dl>
  <dl class="c-common">
    <dt><i class="fa fa-mobile"></i>App專區</dt>
    <dd><a href="app/app-modify-homepage.html">App首頁佈置</a></dd>
    <dd><a href="app/app-push-list.html">App推播設定</a></dd>
  </dl>
  <dl class="c-common">
    <dt><i class="fa fa-inbox"></i>其他</dt>
    <dd><a href="#">網站會員管理</a></dd>
    <dd><a href="#">已申請匯出檔案暫存區</a></dd>
    <dd><a href="other/change-pm.html">更換賣場PM</a></dd>
  </dl>
</div>
<div class="index-catagory clearfix">
  <dl class="c-transfer">
    <dt><i class="fa fa-paste"></i>訂單處理</dt>
    <dd><a href="#">訂單審核</a></dd>
    <dd><a href="#">異常高銷量提醒設定</a></dd>
    <dd><a href="#">異常高銷量清單</a></dd>

    <dt><i class="fa fa-exchange"></i>訂單出貨/退貨</dt>
    <dd><a href="#">退款作業</a></dd>
  </dl>
  <dl class="c-transfer">
    <dt><i class="fa fa-credit-card"></i>金流</dt>
    <dd><a href="#">信用卡請款</a></dd>
    <dd><a href="#">信用卡退款</a></dd>
    <dd><a href="#">核錢作業</a></dd>
    <dd><a href="#">已核錢資料查詢</a></dd>
  </dl>
  <dl class="c-transfer">
    <dt><i class="fa fa-tasks"></i>業績報表</dt>
    <dd><a href="#">業績報表</a></dd>
    <dd><a href="#">訂單查詢</a></dd>
    <dd><a href="achievement/achievement.html">平台即時業績查詢</a></dd>
    <dd><a href="achievement/orders-charts.html">訂單魚群分佈</a></dd>
    <dd><a href="#">平台退訂明細查詢</a></dd>
    <dd><a href="#">發票資訊查詢</a></dd>
    <dd><a href="#">代出貨訂單查詢</a></dd>
  </dl>
  <dl class="c-transfer">
    <dt><i class="fa fa-puzzle-piece"></i>供應商對帳</dt>
    <dd><a href="#">各科目明細</a></dd>
    <dd><a href="account/table.html">總帳款查詢</a></dd>
    <dd><a href="#">輸入憑證(發票與折讓單)</a></dd>
    <dd><a href="#">請款狀態查詢及彙總</a></dd>
  </dl>
  <dl class="c-transfer">
    <dt><i class="fa fa-building"></i>供應商管理</dt>
    <dd><a href="#">對供應商收費項目設定</a></dd>
    <dd><a href="#">新增供應商</a></dd>
    <dd><a href="#">既有供應商資料維護</a></dd>
  </dl>
</div>
<div class="index-catagory clearfix">
  <dl class="c-stock">
    <dt><i class="fa fa-university"></i>寄倉/還貨</dt>
    <dd><a href="#">寄倉(借放uitox倉庫)管理</a></dd>
    <dd><a href="#">還貨(uitox倉庫還回)管理</a></dd>
    <dd><a href="#">慢售商品清單</a></dd>
    <dd><a href="#">慢售商品清單(By PM)</a></dd>
    <dd><a href="#">缺貨_可出貨量低水位清單</a></dd>

    <dt><i class="fa fa-cubes"></i>庫存報表</dt>
    <dd><a href="#">商品即時庫存</a></dd>
    <dd><a href="#">查詢區間進出存</a></dd>
  </dl>
  <dl class="c-stock">
    <dt><i class="fa fa-phone"></i>客服查詢</dt>
    <dd><a href="customer/cs-orders.html">訂單查詢</a></dd>
    <dd><a href="customer/cs-returns.html">退訂查詢</a></dd>
    <dd><a href="">購物金查詢</a></dd>
    <dd><a href="">購物金審核</a></dd>
    <dd><a href="">換貨查詢</a></dd>
    <dd><a href="">預接單(無庫存)查詢</a></dd>
  </dl>
  <dl class="c-stock">
    <dt><i class="fa fa-database"></i>會計管理</dt>
    <dd><a href="">會計財務總表</a></dd>
  </dl>
  <dl class="c-stock">
    <dt><i class="fa fa-file-text-o"></i>基本資料管理</dt>
    <dd><a href="#">平台商資料維護</a></dd>
    <dd><a href="data/set-infr.html">網站基本設定</a></dd>
    <dd><a href="user/user-list.html">後台登入帳號</a></dd>
    <dd><a href="data/annoucement.html">對供應商公告</a></dd>
    <dd><a href="data/table.html">簡訊及email設定</a></dd>
  </dl>
  <a href="" class="more"><i class="fa fa-arrow-circle-right"></i> uitox系統內其他供應商要求來這邊賣，清單如下</a>
</div>
<div class="clearfix"></div>
<dl class="annoucement">
  <dt class="title"><i class="fa fa-bullhorn"></i>各平台重要通知</dt>
  
  <dd><span class="annouce-platform">ASAP</span>有一終黑走下話來啦疲的身一這夜葡早須比戒把皮憑不趕咖腳再了戚入不一回他很以說一黑因結糢花的...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/10/16 20:59:59)</span></dd>
  <dd><span class="annouce-platform">平台名稱</span>-最激他罵歡年不頂那也不趕意陽糧還著吃間的移跳最忙人失被太反停他全喜頓煮冷的不不他頂壺別悲...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/07/09 20:59:59)</span></dd>
  
  <dd><span class="annouce-platform">ASAP</span>逆和不之麵氣以同彼觸又柚嬉拚陷不財地其混的行袖以人幾歡顛到了一實一亮他列拿啡一沒兄和明地團...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/09/22 20:59:59)</span></dd>
  <dd><span class="annouce-platform">平台名稱</span>議的他去著鐘他又中表環不過後有過標這黃來有的問得回詳以亦他啦亭易歲麵你跌相通連計街賺２時或...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/09/22 20:59:59)</span></dd>
  
  <dd><span class="annouce-platform">ASAP</span>忙時閒最死一們這諾著人年在再進更他水趕歹８回的拚說球色的丙太也員我一有到雙熱說前良所一行如...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/06/24 20:59:59)</span></dd>
  <dd><span class="annouce-platform">平台名稱</span>來黎知測市做解分可麼是看真Q不悲宣-容譁和鍊判意失看萄番老他已餃麼憊禮萄啡教失整下地把過去...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/01/12 20:59:59)</span></dd>
  
  <dd><span class="annouce-platform">ASAP</span>貴不著有昌如那新著停回易甘較好喝身力相樣著在暇失啦黑要跌杯他太等奶不身們弟是之樣宵外拜就否...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/01/20 20:59:59)</span></dd>
  <dd><span class="annouce-platform">平台名稱</span>上採一痛先幾腦沒部不棒行個高杯頂燈非等腕整走有始為上去中啦比贊們咖愈現行霜頭進他有地再就地...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/03/03 20:59:59)</span></dd>
  
  <dd><span class="annouce-platform">ASAP</span>們環.本身了些就苦一實子不漏有處很疲熱日之整憑奏不聚白這樣用開暇佔這人廢發類過眩掉出有年地...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/02/03 20:59:59)</span></dd>
  <dd><span class="annouce-platform">平台名稱</span>哈未最像類他憑我著一去此了麵山罵真面救無科易1何水地金空了咖賴說傻過和烈全以再浩有通是就較...(<a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.php" data-type="iframe">詳</a>)<span class="annouce-date">(2013/12/20 20:59:59)</span></dd>
  
  <a href="annoucement-list.php" class="more">more...</a>
  <div class="clearfix"></div>
</dl>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="js/lib/jquery-1.9.1.js" ></script>
<script src="js/lib/bootstrap-dropdown.js"></script>
<script src="js/nav-action.js"></script>
<script src="js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="js/index-action.js"></script>
</body>
</html>